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
</head>
<nav>
    <a href="mensen.php">Mensen</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Inloggen</a>
    <p><img src="logo.png"></p>

</nav>

<body>

    <div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="index.php">Home</a>
        <a href="informatie.php">Informatie Partij</a>
        <a href="standpunten.php">Standpunten</a>
        <a href="bron.php">Bronvermelding</a>
        <p><img src="logo.png" style="width:100px"></p>

    </div>
    <div id="main-content">
        <span class="header" style="font-size:30px;cursor:pointer" onclick="openNav()">☰</span>
        <h1 style="text-align: center;">Veiligheid</h1>
        <li>Standpunt 1: There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</li>
        <br></br>
        <li>Standpunt 2: There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</li>
        <br></br>
        <li>Standpunt 3: There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</li>
        <br></br>
        <li>Standpunt 4: There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</li>
        <br></br>
        <li>Standpunt 5: There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</li>
        
        <div class="beschrijving-sm">
            <div class="text-white" style="height: 480px; margin: 10px; text-align: center;">
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
                            <li><a href="standpunten.php">Standpunten</a><img src="pijl.png" style="height:40px"></li>
                            <li><a href="wonen.php">Wonen</a></li>
                            <li><a href="klimaat-energie.php">Klimaat en energie</a></li>
                            <li><a href="migratie-integratie.php">Migratie en integratie</a></li>
                            <li><a href="veiligheid.php">Veiligheid</a></li>
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
