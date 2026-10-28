<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Photos avec Watermark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: var(--dark-color);
        }
        
        .upload-container {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 2rem;
        }
        
        .upload-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .upload-header h1 {
            color: var(--primary-color);
            font-weight: 700;
        }
        
        .upload-area {
            border: 2px dashed #ced4da;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 1.5rem;
            background-color: rgba(67, 97, 238, 0.05);
            position: relative;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .upload-area:hover {
            border-color: var(--primary-color);
            background-color: rgba(67, 97, 238, 0.1);
        }
        
        .upload-area i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .preview-item {
            position: relative;
            width: 120px;
            height: 120px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .preview-item .remove-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            width: 24px;
            height: 24px;
            background-color: rgba(220, 53, 69, 0.8);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: none;
            font-size: 12px;
        }
        
        .watermark-controls {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .watermark-preview {
            width: 100%;
            max-height: 200px;
            object-fit: contain;
            background-color: #e9ecef;
            border-radius: 4px;
            margin-top: 1rem;
            display: none;
        }
        
        .btn-upload {
            background-color: var(--primary-color);
            border: none;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            margin-top: 1.5rem;
            width: 100%;
        }
        
        .btn-upload:hover {
            background-color: var(--secondary-color);
        }
        
        .alert {
            border-radius: 8px;
        }
        
        .watermark-logo-preview {
            max-width: 150px;
            max-height: 80px;
            object-fit: contain;
            margin: 10px auto;
            display: block;
        }
        
        .file-info {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        @media (max-width: 576px) {
            .upload-container {
                padding: 1rem;
                margin: 1rem;
            }
            
            .preview-item {
                width: 100px;
                height: 100px;
            }
            
            .watermark-controls .row > div {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="upload-container">
            <div class="upload-header">
                <h1>Upload de Photos</h1>
                <p class="text-muted">Ajoutez un logo en filigrane à vos images</p>
            </div>
            
            <!-- Messages d'alerte -->
            <div id="alert-container"></div>
            
            <form id="upload-form" action="file-upload.php" method="post" enctype="multipart/form-data">
                <!-- Protection CSRF -->
                <input type="hidden" id="csrf_token" name="csrf_token" value="">
                
                <div class="upload-area" id="upload-area">
                    <i class="bi bi-images"></i>
                    <h4>Glissez-déposez vos photos ici</h4>
                    <p class="text-muted">ou cliquez pour sélectionner des fichiers</p>
                    <div class="file-info" id="file-info"></div>
                    <input type="file" id="file-input" name="photos[]" multiple accept="image/*" class="d-none">
                </div>
                
                <div class="preview-container" id="preview-container"></div>
                
                <div class="watermark-controls">
                    <h5>Paramètres du Watermark</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="watermark-logo" class="form-label">Logo Watermark</label>
                            <input type="file" class="form-control" id="watermark-logo" name="watermark_logo" accept="image/*" required>
                            <img id="watermark-logo-preview" class="watermark-logo-preview mt-2" style="display: none;">
                        </div>
                        <div class="col-md-3">
                            <label for="watermark-size" class="form-label">Taille du logo</label>
                            <input type="range" class="form-range" id="watermark-size" name="watermark_size" min="5" max="30" value="15">
                            <div class="text-center"><small><span id="size-value">15</span>% de l'image</small></div>
                        </div>
                        <div class="col-md-3">
                            <label for="watermark-opacity" class="form-label">Opacité</label>
                            <input type="range" class="form-range" id="watermark-opacity" name="watermark_opacity" min="10" max="100" value="50">
                            <div class="text-center"><small><span id="opacity-value">50</span>%</small></div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="watermark-position" class="form-label">Position</label>
                            <select class="form-select" id="watermark-position" name="watermark_position">
                                <option value="bottom-right">Bas à droite</option>
                                <option value="bottom-left">Bas à gauche</option>
                                <option value="top-right">Haut à droite</option>
                                <option value="top-left">Haut à gauche</option>
                                <option value="center">Centre</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="watermark-margin" class="form-label">Marge</label>
                            <input type="range" class="form-range" id="watermark-margin" name="watermark_margin" min="0" max="50" value="10">
                            <div class="text-center"><small><span id="margin-value">10</span>px du bord</small></div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-3">
                        <button type="button" id="preview-watermark-btn" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye-fill"></i> Prévisualiser
                        </button>
                    </div>
                    
                    <img id="watermark-preview" class="watermark-preview" alt="Aperçu du watermark">
                </div>
                
                <button type="submit" class="btn btn-primary btn-upload" id="submit-btn" disabled>
                    <span class="spinner-border spinner-border-sm d-none" id="spinner" role="status" aria-hidden="true"></span>
                    <span id="submit-text">Uploader les photos</span>
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Générer un token CSRF
            const csrfToken = generateCsrfToken();
            document.getElementById('csrf_token').value = csrfToken;
            
            // Éléments DOM
            const fileInput = document.getElementById('file-input');
            const uploadArea = document.getElementById('upload-area');
            const previewContainer = document.getElementById('preview-container');
            const submitBtn = document.getElementById('submit-btn');
            const form = document.getElementById('upload-form');
            const alertContainer = document.getElementById('alert-container');
            const fileInfo = document.getElementById('file-info');
            const watermarkLogoInput = document.getElementById('watermark-logo');
            const watermarkLogoPreview = document.getElementById('watermark-logo-preview');
            
            // Sliders
            const sizeSlider = document.getElementById('watermark-size');
            const opacitySlider = document.getElementById('watermark-opacity');
            const marginSlider = document.getElementById('watermark-margin');
            
            // Valeurs des sliders
            document.getElementById('size-value').textContent = sizeSlider.value;
            document.getElementById('opacity-value').textContent = opacitySlider.value;
            document.getElementById('margin-value').textContent = marginSlider.value;
            
            // Écouteurs d'événements pour les sliders
            sizeSlider.addEventListener('input', function() {
                document.getElementById('size-value').textContent = this.value;
            });
            
            opacitySlider.addEventListener('input', function() {
                document.getElementById('opacity-value').textContent = this.value;
            });
            
            marginSlider.addEventListener('input', function() {
                document.getElementById('margin-value').textContent = this.value;
            });
            
            // Gestion du logo watermark
            watermarkLogoInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        watermarkLogoPreview.src = e.target.result;
                        watermarkLogoPreview.style.display = 'block';
                    };
                    
                    reader.readAsDataURL(this.files[0]);
                }
            });
            
            // Gestion du drag and drop
            uploadArea.addEventListener('click', () => fileInput.click());
            
            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.classList.add('border-primary', 'bg-light');
            });
            
            uploadArea.addEventListener('dragleave', () => {
                uploadArea.classList.remove('border-primary', 'bg-light');
            });
            
            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.classList.remove('border-primary', 'bg-light');
                
                if (e.dataTransfer.files.length) {
                    fileInput.files = e.dataTransfer.files;
                    handleFiles(fileInput.files);
                }
            });
            
            fileInput.addEventListener('change', () => {
                if (fileInput.files.length) {
                    handleFiles(fileInput.files);
                }
            });
            
            // Prévisualisation du watermark
            document.getElementById('preview-watermark-btn').addEventListener('click', previewWatermark);
            
            // Soumission du formulaire
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Vérifier qu'il y a des fichiers
                if (fileInput.files.length === 0) {
                    showAlert('Veuillez sélectionner au moins une photo', 'danger');
                    return;
                }
                
                // Vérifier qu'un logo watermark est sélectionné
                if (!watermarkLogoInput.files || watermarkLogoInput.files.length === 0) {
                    showAlert('Veuillez sélectionner un logo pour le watermark', 'danger');
                    return;
                }
                
                // Désactiver le bouton et afficher le spinner
                const submitText = document.getElementById('submit-text');
                const spinner = document.getElementById('spinner');
                
                submitBtn.disabled = true;
                submitText.textContent = 'Traitement en cours...';
                spinner.classList.remove('d-none');
                
                // Envoyer le formulaire via AJAX
                const formData = new FormData(form);
                
                fetch('file-upload.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showAlert(data.message, 'success');
                        // Réinitialiser le formulaire
                        form.reset();
                        previewContainer.innerHTML = '';
                        submitBtn.disabled = true;
                        document.getElementById('watermark-preview').style.display = 'none';
                        watermarkLogoPreview.style.display = 'none';
                        fileInfo.textContent = '';
                        // Réinitialiser le token CSRF
                        const newCsrfToken = generateCsrfToken();
                        document.getElementById('csrf_token').value = newCsrfToken;
                    } else {
                        showAlert(data.message, 'danger');
                    }
                })
                .catch(error => {
                    showAlert('Une erreur est survenue lors de l\'upload', 'danger');
                    console.error('Error:', error);
                })
                .finally(() => {
                    submitText.textContent = 'Uploader les photos';
                    spinner.classList.add('d-none');
                    submitBtn.disabled = false;
                });
            });
            
            // Fonction pour gérer les fichiers sélectionnés
            function handleFiles(files) {
                // Vérifier le nombre de fichiers
                if (files.length > 55) {
                    showAlert('Vous ne pouvez uploader que 10 fichiers maximum', 'warning');
                    return;
                }
                
                // Vérifier la taille des fichiers
                let totalSize = 0;
                const maxSize = 55 * 1024 * 1024; // 55 Mo
                
                for (let i = 0; i < files.length; i++) {
                    totalSize += files[i].size;
                    
                    if (files[i].size > maxSize) {
                        showAlert(`Le fichier ${files[i].name} dépasse la taille maximale de 55 Mo`, 'danger');
                        return;
                    }
                }
                
                // Mettre à jour les infos des fichiers
                fileInfo.textContent = `${files.length} fichier(s) sélectionné(s) - ${formatFileSize(totalSize)}`;
                
                // Afficher les aperçus
                previewContainer.innerHTML = '';
                
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    
                    if (!file.type.startsWith('image/')) {
                        continue;
                    }
                    
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const previewItem = document.createElement('div');
                        previewItem.className = 'preview-item';
                        
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = 'Aperçu de ' + file.name;
                        
                        const removeBtn = document.createElement('button');
                        removeBtn.className = 'remove-btn';
                        removeBtn.innerHTML = '&times;';
                        removeBtn.addEventListener('click', (e) => {
                            e.stopPropagation();
                            previewItem.remove();
                            updateFileInput();
                        });
                        
                        previewItem.appendChild(img);
                        previewItem.appendChild(removeBtn);
                        previewContainer.appendChild(previewItem);
                    };
                    
                    reader.readAsDataURL(file);
                }
                
                submitBtn.disabled = false;
            }
            
            // Mettre à jour l'input file après suppression d'un aperçu
            function updateFileInput() {
                const dataTransfer = new DataTransfer();
                const previewItems = previewContainer.querySelectorAll('.preview-item');
                
                if (previewItems.length === 0) {
                    fileInput.value = '';
                    submitBtn.disabled = true;
                    fileInfo.textContent = '';
                    return;
                }
                
                Array.from(fileInput.files).forEach(file => {
                    let fileExists = false;
                    
                    previewItems.forEach(item => {
                        const img = item.querySelector('img');
                        if (img && img.alt.includes(file.name)) {
                            fileExists = true;
                        }
                    });
                    
                    if (fileExists) {
                        dataTransfer.items.add(file);
                    }
                });
                
                fileInput.files = dataTransfer.files;
                submitBtn.disabled = dataTransfer.files.length === 0;
                fileInfo.textContent = `${dataTransfer.files.length} fichier(s) sélectionné(s) - ${formatFileSize(calculateTotalSize(dataTransfer.files))}`;
            }
            
            // Calculer la taille totale des fichiers
            function calculateTotalSize(files) {
                let totalSize = 0;
                for (let i = 0; i < files.length; i++) {
                    totalSize += files[i].size;
                }
                return totalSize;
            }
            
            // Formater la taille des fichiers
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';
                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));
                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }
            
            // Prévisualisation du watermark
            function previewWatermark() {
                const previewItems = previewContainer.querySelectorAll('.preview-item');
                
                if (previewItems.length === 0) {
                    showAlert('Veuillez d\'abord sélectionner une photo', 'warning');
                    return;
                }
                
                if (!watermarkLogoInput.files || watermarkLogoInput.files.length === 0) {
                    showAlert('Veuillez sélectionner un logo pour le watermark', 'warning');
                    return;
                }
                
                const watermarkPreview = document.getElementById('watermark-preview');
                const firstPreview = previewItems[0].querySelector('img');
                
                watermarkPreview.src = firstPreview.src;
                watermarkPreview.style.display = 'block';
                
                // Simuler l'effet du watermark avec CSS
                watermarkPreview.style.position = 'relative';
                
                const size = sizeSlider.value;
                const opacity = opacitySlider.value / 100;
                const margin = marginSlider.value;
                const position = document.getElementById('watermark-position').value;
                
                // Créer un overlay pour simuler le watermark
                const existingOverlay = watermarkPreview.querySelector('.watermark-overlay');
                if (existingOverlay) existingOverlay.remove();
                
                const overlay = document.createElement('div');
                overlay.className = 'watermark-overlay';
                overlay.style.position = 'absolute';
                overlay.style.width = size + '%';
                overlay.style.opacity = opacity;
                overlay.style.pointerEvents = 'none';
                
                // Positionner le watermark
                switch(position) {
                    case 'bottom-right':
                        overlay.style.right = margin + 'px';
                        overlay.style.bottom = margin + 'px';
                        break;
                    case 'bottom-left':
                        overlay.style.left = margin + 'px';
                        overlay.style.bottom = margin + 'px';
                        break;
                    case 'top-right':
                        overlay.style.right = margin + 'px';
                        overlay.style.top = margin + 'px';
                        break;
                    case 'top-left':
                        overlay.style.left = margin + 'px';
                        overlay.style.top = margin + 'px';
                        break;
                    case 'center':
                        overlay.style.left = '50%';
                        overlay.style.top = '50%';
                        overlay.style.transform = 'translate(-50%, -50%)';
                        break;
                }
                
                const logoImg = document.createElement('img');
                logoImg.src = watermarkLogoPreview.src;
                logoImg.style.width = '100%';
                logoImg.style.height = 'auto';
                
                overlay.appendChild(logoImg);
                watermarkPreview.appendChild(overlay);
            }
            
            // Afficher une alerte
            function showAlert(message, type) {
                const alert = document.createElement('div');
                alert.className = `alert alert-${type} alert-dismissible fade show`;
                alert.role = 'alert';
                
                alert.innerHTML = `
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                
                alertContainer.prepend(alert);
                
                // Supprimer l'alerte après 5 secondes
                setTimeout(() => {
                    alert.classList.remove('show');
                    setTimeout(() => alert.remove(), 150);
                }, 5000);
            }
            
            // Générer un token CSRF
            function generateCsrfToken() {
                return 'csrf-' + Math.random().toString(36).substr(2, 16) + '-' + Date.now();
            }
        });
    </script>
</body>
</html>