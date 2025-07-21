<?php
header('Content-Type: application/json');

// Configuration
$to_email = "michael-tabet@gmx.fr";
$subject_prefix = "Contact Portfolio - ";

// Validation et traitement
$response = array();
$errorMSG = "";

// FIRSTNAME
if (empty($_POST["fname"])) {
    $errorMSG = "Le prénom est requis. ";
} else {
    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
}

// LASTNAME  
if (empty($_POST["lname"])) {
    $errorMSG .= "Le nom est requis. ";
} else {
    $lname = filter_var($_POST["lname"], FILTER_SANITIZE_STRING);
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Le téléphone est requis. ";
} else {
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "L'email est requis. ";
} else {
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if (!$email) {
        $errorMSG .= "Format d'email invalide. ";
    }
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Le message est requis. ";
} else {
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
}

// Si pas d'erreurs, envoyer l'email
if (empty($errorMSG)) {
    $subject = $subject_prefix . "Nouveau contact de " . $fname . " " . $lname;
    
    // Corps du message
    $body = "Nouveau message de contact depuis le portfolio\n\n";
    $body .= "Prénom: " . $fname . "\n";
    $body .= "Nom: " . $lname . "\n";
    $body .= "Téléphone: " . $phone . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message:\n" . $message . "\n\n";
    $body .= "---\n";
    $body .= "Envoyé depuis le portfolio Michael Tabet\n";
    $body .= "Date: " . date('d/m/Y H:i:s') . "\n";
    
    // Headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Tentative d'envoi
    if (mail($to_email, $subject, $body, $headers)) {
        $response['success'] = true;
        $response['message'] = "Votre message a été envoyé avec succès ! Je vous recontacterai rapidement.";
        
        // Log du succès (optionnel)
        error_log("Contact form submitted successfully from: " . $email);
    } else {
        $response['success'] = false;
        $response['message'] = "Erreur lors de l'envoi. Veuillez réessayer ou me contacter directement.";
        
        // Log de l'erreur
        error_log("Failed to send contact form email to: " . $to_email);
    }
} else {
    $response['success'] = false;
    $response['message'] = $errorMSG;
}

echo json_encode($response);
?>
	if ($success && $errorMSG == ""){
	   echo "success";
	}else{
		if($errorMSG == ""){
			echo "Something went wrong :(";
		} else {
			echo $errorMSG;
		}
	}

?>