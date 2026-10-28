<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moon Création - Nouveau Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --noir-sensuel: #0A0A0A;
            --rose-doré: #D8A48F;
            --bordeaux-passion: #8C2F4A;
            --ivoire: #FFF8F0;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--ivoire);
            color: var(--noir-sensuel);
        }
        
        .form-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
            color: var(--bordeaux-passion);
            border-bottom: 1px solid var(--rose-doré);
            padding-bottom: 1rem;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--noir-sensuel);
            margin-bottom: 0.5rem;
        }
        
        .form-control, .form-select {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0.75rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--rose-doré);
            box-shadow: 0 0 0 0.25rem rgba(216, 164, 143, 0.25);
        }
        
        .slug-container {
            position: relative;
        }
        
        .slug-preview {
            position: absolute;
            right: 10px;
            top: 38px;
            color: #666;
            font-size: 0.8rem;
        }
        
        .btn-moon {
            background-color: var(--bordeaux-passion);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-moon:hover {
            background-color: var(--noir-sensuel);
            transform: translateY(-2px);
        }
        
        .image-upload-area {
            border: 2px dashed #ddd;
            border-radius: 5px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 1.5rem;
        }
        
        .image-upload-area:hover {
            border-color: var(--rose-doré);
            background-color: rgba(216, 164, 143, 0.05);
        }
        
        @media (max-width: 768px) {
            .form-container {
                padding: 1.5rem;
                margin: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2><i class="fas fa-gem me-2"></i> Nouveau Produit Moon Création</h2>
                <p class="mb-0">Ajoutez une pièce exclusive à votre collection</p>
            </div>
            
            <form id="productForm wysiwygForm"  name="productForm"  method="post" action="/admin/produits/enregistrer"  enctype="multipart/form-data">
            <input type="hidden" name="long_description" id="hiddenlong_description">
                <!-- Section Informations de Base -->
                <div class="mb-4">
                    <h5 class="text-muted mb-3"><i class="fas fa-info-circle me-2"></i>Informations de base</h5>
                    
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" id="productName" name="product_name" required>
                    </div>
                    
                    <div class="mb-3 slug-container">
                        <label for="productSlug" class="form-label">Slug (URL)</label>
                        <input type="text" class="form-control" id="productSlug" name="product_slug" readonly>
                        <div class="slug-preview">Exemple : mon-produit</div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="productPrice" class="form-label">Prix de base (FCFA)</label>
                            <input type="number" step="0.01" class="form-control" id="productPrice" name="base_price" required>
                        </div>
                        <div class="col-md-6">
                            <label for="productDiscount" class="form-label">Prix promotionnel (optionnel)</label>
                            <input type="number" step="0.01" class="form-control" id="productDiscount" name="discount_price">
                        </div>
                    </div>
                </div>
                
                <!-- Section Description -->
                <div class="mb-4">
                    <h5 class="text-muted mb-3"><i class="fas fa-align-left me-2"></i>Description</h5>
                    
                    <div class="mb-3">
                        <label for="shortDescription" class="form-label">Description courte</label>
                        <input type="text" class="form-control" id="shortDescription" name="short_description" maxlength="255" required>
                        <small class="text-muted">Maximum 255 caractères - Sera affichée dans les listes</small>
                    </div>
                    

                    <div class="editor-toolbar" style="background-color:#f8f9fa; color:#000; border-radius: 4px; margin-bottom: 10px; padding: 5px;">
                        <!-- Boutons WYSIWYG -->
                        <button type="button" class="btn" onclick="execCmd('bold', this)" title="Gras"><i class="fas fa-bold"></i></button>
                        <button type="button" class="btn" onclick="execCmd('italic', this)" title="Italique"><i class="fas fa-italic"></i></button>
                        <button type="button" class="btn" onclick="execCmd('justifyLeft', this)" title="Aligner à gauche"><i class="fas fa-align-left"></i></button>
                        <button type="button" class="btn" onclick="execCmd('justifyCenter', this)" title="Centrer"><i class="fas fa-align-center"></i></button>
                        <button type="button" class="btn" onclick="execCmd('justifyRight', this)" title="Aligner à droite"><i class="fas fa-align-right"></i></button>
                        <button type="button" class="btn" onclick="execCmd('justifyFull', this)" title="Justifier"><i class="fas fa-align-justify"></i></button>
                    </div>

                    <div class="editor-container mb-3" contenteditable="true" id="long_description" style="border:1px solid #ddd; min-height:180px; padding:5px">
                        Rédigez votre description ici...
                    </div> 

                </div>
                
                <!-- Section Images -->
                <div class="mb-4">
                    <h5 class="text-muted mb-3"><i class="fas fa-images me-2"></i>Images du produit</h5>
                    
                    <div class="image-upload-area" id="imageUploadArea">
                        <i class="fas fa-cloud-upload-alt fa-3x mb-3" style="color: var(--rose-doré);"></i>
                        <p>Glissez-déposez vos images ici ou cliquez pour sélectionner</p>
                        <small class="text-muted">Formats acceptés : JPG, PNG (Max. 5MB)</small>
                        <input type="file" id="productImages" name="product_images[]" multiple accept="image/*" style="display: none;">
                    </div>
                    
                    <div class="row" id="imagePreviewContainer">
                        <!-- Les aperçus d'images seront ajoutés ici via JS -->
                    </div>
                </div>
                
                <!-- Section Options -->
                <div class="mb-4">
                    <h5 class="text-muted mb-3"><i class="fas fa-cogs me-2"></i>Options</h5>
                    
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="productStock" class="form-label">Stock initial</label>
                            <input type="number" class="form-control" id="productStock" name="stock" value="0" min="0">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="productCategory" class="form-label">Catégories</label>
                            <select class="form-select" id="productCategory" name="category">
                                <option value="">Sélectionnez...</option>
                                <option value="Perle de hanche">Perle de hanche</option>
                                <option value="Chevillère">Chevillère</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="productCategory" class="form-label">Etiquettes</label>
                            <select class="form-select" id="productCategory" name="category">
                                <option value="">Sélectionnez...</option>
                                <option value="Perle de hanche">Perle de hanche</option>
                                <option value="Chevillère">Chevillère</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="productCollection" class="form-label">Collection</label>
                            <select class="form-select" id="productCollection" name="collection">
                                <option value="">Sélectionnez...</option>
                                <option value="Baiser de Nacre">Baiser de Nacre</option>
                                <option value="Étreinte Lunaire">Étreinte Lunaire</option>
                                <option value="Silk & Désir">Silk & Désir</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="isFeatured" name="is_featured" value="1">
                        <label class="form-check-label" for="isFeatured">Produit en vedette</label>
                    </div>
                    
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="isNew" name="is_new" value="1" checked>
                        <label class="form-check-label" for="isNew">Nouveauté</label>
                    </div>
                    
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="isLimitedEdition" name="is_limited_edition" value="1">
                        <label class="form-check-label" for="isLimitedEdition">Édition limitée</label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-moon mt-3">
                    <i class="fas fa-save me-2"></i> Enregistrer le produit
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fonction pour générer le slug
        function generateSlug(text) {
            return text
                .toLowerCase()
                .replace(/[éèêë]/g, 'e')
                .replace(/[àâä]/g, 'a')
                .replace(/[îï]/g, 'i')
                .replace(/[ôö]/g, 'o')
                .replace(/[ùûü]/g, 'u')
                .replace(/ç/g, 'c')
                .replace(/[^a-z0-9]/g, ' ')
                .trim()
                .replace(/\s+/g, '-')
                .replace(/_+/g, '-');
        }

        // Générer le slug quand le champ nom perd le focus
        document.getElementById('productName').addEventListener('blur', function() {
            const name = this.value;
            if (name) {
                document.getElementById('productSlug').value = generateSlug(name);
            }
        });

        // Gestion de l'upload d'images
        const imageUploadArea = document.getElementById('imageUploadArea');
        const fileInput = document.getElementById('productImages');
        const previewContainer = document.getElementById('imagePreviewContainer');

        imageUploadArea.addEventListener('click', () => fileInput.click());

        fileInput.addEventListener('change', function() {
            previewContainer.innerHTML = '';
            
            if (this.files) {
                Array.from(this.files).forEach(file => {
                    if (!file.type.match('image.*')) return;
                    
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const col = document.createElement('div');
                        col.className = 'col-6 col-md-4 col-lg-3 mb-3';
                        
                        const imgContainer = document.createElement('div');
                        imgContainer.className = 'position-relative';
                        
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'img-fluid rounded';
                        img.style.height = '100px';
                        img.style.width = '100%';
                        img.style.objectFit = 'cover';
                        
                        const deleteBtn = document.createElement('button');
                        deleteBtn.innerHTML = '<i class="fas fa-times"></i>';
                        deleteBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
                        deleteBtn.style.transform = 'translate(30%, -30%)';
                        deleteBtn.onclick = function() {
                            col.remove();
                        };
                        
                        imgContainer.appendChild(img);
                        imgContainer.appendChild(deleteBtn);
                        col.appendChild(imgContainer);
                        previewContainer.appendChild(col);
                    }
                    
                    reader.readAsDataURL(file);
                });
            }
        });

        // Drag and drop
        imageUploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            imageUploadArea.style.borderColor = 'var(--rose-doré)';
            imageUploadArea.style.backgroundColor = 'rgba(216, 164, 143, 0.1)';
        });

        imageUploadArea.addEventListener('dragleave', () => {
            imageUploadArea.style.borderColor = '#ddd';
            imageUploadArea.style.backgroundColor = '';
        });

        imageUploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            imageUploadArea.style.borderColor = '#ddd';
            imageUploadArea.style.backgroundColor = '';
            fileInput.files = e.dataTransfer.files;
            const event = new Event('change');
            fileInput.dispatchEvent(event);
        });


        document.getElementById('wysiwygForm').addEventListener('submit', function(event) {
            // 1. Récupération des contenus
            const editors = {
                'long_description': document.getElementById('long_description')?.innerHTML || ''
            };
        
            // 2. Validation minimale
            let hasContent = false;
            for (const [key, value] of Object.entries(editors)) {
                if (value.trim() !== '' && value.trim() !== 'Rédigez votre compétence ici...') {
                    hasContent = true;
                    document.getElementById(`hidden${key.charAt(0).toUpperCase() + key.slice(1)}`).value = value;
                }
            }
        
            // 3. Si aucun contenu valide, empêcher l'envoi
            if (!hasContent) {
                event.preventDefault();
                alert('Veuillez saisir au moins une compétence');
                return;
            }
        });

        document.querySelectorAll('.editor-container').forEach(editor=>{
            editor.addEventListener('paste', function (e){
                e.preventDefault(); //pour empecher l collage par défaut
                //Récuperer le contenu du press-papier
                let text=e.clipboardData.getData('text/plain');
                //Insérer le texte nettoyer dans l'éditeur
                document.execCommand('insertText', false, text);
            })
        })

    </script>
</body>
</html>