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
            padding: 16px;
            margin-bottom: 50px;
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
        
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 400px;
        }


        @media (max-width: 567em) {
            body {
                margin-bottom: 400px;
            }

            .footer {
                height: 400px;
            }
        }

        footer {
            padding-top: 30px;
            background-color:darkblue;
            color: white;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover,
        footer a:focus {
            color:white;
            text-decoration: none;
            border-bottom: 1px dotted #999;
        }

        footer .form-control {
            background-color: #1f2022;
            box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
            border: none;
            resize: none;
            color: white;
            padding: 0.7em 1em;
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
    <a href="mensen.php">Mensen</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Inloggen</a>
    <p><img src="logo.png"></p>

</nav>

<body>

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
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h5><i class="fa fa-road"></i>NLV</h5>
                        <hr>
                        </hr>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="standpunten.php">Standpunten</a><img src="pijl.png" style="height:40px"></li>
                                    <li><a href="wonen.php">Wonen</a></li>
                                    <li><a href="klimaat-energie.php">Klimaat en energie</a></li>
                                    <li><a href="migratie-integratie.php">Migratie en integratie</a></li>
                                    <li><a href="veiligheid.php">Veiligheid</a></li>
                                    <li><a href="onderwijs.php">Onderwijs</a></li>
                                    <hr>
                                    </hr>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="mensen.php">Mensen</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align: center;">
                <p>©2024 NLV Jens Martensen, Vaishnavi Thambippillai en Milan Waagmeester</p>
            </div>

    </main>
</body>

</html>