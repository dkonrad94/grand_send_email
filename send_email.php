<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $to = $_POST["email"];
    $subject = "Sikeres regisztráció";
    $message = "Kedves felhasználó!\n\nSikeresen regisztráltál a szolgáltatásunkra. Köszönjük, hogy csatlakoztál!\n\nÜdvözlettel,\nA csapat";

    // Ellenőrizzük, hogy az e-mail sikeresen elküldhető-e
    if (mail($to, $subject, $message)) {
        echo json_encode(array("success" => true, "message" => "Az üzenet sikeresen elküldve"));
    } else {
        echo json_encode(array("success" => false, "message" => "Hiba történt az üzenet küldése közben"));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Hibás kérés"));
}
?>
