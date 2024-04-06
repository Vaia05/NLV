<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standpunten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
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

        body {
            background-color: white;
        }

        #sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #EDEDED;
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
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 300px;
        }

        .footer {
            bottom: 0;
            width: 100%;
            height: 400px;
            background-color: darkblue;
            color: white;
            padding-top: 30px;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover,
        .footer a:focus {
            color: white;
            text-decoration: none;
            border-bottom: 1px dotted #999;
        }

        .footer .form-control {
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

        .box {
            border: 1px solid #ddd; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            background-color: #f9f9f9;
            padding: 10px;
            margin: 10px;
            border-radius: 10px;
            flex: 0 1 calc(18% - 20px);
            max-width: calc(18% - 20px);
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
        }

        .box img {
            max-width: 100%;
            height: auto;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="mensen.php">Mensen</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">Inloggen</a>
        <a href="index.php"><img src="logo.png"></a>
    </nav>

    <div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="informatie.php">Informatie Partij</a>
        <a href="standpunten.php">Standpunten</a>
    </div>

    <h2 style="text-align: center;">Standpunten</h2>

    <div id="main-content">
        <span class="header" style="font-size:30px;cursor:pointer;padding:10px;" onclick="openNav()">☰</span>

        <div class="box" onclick="window.location.href='wonen.php';">
            <p>Wonen</p>
            <img src="woon.png" alt="Wonen">
        </div>
        <div class="box" onclick="window.location.href='klimaat-energie.php';">
            <p>Klimaat en energie</p>
            <img src="klimaat.png" alt="Klimaat">
        </div>
        <div class="box" onclick="window.location.href='migratie-integratie.php';">
            <p>Migratie en integratie</p>
            <img src="migration.png" alt="Migratie">
        </div>
        <div class="box" onclick="window.location.href='zorg.php';">
            <p>Zorg</p>
            <img src="zorg.png" alt="Zorg">
        </div>
        <div class="box" onclick="window.location.href='onderwijs.php';">
            <p>Onderwijs</p>
            <img src="onderwijs.png" alt="Onderwijs">
        </div>
        
    </div>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5><i class="fa fa-road"></i>NLV</h5>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="standpunten.php">Standpunten</a></li>
                                <hr></hr>
                                <li><a href="wonen.php">Wonen</a></li>
                                <li><a href="klimaat-energie.php">Klimaat en energie</a></li>
                                <li><a href="migratie-integratie.php">Migratie en integratie</a></li>
                                <li><a href="zorg.php">Zorg</a></li>
                                <li><a href="onderwijs.php">Onderwijs</a></li>
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