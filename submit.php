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
        $vraag = $_POST["vraag"];


       
        echo "<p>Naam: " . $naam . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Telefoonnummer: " . $telefoonnummer . "</p>";
        echo "<p>Je vraag:" . $vraag . "</php>";

        echo "<p>Dankjewel voor het inzenden!</p>";
    } else {
        echo "<p>Error: Formulier is nog niet goed ingezonden.</p>";
    }
    ?>

<form method="post" action="index.html">
                <input type="submit" value="Terug" name="back" style="background-color: darkblue; color: white;">
                
            </form>
</body>

</html>
