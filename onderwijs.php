<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if (isset($_POST["info"]))
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onderwijs</title>
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
        <h1 style="text-align: center;">Onderwijs</h1>
        <div class="standpunt">
            <h2>Meer mensen moeten school afmaken</h2>
           <p>Scholen worden soepeler met pauzes door leerlingen zelf hun pauzes uit te laten kiezen zolang ze aan school werk doen. Ze moeten gewoon vaste tijden hebben voor pauzes en niet hele tijd op hun telefoon zitten. Ze moeten meer gefocust te werk gaan anders gaat het moeilijk met diploma halen voor je opleiding.</p>
            <img src="school.png" alt="Standpunt 1">
        </div>
        
        <div class="standpunt">
            <h2>Meer digitalisering</h2>
           <p>Zodat je sneller informatie kan opzoeken als je een opdracht niet snapt. Het is ook leuker dan op papier of boeken werken. En als je het leuk vindt dan verbetert het je cijfers ook nog eens. Als docenten dus ook met laptops of computers werken dan kan je makkelijker opdrachten online doorsturen en dus gemakkelijk in te leveren. Je raakt altijd het blad kwijt op papier en online niet.</p>
            <img src="digitaal.png" alt="Standpunt 2">
        </div>
        <div class="standpunt">
            <h2>Meer uitleg en ondersteuning over opleidingen op de middelbare school</h2>
           <p>Zodat je dan al goed kan kiezen wat je wilt worden want het wordt nu ook wel uitgelegd maar niet genoeg. Ze moeten er meer aandacht aan besteden want sommige mensen die nu op de opleiding zitten vinden het toch niet leuk en geen verwachtingen hebben en dat kan je voorkomen als je meer uitleg krijgt en ondersteuning met kiezen.</p>
            <img src="kiezen.png" alt="Standpunt 3">
        </div>
        <div class="standpunt">
            <h2>Meer aandacht aan pesten</h2>
           <p>Zodat iedereen gewoon normaal doet tegen elkaar en je een veilige omgeving hebt en dus goed kan concentreren op school. In plaats van elkaar pijn doen en andere mensen weer bij betrekken. Je moet leren om met respect mensen te behandelen.</p>
            <img src="pesten.png" alt="Standpunt 4">
        </div>

        <div class="standpunt">
            <h2>Meer aandacht aan de gedachtegangen van de studenten. Of het mentaal wel met ze goed gaat.</h2>
           <p>Zodat je meteen geholpen kan worden als het niet goed gaat. Je kan alle oplossingen meteen krijgen. Je kan altijd terecht bij je mentor of directeur. Er wordt om de week een gesprek met je gevoerd met je mentor om te kijken of alles goed gaat.</p>
            <img src="gedachtegang.png" alt="Standpunt 5">
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
