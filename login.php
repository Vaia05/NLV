<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
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
            transition: margin-left .5s;
            padding: 16px;
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
<nav>
        <a href="standpunten.php">Standpunten</a>
        <a href="login.php">Inloggen</a>
        <p><img src="logo.png"></p>

    </nav>
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
            <form method="post" action="index.php">
           
            <footer>
        <div style="text-align: center;">
            <p>©2024 NLV Jens Martensen, Vaishnavi Thambippillai en Milan Waagmeester</p>
        </div>
    </footer>  
           
            <input type="submit" value="back" name="back">
            <?php
            if (!isset($_POST["back"])) {
                return true;
            }
            ?>
            </form>
        </section>
    </main>
 
    

</body>

</html>