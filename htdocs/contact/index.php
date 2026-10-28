<?php
    $page="contact";
    include($_SERVER['DOCUMENT_ROOT'] . "/moon-crea/includes/incfiles/header.inc.php");

    $affichage = 'display: block;'; // Par défaut le formulaire est visible
    $message = '';
    $message_class = '';

    if(isset($_SESSION['send-mail'])) {
        $affichage = 'display: none;'; // Cache le formulaire
        
        switch($_SESSION['send-mail']) {
            case 'success':
                $message = '
                <div class="message-animation">
                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                    <h3 class="text-gradient">Message envoyé avec succès !</h3>
                    <p>Nous avons bien reçu votre courrier et une confirmation de réception vous a été envoyé par mail.</p>
                    <button class="btn-replay" onclick="location.reload()">Envoyer un nouveau message</button>
                </div>';
                $message_class = 'success-message';
                break;
                
            case 'error':
                $message = '
                <div class="message-animation">
                    <svg class="crossmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                        <circle class="crossmark__circle" cx="26" cy="26" r="25" fill="none"/>
                        <path class="crossmark__cross" fill="none" d="M16 16 36 36 M36 16 16 36"/>
                    </svg>
                    <h3 class="text-gradient">Erreur d\'envoi</h3>
                    <p>Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer.</p>
                    <button class="btn-replay" onclick="location.reload()">Réessayer</button>
                </div>';
                $message_class = 'error-message';
                break;
        }
        
        unset($_SESSION['send-mail']); // Nettoie la session après affichage
    }

    include($_SERVER['DOCUMENT_ROOT'] . "/moon-crea/includes/content/contact.page.php");
    include($_SERVER['DOCUMENT_ROOT'] . "/moon-crea/includes/incfiles/footer.inc.php");
 ;?>