<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $classe = htmlspecialchars($_POST["classe"]);
    $niveau = htmlspecialchars($_POST["niveau"]);
    $position = htmlspecialchars($_POST["position"]);
    $salaire = htmlspecialchars($_POST["salaire"]);
    $metier = htmlspecialchars($_POST["metier"]);
    $statut = htmlspecialchars($_POST["statut"]);
    $etablissement = htmlspecialchars($_POST["etablissement"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "syndicat@sudrailbordeaux.fr"; // Adresse email de réception
    $subject = "Nouvelle adhésion";
    $body = "Nom: $nom\nPrénom: $prenom\nEmail: $email\nTéléphone: $telephone\nClasse: $classe\nNiveau: $niveau\nPosition: $position\nSalaire: $salaire\nMétier: $metier\nStatut: $statut\nÉtablissement: $etablissement\nAdresse: $adresse\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a bien été envoyé.";
    } else {
        echo "Une erreur s'est produite.";
    }
}
?>