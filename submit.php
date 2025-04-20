<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $email = htmlspecialchars($_POST["email"]);
    $secret = htmlspecialchars($_POST["secret"]);
    $date = date("Y-m-d H:i:s");
    
    $entry = "[$date] - $pseudo <$email>: $secret\n";
    file_put_contents("secrets.txt", $entry, FILE_APPEND);
    
    echo json_encode(["success" => true, "message" => "Merci pour votre confession. Elle a été enregistrée anonymement.", "errors" => []]);
    exit;
}
?>