<?php
header('Content-Type: application/json');

// Configuration
$maxFileSize = 55 * 1024 * 1024; // 55 Mo
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
$uploadDir = 'uploads/';
$watermarkDir = 'watermarks/';
$response = ['success' => false, 'message' => ''];

try {
    // Vérifier la méthode HTTP
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Méthode non autorisée');
    }

    // Vérifier le token CSRF
    if (empty($_POST['csrf_token'])) {
        throw new Exception('Token CSRF manquant');
    }

    // Vérifier les fichiers uploadés
    if (empty($_FILES['photos']) || empty($_FILES['photos']['tmp_name'][0])) {
        throw new Exception('Aucun fichier image sélectionné');
    }

    if (empty($_FILES['watermark_logo']) || empty($_FILES['watermark_logo']['tmp_name'])) {
        throw new Exception('Veuillez sélectionner un logo pour le watermark');
    }

    // Vérifier les paramètres du watermark
    $watermarkSize = intval($_POST['watermark_size'] ?? 15);
    $watermarkOpacity = intval($_POST['watermark_opacity'] ?? 50);
    $watermarkMargin = intval($_POST['watermark_margin'] ?? 10);
    $watermarkPosition = $_POST['watermark_position'] ?? 'bottom-right';

    // Valider les valeurs
    if ($watermarkSize < 5 || $watermarkSize > 30) {
        throw new Exception('La taille du watermark doit être entre 5% et 30%');
    }

    if ($watermarkOpacity < 10 || $watermarkOpacity > 100) {
        throw new Exception('L\'opacité du watermark doit être entre 10% et 100%');
    }

    if ($watermarkMargin < 0 || $watermarkMargin > 50) {
        throw new Exception('La marge du watermark doit être entre 0px et 50px');
    }

    // Créer les répertoires s'ils n'existent pas
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (!file_exists($watermarkDir)) {
        mkdir($watermarkDir, 0755, true);
    }

    // Traiter le logo watermark
    $watermarkFile = $_FILES['watermark_logo'];
    $watermarkTmpName = $watermarkFile['tmp_name'];
    $watermarkType = $watermarkFile['type'];

    // Vérifier le type de fichier du watermark
    if (!in_array($watermarkType, $allowedTypes)) {
        throw new Exception('Le type de fichier du logo watermark n\'est pas autorisé');
    }

    // Vérifier que c'est bien une image
    if (!getimagesize($watermarkTmpName)) {
        throw new Exception('Le fichier watermark n\'est pas une image valide');
    }

    // Sauvegarder le logo watermark
    $watermarkExt = pathinfo($watermarkFile['name'], PATHINFO_EXTENSION);
    $watermarkName = 'watermark_' . uniqid() . '.' . strtolower($watermarkExt);
    $watermarkPath = $watermarkDir . $watermarkName;

    if (!move_uploaded_file($watermarkTmpName, $watermarkPath)) {
        throw new Exception('Impossible de sauvegarder le logo watermark');
    }

    // Traiter chaque fichier image
    $uploadedFiles = [];
    $errors = [];

    foreach ($_FILES['photos']['tmp_name'] as $key => $tmpName) {
        $fileName = $_FILES['photos']['name'][$key];
        $fileSize = $_FILES['photos']['size'][$key];
        $fileType = $_FILES['photos']['type'][$key];
        $fileError = $_FILES['photos']['error'][$key];

        // Vérifier les erreurs d'upload
        if ($fileError !== UPLOAD_ERR_OK) {
            $errors[] = "Erreur lors de l'upload de $fileName: " . getUploadError($fileError);
            continue;
        }

        // Vérifier la taille du fichier
        if ($fileSize > $maxFileSize) {
            $errors[] = "Le fichier $fileName dépasse la taille maximale de 55 Mo";
            continue;
        }

        // Vérifier le type de fichier
        if (!in_array($fileType, $allowedTypes)) {
            $errors[] = "Le type de fichier $fileName n'est pas autorisé";
            continue;
        }

        // Vérifier que c'est bien une image
        if (!getimagesize($tmpName)) {
            $errors[] = "Le fichier $fileName n'est pas une image valide";
            continue;
        }

        // Générer un nom de fichier unique
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
        $newFileName = uniqid('img_') . '_' . bin2hex(random_bytes(4)) . '.' . strtolower($fileExt);
        $destination = $uploadDir . $newFileName;

        // Déplacer le fichier uploadé
        if (!move_uploaded_file($tmpName, $destination)) {
            $errors[] = "Impossible de déplacer le fichier $fileName";
            continue;
        }

        // Appliquer le watermark
        try {
            applyWatermark(
                $destination, 
                $watermarkPath, 
                $watermarkSize, 
                $watermarkOpacity, 
                $watermarkPosition, 
                $watermarkMargin
            );
            $uploadedFiles[] = $newFileName;
        } catch (Exception $e) {
            unlink($destination); // Supprimer le fichier si le watermark échoue
            $errors[] = "Erreur lors de l'application du watermark sur $fileName: " . $e->getMessage();
        }
    }

    // Supprimer le logo watermark temporaire
    unlink($watermarkPath);

    // Préparer la réponse
    if (!empty($uploadedFiles)) {
        $count = count($uploadedFiles);
        $response['success'] = true;
        $response['message'] = "$count fichier(s) uploadé(s) avec succès et watermark appliqué.";
        $response['files'] = $uploadedFiles;

        if (!empty($errors)) {
            $response['message'] .= ' ' . count($errors) . ' erreur(s) survenue(s).';
            $response['errors'] = $errors;
        }
    } else {
        throw new Exception(implode(' ', $errors));
    }
} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

