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
        #sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            color: #f1f1f1;
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
    </style>
</head>

<body>
    <div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="locker.php">Locker</a>
        <a href="alles.php">Alles</a>
        <a href="skin.php">Skins</a>
        <a href="backbling.php">Backblings</a>
        <a href="emote.php">Emotes</a>
        <a href="wapens.php">Wapens</a>
    </div>
    <div id="main-content">
        <span class="header" style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
        <p style="float:right;">profiel</p>
        <h1 style="text-align: center;">Locker</h1>
        <div class="beschrijving-sm">
            <div class="bg-secondary text-white" style="height: 60px; margin: 10px; text-align: center;">
                <p>Dit is je locker hierin kun je jouw geselecteerd items bekijken</p>
            </div>
        </div>
        <div class="bg-secondary text-white">
            <p>jens</p>
        </div>
    </div>

    <footer>
        <div style="text-align: center;">
            <p>©2024 176555@student.horizoncollege.nl</p>
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