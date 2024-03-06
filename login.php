<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        nav {
            background-color: darkred;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: transparent;
        }

        #main-content {
            transition: margin-bottom 0.5s;
            /* Hier is de wijziging */
            padding: 16px;
            margin-bottom: 50px;
            /* Voeg deze regel toe */
        }

        .login-container {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 50px auto;
        }

        .login-container h1 {
            margin-bottom: 20px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .login-form input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-form input[type="submit"] {
            background-color: darkred;
            color: white;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background-color: darkred;
        }

        footer {
            background-color: darkblue;
            color: white;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        nav img {
            width: 100px;
            height: auto;
        }

    </style>
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
    <nav>
        <a href="standpunten.php">Standpunten</a>
        <a href="mensen.php">Mensen</a>
        <a href="login.php">Inloggen</a>
        <p><img src="logo.png"></p>
    </nav>

    <footer>
        <div style="text-align: center;">
            <p>©2024 NLV Jens Martensen, Vaishnavi Thambippillai en Milan Waagmeester</p>
        </div>
    </footer>

    <main id="main-content">
        <div class="login-container">
            <h1>Inloggen</h1>
            <form class="login-form" method="post" action="index.php" onsubmit="return validateForm()">
                <input id="naam" type="text" name="username" placeholder="Gebruikersnaam">
                <input id="password" type="password" name="password" placeholder="Wachtwoord">
                <input type="submit" value="Log in">
            </form>
            <form method="post" action="index.php">
                <input type="submit" value="Terug" name="back" style="background-color: darkblue; color: white;">
                <?php
                if (!isset($_POST["back"])) {
                    return true;
                }
                ?>
            </form>
        </div>
    </main>

</body>

</html>