echo json_encode($response);

// Fonctions utilitaires

function getUploadError($errorCode) {
    $errors = [
        UPLOAD_ERR_INI_SIZE => 'Fichier trop volumineux (dépassement de upload_max_filesize)',
        UPLOAD_ERR_FORM_SIZE => 'Fichier trop volumineux (dépassement de MAX_FILE_SIZE)',
        UPLOAD_ERR_PARTIAL => 'Upload partiel',
        UPLOAD_ERR_NO_FILE => 'Aucun fichier uploadé',
        UPLOAD_ERR_NO_TMP_DIR => 'Dossier temporaire manquant',
        UPLOAD_ERR_CANT_WRITE => 'Impossible d\'écrire sur le disque',
        UPLOAD_ERR_EXTENSION => 'Upload arrêté par une extension PHP'
    ];

    return $errors[$errorCode] ?? 'Erreur inconnue';
}

function applyWatermark($imagePath, $watermarkPath, $sizePercent, $opacity, $position, $margin) {
    // Charger l'image principale
    $imageInfo = getimagesize($imagePath);
    $imageType = $imageInfo['mime'];

    switch ($imageType) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($imagePath);
            break;
        case 'image/png':
            $image = imagecreatefrompng($imagePath);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($imagePath);
            break;
        case 'image/webp':
            $image = imagecreatefromwebp($imagePath);
            break;
        default:
            throw new Exception('Type d\'image principale non supporté');
    }

    if (!$image) {
        throw new Exception('Impossible de charger l\'image principale');
    }

    // Charger le watermark
    $watermarkInfo = getimagesize($watermarkPath);
    $watermarkType = $watermarkInfo['mime'];

    switch ($watermarkType) {
        case 'image/jpeg':
            $watermark = imagecreatefromjpeg($watermarkPath);
            break;
        case 'image/png':
            $watermark = imagecreatefrompng($watermarkPath);
            break;
        case 'image/gif':
            $watermark = imagecreatefromgif($watermarkPath);
            break;
        case 'image/webp':
            $watermark = imagecreatefromwebp($watermarkPath);
            break;
        default:
            throw new Exception('Type d\'image watermark non supporté');
    }

    if (!$watermark) {
        throw new Exception('Impossible de charger le logo watermark');
    }

    // Dimensions
    $imageWidth = imagesx($image);
    $imageHeight = imagesy($image);
    $watermarkWidth = imagesx($watermark);
    $watermarkHeight = imagesy($watermark);

    // Calculer la taille du watermark (en pourcentage de l'image)
    $newWatermarkWidth = $imageWidth * ($sizePercent / 100);
    $newWatermarkHeight = $watermarkHeight * ($newWatermarkWidth / $watermarkWidth);

    // Redimensionner le watermark
    $resizedWatermark = imagecreatetruecolor($newWatermarkWidth, $newWatermarkHeight);
    imagealphablending($resizedWatermark, false);
    imagesavealpha($resizedWatermark, true);
    $transparent = imagecolorallocatealpha($resizedWatermark, 255, 255, 255, 127);
    imagefilledrectangle($resizedWatermark, 0, 0, $newWatermarkWidth, $newWatermarkHeight, $transparent);
    imagecopyresampled(
        $resizedWatermark, $watermark,
        0, 0, 0, 0,
        $newWatermarkWidth, $newWatermarkHeight,
        $watermarkWidth, $watermarkHeight
    );

    // Calculer la position
    switch ($position) {
        case 'top-left':
            $x = $margin;
            $y = $margin;
            break;
        case 'top-right':
            $x = $imageWidth - $newWatermarkWidth - $margin;
            $y = $margin;
            break;
        case 'bottom-left':
            $x = $margin;
            $y = $imageHeight - $newWatermarkHeight - $margin;
            break;
        case 'bottom-right':
            $x = $imageWidth - $newWatermarkWidth - $margin;
            $y = $imageHeight - $newWatermarkHeight - $margin;
            break;
        case 'center':
            $x = ($imageWidth - $newWatermarkWidth) / 2;
            $y = ($imageHeight - $newWatermarkHeight) / 2;
            break;
        default:
            $x = $imageWidth - $newWatermarkWidth - $margin;
            $y = $imageHeight - $newWatermarkHeight - $margin;
    }

    // Appliquer l'opacité
    $opacity = $opacity * 1.27; // Conversion 0-100 vers 0-127

    // Fusionner les images
    imagecopymerge(
        $image, $resizedWatermark,
        $x, $y,
        0, 0,
        $newWatermarkWidth, $newWatermarkHeight,
        $opacity
    );

    // Sauvegarder l'image
    switch ($imageType) {
        case 'image/jpeg':
            imagejpeg($image, $imagePath, 90);
            break;
        case 'image/png':
            imagepng($image, $imagePath, 9);
            break;
        case 'image/gif':
            imagegif($image, $imagePath);
            break;
        case 'image/webp':
            imagewebp($image, $imagePath, 90);
            break;
    }

    // Libérer la mémoire
    imagedestroy($image);
    imagedestroy($watermark);
    imagedestroy($resizedWatermark);
}