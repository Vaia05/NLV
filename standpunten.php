<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standpunten</title>
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

        #sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: darkgray;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 25px;
            color: black;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            color: black;
        }

        #sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main-content {
            transition: margin-left .5s;
            padding: 16px;
        }

        @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 400px;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 300px;
        }


        @media (max-width: 567em) {
            body {
                margin-bottom: 400px;
            }

            .footer {
                height: 300px;
            }
        }

        footer {
            padding-top: 30px;
            background-color: darkblue;
            color: white;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover,
        footer a:focus {
            color: white;
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

        main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .game-tile {
            position: relative;
            width: 200px;
            height: 200px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            margin: 0 auto 10px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            border: 2px solid #555;
            border-radius: 10px;
            overflow: hidden;
        }

        .game-tile:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .game-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        .game-tile h2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
        }

        .game-tile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<nav>
    <a href="mensen.php">Mensen</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Inloggen</a>

</nav>


    <div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="index.php">Home</a>
        <a href="informatie.php">Informatie Partij</a>
        <a href="standpunten.php">Standpunten</a>
        <a href="bron.php">Bronvermelding</a>
        <p><img src="logo.png" style="width:100px"></p>

    </div>
    <div id="content">
        <span class="header" style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
        <h1>Standpunten</h1>
        <div class="beschrijving-sm">
            <div class="text-white" style="height: 200px; margin: 10px; text-align: center;">
                <main>
                    <article class="game-tile" onclick="location.href='wonen.php';">
                        <div class="game-background" style="background-image: url('woon.png');"></div>
                        <h2>Wonen</h2>
                    </article>

                    <article class="game-tile" onclick="location.href='klimaat-energie.php';">
                        <div class="game-background" style="background-image: url('klimaat.png');"></div>
                        <h2>Klimaat en energie</h2>
                    </article>

                    <article class="game-tile" onclick="location.href='migratie-intergratie.php';">
                        <div class="game-background" style="background-image: url('migration.png');"></div>
                        <h2>Migratie en integratie</h2>
                    </article>

                    <article class="game-tile" onclick="location.href='veiligheid.php';">
                        <div class="game-background" style="background-image: url('veiligheid.png');"></div>
                        <h2>Veiligheid</h2>
                    </article>

                    <article class="game-tile" onclick="location.href='onderwijs.php';">
                        <div class="game-background" style="background-image: url('onderwijs.png');"></div>
                        <h2>Onderwijs</h2>
                    </article>
                </main>

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


                    <script>
                        function openNav() {
                            document.getElementById("sidebar").style.width = "250px";
                            document.getElementById("main-content").style.marginLeft = "250px";
                        }

                        function closeNav() {
                            document.getElementById("sidebar").style.width = "0";
                            document.getElementById("main-content").style.marginLeft = "0";
                        }

                        window.onload = function() {
                            if (document.cookie.split(';').some((item) => item.trim().startsWith('sidebar_open='))) {
                                document.getElementById("sidebar").style.width = "250px";
                                document.getElementById("main-content").style.marginLeft = "250px";
                            }
                        };
                    </script>
</body>

</html>