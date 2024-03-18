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
    </style>
</head>
<nav>
    <a href="mensen.php">Mensen</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Inloggen</a>

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
        <h1 style="text-align: center;">Bronvermelding</h1>
        <p>
            What is Lorem Ipsum?

            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Why do we use it?

            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            Where does it come from?

            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

            The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
        </p>
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