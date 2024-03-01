<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            if (password.length >= 8) {
                return true;
            } else {
                alert("Password must be 8 characters long.");
                return false;
            }
        }
    </script>
</head>

<body>
    <main class="beschrijving-sm">
        <section style="text-align: center;" class="bg-secondary text-white">
            <h1 style="text-align: center;">Log in</h1>
            <br>
            <form method="post" action="index.php" onsubmit="return validateForm()">
                <input id="naam" type="text" name="username" placeholder="naam">
                <br>
                <br>
                <input id="password" type="password" name="password" placeholder="wachtwoord">
                <br>
                <br>
                <input type="submit" value="log in">
            </form>
        </section>
    </main>
</body>
</html>