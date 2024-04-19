<?php
// Spracovanie údajov formulára po odoslaní
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Získať hodnoty z formulára
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";

    // Uložiť údaje do textového súboru
    $file = fopen("spravy.txt", "a"); // Otvoríme súbor v režime pripojenia
    fwrite($file, "Meno: $name, Email: $email, Správa: $message\n");
    fclose($file);

    // Presmerovanie na stránku s potvrdením
    header("Location: index.php");
    exit(); // Zabezpečí, že ďalší kód sa nevykoná po presmerovaní
}
?>
