<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if (isset($_POST["info"]))
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonen</title>
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
        <h1 style="text-align: center;">Wonen</h1>
        <div class="standpunt">
            <h2>De huizen prijzen moeten omlaag gaan</h2>
<p>Zodat laag inkomen gezinnen, jonge mensen of alleenstaande een kans krijgen om een huis te kopen.Als het huis dus minder kost kunnen laag inkomen gezinnen meer geld uitgeven voor eten en kleding. En kunnen mensen die voor een huis ergens anders moeten wonen makkelijker verhuizen van huis.</p>
            <img src="huis.png" alt="Standpunt 1">
        </div>
        
        <div class="standpunt">
            <h2>Ouderentehuis moeten ruimtelijker worden </h2>
<p>Zodat het aantrekkelijker is om sneller er naar toe te gaan. Want als het er veel gezelliger uitziet en is dan willen ouderen op een jongere leeftijd dan 70 daar heen gaan want thuis zitten ze meestal alleen of met ze 2en.</p>            
<img src="verzorging.png" alt="Standpunt 2">
        </div>
        
        <div class="standpunt">
            <h2>Meer huizen gaan isoleren</h2>
            <p>Zodat je geen warmte verliest in je huis en dus minder energie verliest aan kachel en dus minder hoeft te betalen voor de energierekeningen. Je bent ook nog eens goed bezig met duurzaam zijn door te isoleren. Ook een optie is een groendak nemen dit is goede isolatie en je bent ook nog eens goed bezig met het milieu te helpen. Een groendak absorbeert water en is eenvoudig aan te leggen.</p>
            <img src="isoleer.png" alt="Standpunt 3">
<p>Bron: https://www-rix-co-uk.translate.goog/blog/post/benefits-insulating-your-home?_x_tr_sl=en&_x_tr_tl=nl&_x_tr_hl=nl&_x_tr_pto=rq</p>
   
        </div>
        <div class="standpunt">
            <h2>Meer huizen gaan over op elektrische kachels.</h2>
<p>Zodat je duurzamer bezig bent en er tegelijkertijd winst aan maakt. Je maakt er winst aan omdat gas duurder is dan de elektriciteit die je nodig hebt voor de kachel.</p>
            <img src="kachel.png" alt="Standpunt 4">
        </div>

        <div class="standpunt">
            <h2>De huurtoeslag verhogen</h2>
<p>Zodat mensen met een laag inkomen alsnog een leuke dag met hun kinderen kunnen hebben en dus niet de risico lopen om in armoede te komen door het niet kunnen betalen van huur.Als het huis in een goede buurt zit hebben de kinderen ook meteen goede scholen om naar toe te gaan. </p>            
<img src="huur.png" alt="Standpunt 5">
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
