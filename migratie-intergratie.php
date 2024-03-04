<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if (isset($_POST["info"]))
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
            background-color:darkgrey;
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
</head>
<nav>
        <a href="standpunten.php">Standpunten</a>
        <a href="login.php">Inloggen</a>
        <p><img src="logo.png"></p>

    </nav>
<body>
    <div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="index.php">Home</a>
        <a href="informatie.php">Informatie Partij</a>
        <a href="bron.php">Bronvermelding</a>
        <a href="contact.php">Contact</a>
    </div>
    <div id="main-content">
        <span class="header" style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
        <h1 style="text-align: center;">Migratie en Intergratie</h1>
        <li>Standpunt 1:</li>
        <li>Standpunt 2:</li>
        <li>Standpunt 3:</li>
        <li>Standpunt 4:</li>
        <li>Standpunt 5:</li>
        
        <div class="beschrijving-sm">
            <div class="text-white" style="height: 480px; margin: 10px; text-align: center;">
            </div>
        </div>
    </div>
    <footer>
        <div style="text-align: center;">
        <p>©2024 NLV Jens Martensen, Vaishnavi Thambippillai en Milan Waagmeester</p>
        </div>
    </footer>

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
