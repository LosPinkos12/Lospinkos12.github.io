<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoznam správ</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/bible.png'); /* Nastavenie pozadia */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 75%; /* Šírka kontajnera */
            background-color: rgba(255, 255, 255, 0.8); /* Priesvitný biely */
            padding: 20px;
            border-radius: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Zoznam správ</h1>
        <ul>
            <?php
            // Načítanie údajov zo súboru a zobrazenie na stránke
            $file = fopen("spravy.txt", "r"); // Otvoríme súbor v režime čítania
            while (!feof($file)) {
                $line = fgets($file);
                echo "<li>$line</li>";
            }
            fclose($file);
            ?>
        </ul>
    </div>
</body>
</html>
