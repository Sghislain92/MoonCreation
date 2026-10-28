<?php
        session_start();
        $URL="http://127.0.0.1:8080/moon-crea/";
        //include('connexion.inc.php');


        function now() {
            return date('Y-m-d H:i:s'); // Format MySQL
        }

        // 2. Nettoyage et validation des données
        function cleanInput($field) {
            return ucfirst(htmlspecialchars(preg_replace('/[^\P{C}\t\n]/u', '', 
                html_entity_decode(filter_input(INPUT_POST, $field, FILTER_SANITIZE_FULL_SPECIAL_CHARS), ENT_QUOTES, 'UTF-8')), 
                ENT_QUOTES, 'UTF-8'));
        }

        //Var_dump($_SESSION);

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-send-msg'])) {
        // Vérification du token CSRF
            if (!isset($_POST['csrf']) || $_POST['csrf'] !== $_SESSION['csrf_token']) {
                die('Erreur de sécurité');
            }



            // Récupération des données
            $name = htmlspecialchars($_POST['name']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $tel = htmlspecialchars($_POST['tel']);
            $pays = htmlspecialchars($_POST['pays']);
            $sujet = htmlspecialchars($_POST['subject']);
            $message = nl2br(htmlspecialchars($_POST['message']));

            // Configuration
            $to = 'contact@moon-creations.com';
            $subject = 'Nouveau message de ' . $name;
            $from = $email;

            $site_url = "https://www.moon-creations.com";
            $phone_number = "+229 01 69 38 45 33";
            $name_site="Moon Creation";
            $ouremail="contact@moon-creations.com";

            // 1. Lien TEL (conserve l'affichage original)
            $tel_link = '<a href="tel:' . preg_replace('/[^\d+]/', '', $phone_number) . '" 
                        style="color: var(--bordeaux-passion); text-decoration: none;">
                        ' . htmlspecialchars($phone_number) . '</a>';

            // 2. Lien WhatsApp (supprime le +/00 et tous les espaces)
            $whatsapp_number = preg_replace('/^(\+|00)/', '', $phone_number); // Supprime + ou 00 au début
            $whatsapp_number = preg_replace('/\D/', '', $whatsapp_number); // Garde uniquement les chiffres
            $whatsapp_link = '
            <div style="margin: 15px 0; padding: 12px; background-color: rgba(140,47,74,0.1); border-left: 3px solid var(--bordeaux-passion);">
                <p style="margin: 0 0 8px 0; font-size: 14px; color: var(--noir-sensuel);">
                    <i class="fab fa-whatsapp" style="color: #fff; margin-right: 6px; background-color:#25D366; padding:3px; border-radius:50%"></i>
                    Accédez à notre service client via 
                    <a href="https://wa.me/'.$whatsapp_number.'" 
                       target="_blank" 
                       style="color: var(--bordeaux-passion); text-decoration: none; font-weight: 800; border-bottom: 1px dashed var(--or-veritable);">
                       WhatsApp
                    </a>
                </p>
                
                <p style="margin: 8px 0 0 0; font-size: 14px; color: var(--noir-sensuel);">
                    <i class="fas fa-book" style="color: var(--or-veritable); margin-right: 6px;"></i>
                    Découvrez notre catalogue sur 
                    <a href="https://wa.me/c/2290169384533" 
                       target="_blank" 
                       style="color: var(--bordeaux-passion); text-decoration: none; font-weight: 600;">
                       ce lien exclusif
                    </a>
                </p>
            </div>';

            // Construction du message HTML
            $email_content = '<!DOCTYPE html>
            <html lang="fr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Moon Creation - Nouveau message</title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                <style>
                    :root {
                        --noir-sensuel: #0A0A0A;
                        --rose-poudré: #F3D7CA;
                        --or-veritable: #D4AF37;
                        --bordeaux-passion: #8C2F4A;
                        --ivoire: #FFF8F0;
                        --snow: #fff;
                    }

                    @font-face {
                        font-family: "AvantGarde";
                        src: url("'.$URL.'fonts/ITCAvantGardeGothicCE-Book.woff2") format("woff2");
                        
                        font-weight: 400;
                        font-style: normal;
                        font-display: swap;
                    }

                    @font-face {
                        font-family: "Virtual";
                        src: url("'.$URL.'fonts/VirtualRegular.woff2") format("woff2"),
                            url("'.$URL.'fonts/VirtualRegular.woff") format("woff");
                        font-weight: 400;
                        font-style: normal;
                        font-display: swap;
                    }


                    body {
                        font-family: "AvantGarde", -apple-system, BlinkMacSystemFont, 
                                    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                        font-weight: 400;
                        line-height: 1.6;

                        line-height: 1.6;
                        color: var(--noir-sensuel);
                        background-color: var(--rose-poudré);
                        margin: 0;
                        padding: 0;
                    }
                    

                    h1, h2, h3, h4, h5, h6 {
                        font-family: "AvantGarde", -apple-system, BlinkMacSystemFont, 
                                    "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                                    font-weight: normal; 
                    }

                    .vantablack {
                        font-family: "Virtual", "Courier New", monospace;
                        letter-spacing: 0.05em; /* Ajustement optionnel */
                        line-height: 1.4; /* Meilleure lisibilité */
                    }
                    
                    .email-container {
                        max-width: 800px;
                        margin: 0 auto;
                        background-color: var(--snow);
                        border-radius: 12px;
                        overflow: hidden;
                        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    }
                    
                    .email-header {
                        background-color: var(--noir-sensuel);
                        padding: 30px 20px;
                        text-align: center;
                    }
                    
                    .logo {
                        max-width: 180px;
                        height: auto;
                    }
                    
                    .email-body {
                        padding: 30px;
                    }
                    
                    h1 {
                        color: var(--bordeaux-passion);
                        font-size: 24px;
                        margin-top: 0;
                        text-align: center;
                        font-weight: 600;
                    }

                    h2 {
                        color: var(--noir-sensuel);
                        font-size: 55px;
                        margin-top: 0;
                        text-align: center;
                        font-weight: 600;
                    }
                        
                    
                    .message-box {
                        background-color: var(--ivoire);
                        border-left: 4px solid var(--or-veritable);
                        padding: 20px;
                        margin: 25px 0;
                    }
                    
                    .info-grid {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        gap: 15px;
                        margin-bottom: 20px;
                    }
                    
                    .info-item {
                        border-left: 4px solid var(--bordeaux-passion);
                        background-color: var(--ivoire);
                        padding: 12px 15px;
                    }
                    
                    .info-label {
                        font-size: 12px;
                        color: var(--bordeaux-passion);
                        font-weight: 600;
                        margin-bottom: 5px;
                        text-transform: uppercase;
                        letter-spacing: 0.5px;
                    }
                    
                    .info-value {
                        font-size: 14px;
                        color: var(--noir-sensuel);
                        font-weight: 500;
                    }
                    
                    .email-footer {
                        background-color: var(--noir-sensuel);
                        color: var(--rose-poudré);
                        padding: 25px 20px;
                        text-align: center;
                        font-size: 12px;
                    }
                    
                    .social-links {
                        display: flex;
                        justify-content: center;
                        gap: 15px;
                        margin: 25px 0;
                    }

                    .social-links a {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        background-color: var(--rose-poudré);
                        color: white !important;
                        font-size: 1.2rem;
                        transition: all 0.3s ease;
                        text-decoration: none;
                    }

                    /* Couleurs spécifiques pour chaque réseau social */
                    .social-links a.tiktok { background-color: #000000; }
                    .social-links a.instagram { background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); }
                    .social-links a.facebook { background-color: #1877F2; }
                    .social-links a.snapchat { background-color: #FFFC00; color: black !important; }
                    .social-links a.user { background-color: var(--bordeaux-passion); }

                    .social-links a:hover {
                        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    }
                    
                    @media only screen and (max-width: 600px) {
                        .info-grid {
                            grid-template-columns: 1fr;
                        }
                        
                        .email-body {
                            padding: 20px;
                        }
                    }
                </style>
            </head>
            <body>
                <div class="email-container">
                    <div class="email-header">
                        <img src="'.$URL.'images/logo-moon-creation.png" alt="Moon Creation" class="logo">
                    </div>
                    
                    <div class="email-body">
                        <h3 style="text-align:center" style="line-height:10px">Vous avez un nouveau message</h3>
                        
                        <div class="info-grid">
                            <div class="info-item">
                                <div class="info-label">Nom complet</div>
                                <div class="info-value">'.$name.'</div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-label">Email</div>
                                <div class="info-value">'.$email.'</div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-label">Téléphone</div>
                                <div class="info-value">'.$tel.'</div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-label">Pays</div>
                                <div class="info-value">'.$pays.'</div>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Sujet</div>
                            <div class="info-value">'.$subject.'</div>
                        </div>
                        
                        <div class="message-box">
                            <div class="info-label">Message</div>
                            <div class="info-value">'.$message.'</div>
                        </div>
                    </div>
                    
                    <div class="email-footer">
                        <div class="social-links mt-3">
                            <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="snapchat"><i class="fab fa-snapchat-ghost"></i></a>
                            <a href="#" class="user"><i class="fas fa-user"></i></a>
                        </div>
                        
                        <p>© '.date('Y').' Moon Creation. Tous droits réservés.</p>
                        <p>Merci de faire confiance à notre marque.</p>
                    </div>
                </div>
            </body>
            </html>';
            
            // Headers pour l'email HTML
            $headers = "From: $name <$email>\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


            if(mail($to, $subject, $email_content, $headers)) {
                echo json_encode(['status' => 'success', 'message' => 'Votre message a été envoyé avec succès.']);

                // Configuration
                $to_client = $email;
                $subject_client ='Votre message a bien été reçu par Moon-Création ✨';
                $from_client = $ouremail;


                // Construction du message HTML
                $confirmation_content = '<!DOCTYPE html>
                <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Moon Creation - Nouveau message</title>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
                    <style>
                        :root {
                            --noir-sensuel: #0A0A0A;
                            --rose-poudré: #F3D7CA;
                            --or-veritable: #D4AF37;
                            --bordeaux-passion: #8C2F4A;
                            --ivoire: #FFF8F0;
                            --snow: #fff;
                        }

                        @font-face {
                            font-family: "AvantGarde";
                            src: url("'.$URL.'fonts/ITCAvantGardeGothicCE-Book.woff2") format("woff2");
                            
                            font-weight: 400;
                            font-style: normal;
                            font-display: swap;
                        }

                        @font-face {
                            font-family: "Virtual";
                            src: url("'.$URL.'fonts/VirtualRegular.woff2") format("woff2"),
                                url("'.$URL.'fonts/VirtualRegular.woff") format("woff");
                            font-weight: 400;
                            font-style: normal;
                            font-display: swap;
                        }


                        body {
                            font-family: "AvantGarde", -apple-system, BlinkMacSystemFont, 
                                        "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                            font-weight: 400;
                            line-height: 1.6;

                            line-height: 1.6;
                            color: var(--noir-sensuel);
                            background-color: var(--rose-poudré);
                            margin: 0;
                            padding: 0;
                        }
                        

                        h1, h2, h3, h4, h5, h6 {
                            font-family: "AvantGarde", -apple-system, BlinkMacSystemFont, 
                                        "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                                        font-weight: normal; 
                        }

                        .vantablack {
                            font-family: "Virtual", "Courier New", monospace;
                            letter-spacing: 0.05em; /* Ajustement optionnel */
                            line-height: 1.4; /* Meilleure lisibilité */
                        }
                        
                        .email-container {
                            max-width: 800px;
                            margin: 0 auto;
                            background-color: var(--snow);
                            border-radius: 12px;
                            overflow: hidden;
                            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                        }
                        
                        .email-header {
                            background-color: var(--noir-sensuel);
                            padding: 30px 20px;
                            text-align: center;
                        }
                        
                        .logo {
                            max-width: 180px;
                            height: auto;
                        }
                        
                        .email-body {
                            padding: 30px;
                        }
                        
                        h1 {
                            color: var(--bordeaux-passion);
                            font-size: 24px;
                            margin-top: 0;
                            text-align: center;
                            font-weight: 600;
                        }

                        h2 {
                            color: var(--noir-sensuel);
                            font-size: 55px;
                            margin-top: 0;
                            text-align: center;
                            font-weight: 600;
                        }
                            
                        
                        .message-box {
                            background-color: var(--ivoire);
                            border-left: 4px solid var(--or-veritable);
                            padding: 20px;
                            margin: 25px 0;
                        }
                        
                        .info-grid {
                            display: grid;
                            grid-template-columns: 1fr 1fr;
                            gap: 15px;
                            margin-bottom: 20px;
                        }
                        
                        .info-item {
                            border-left: 4px solid var(--bordeaux-passion);
                            background-color: var(--ivoire);
                            padding: 12px 15px;
                        }
                        
                        .info-label {
                            font-size: 12px;
                            color: var(--bordeaux-passion);
                            font-weight: 600;
                            margin-bottom: 5px;
                            text-transform: uppercase;
                            letter-spacing: 0.5px;
                        }
                        
                        .info-value {
                            font-size: 14px;
                            color: var(--noir-sensuel);
                            font-weight: 500;
                        }
                        
                        .email-footer {
                            background-color: var(--noir-sensuel);
                            color: var(--rose-poudré);
                            padding: 25px 20px;
                            text-align: center;
                            font-size: 12px;
                        }
                        
                        .social-links {
                            display: flex;
                            justify-content: center;
                            gap: 15px;
                            margin: 25px 0;
                        }

                        .social-links a {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            background-color: var(--rose-poudré);
                            color: white !important;
                            font-size: 1.2rem;
                            transition: all 0.3s ease;
                            text-decoration: none;
                        }

                        /* Couleurs spécifiques pour chaque réseau social */
                        .social-links a.tiktok { background-color: #000000; }
                        .social-links a.instagram { background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); }
                        .social-links a.facebook { background-color: #1877F2; }
                        .social-links a.snapchat { background-color: #FFFC00; color: black !important; }
                        .social-links a.user { background-color: var(--bordeaux-passion); }

                        .social-links a:hover {
                            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                        }
                        
                        @media only screen and (max-width: 600px) {
                            .info-grid {
                                grid-template-columns: 1fr;
                            }
                            
                            .email-body {
                                padding: 20px;
                            }
                        }
                    </style>
                </head>
                <body>
                    <div class="email-container">
                        <div class="email-header">
                            <img src="'.$URL.'images/logo-moon-creation.png" alt="Moon Creation" class="logo">
                        </div>
                        
                        <div class="email-body">
                            <h3 style="text-align:center" style="line-height:10px;">Bonjour <span style=" font-weight:800">'.$name.'</span>,</h3>
                                                    
                            <div class="message-box">
                                <div class="info-value">
                                    
                                    <p style="text-align:justify">Merci pour votre message adressé à Moon Creation. Nous avons bien reçu votre demande concernant "'.$sujet.'" et nous vous en remercions.</p>
                                    
                                    <p style="text-align:justify">Notre équipe examine attentivement chaque requête et reviendra vers vous sous 48 heures ouvrées. En attendant, n\'hésitez pas à explorer notre univers :
                                    <a href="'.$site_url.'" style="color: var(--bordeaux-passion); text-decoration: none; font-weight: 800; border-bottom: 1px dashed var(--or-veritable);" target="_blank">'.$site_url.'</a></p>
                                    
                                    <p style="text-align:justify; margin: 10px 0;">
                                    Pour toute urgence, contactez-nous par téléphone au <span style="color: var(--bordeaux-passion); text-decoration: none; font-weight: 800; border-bottom: 1px dashed var(--or-veritable);">' . $tel_link . '</span> 
                                    ou ' . $whatsapp_link . '.
                                    </p>
                                    
                                    <p>À très vite,<br>
                                    L\'équipe Moon Creation<br>
                                    <span style="color: var(--bordeaux-passion); text-decoration: none; font-weight: 800; ">L\'élégance à portée de hanche</span></p>
                                    
                                    <h2 class="vantablack" style="font-weight: 600; font-size:2.6em; text-align:left">VantaBlack</h2>
                                    
                                </div>
                            </div>
                            <h5 style="font-size: 12px; color: var(--bordeaux-passion); text-align:center">*Ce message a été généré automatiquement. Merci de ne pas y répondre directement.</h5>
                        </div>
                        
                        <div class="email-footer">
                            <div class="social-links mt-3">
                                <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
                                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="snapchat"><i class="fab fa-snapchat-ghost"></i></a>
                                <a href="#" class="user"><i class="fas fa-user"></i></a>
                            </div>
                            
                            <p>© '.date('Y').' Moon Creation. Tous droits réservés.</p>
                            <p>Merci de faire confiance à notre marque.</p>
                        </div>
                    </div>
                </body>
                </html>';
                
                // Headers pour l'email HTML
                $headers_client = "From: $name_site <$ouremail>\r\n";
                $headers_client .= "MIME-Version: 1.0\r\n";
                $headers_client .= "Content-Type: text/html; charset=UTF-8\r\n";


                $_SESSION['send-mail'] = 'success';               
                header("Location: $URL");
                
                }

            } else {
                $_SESSION['send-mail'] = 'error';               
                header("Location: $URL");
        }
?>