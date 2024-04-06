<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if (isset($_POST["info"]))
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Migratie en integratie</title>
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
            background-color:#EDEDED;
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
            margin-bottom: 300px;
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

        .standpunt {
    background-color: #f9f9f9; 
    border-radius: 10px; 
    padding: 20px;
    margin-bottom: 20px; 
    border: 1px solid #ddd; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
}

.standpunt h2 {
    color: black;
    font-size: 24px; 
    margin-bottom: 10px; 
}

.standpunt p {
    color: black; 
    font-size: 16px; 
    line-height: 1.6;
}

.standpunt img {
    max-width: 100%; 
    border-radius: 10px; 
    margin-bottom: 20px; 
}

        img {
            width: 400px; 
            height: auto; 
            border: 2px solid black; 
            border-radius: 10px;
            display: block; 
            margin: 0 auto; 
            margin-top: 20px; 
        }
    </style>
</head>
<nav>
        <a href="mensen.php">Mensen</a>
        <a href="contact.php">Contact
        <a href="login.php">Inloggen</a>
        <a href="index.php"><img src="logo.png"></a>

    </nav>
<body>
    <div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="informatie.php">Informatie Partij</a>
        <a href="standpunten.php">Standpunten</a>
    </div>
    <div id="main-content">
        <span class="header" style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
        <h1 style="text-align: center;">Migratie en integratie</h1>
        <div class="standpunt">
            <h2>Meer opvangcentrums voor de vluchtelingen</h2>
<p>Zodat ze niet op straat komen te staan en het wordt een grotere samenleving. Het is ook nog eens goed voor economie door dat de welvaart stijgt en de werkgelegenheden. Maar het moet wel met een maximum want anders wordt het land overvol en krijgen andere geen kansen.</p>
            <img src="opvang.png" alt="Standpunt 1">
        </div>
        
        <div class="standpunt">
            <h2>Meer grens controles</h2>
<p>Het zorgt er voor dat er geen mensen illegaal het land in kunnen. Het zorgt er ook voor dat er geen illegale producten zoals drugs en wapens in het land komen en dat maakt het land weer heel veilig om te leven.</p>
            <img src="grens.png" alt="Standpunt 2">
        </div>
        <div class="standpunt">
            <h2>Minder immigranten in ons land toelaten. </h2>
<p>Zodat mensen die hier al wonen ook een kans krijgen voor banen of opleidingen voordat we andere mensen toelaten.. Ons land krijgt dan ook minder druk op de woningmarkt en kosten van belasting dalen door vermindering van mensen.</p>
            <img src="immigranten.png" alt="Standpunt 3">
        </div>
        <div class="standpunt">
            <h2>Immigranten meer lessen geven over de Nederlandse cultuur</h2>
<p>Zodat ze mee feesten met bijvoorbeeld Sinterklaas en Koningsdag. En omdat veel mensen die hier nieuw zijn, niet weten wat deze culturele dagen zijn en dat het heel erg belangrijk is voor Nederland. Door hun het uit te leggen kunnen ze zich meer inleven en dus deel te maken uit onze samenleving.</p>
            <img src="cultuur.png" alt="Standpunt 4">
        </div>

        <div class="standpunt">
            <h2>Immigranten moeten verplicht worden om de Nederlandse taal te leren.</h2>
<p>Zodat ze makkelijk werk kunnen zoeken of naar de dokter te kunnen en makkelijk kunnen vertellen wat er is, in plaats van een tolk meenemen. Voor mensen die ouder zijn dan 75 jaar wordt het geen verplichting, want dat is moeilijk om op zo´n leeftijd nog een nieuwe taal te gaan leren. </p>
            <img src="taal.png" alt="Standpunt 5">
        </div>
        </div>
    </div>
    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5><i class="fa fa-road"></i>NLV</h5>
                <hr></hr>
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
                            <hr></hr>
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
