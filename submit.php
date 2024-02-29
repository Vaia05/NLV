<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulier doorsturen</title>
</head>

<body>
    <h1>Formulier doorgestuurd</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $naam = $_POST["naam"];
        $email = $_POST["email"];
        $telefoonnummer = $_POST["telefoonnummer"];

       
        echo "<p>Naam: " . $naam . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Telefoonnummer: " . $telefoonnummer . "</p>";

        echo "<p>Dankjewel voor het inzenden!</p>";
    } else {
        echo "<p>Error: Formulier is nog niet goed ingezonden.</p>";
    }
    ?>


</body>

</html>
