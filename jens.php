<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lijsttrekker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            color: #343a40;
        }

        .profile-img {
            max-width: 150px;
            border-radius: 50%;
            margin: 20px auto;
            display: block;
        }

        p {
            color: black;
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

        nav img {
            width: 100px;
            height: auto;
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



        .person-box {
            margin-bottom: 30px;
            padding: 4px;
            border: 2px solid #3498db;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .person-box img {
            max-width: 100%;
            border-radius: 50%;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .person-box p {
            font-size: 16px;
            color: #555;
        }

        .person-box:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            .person-box {
                padding: 15px;
            }
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
    </style>
</head>
<nav>
    <a href="mensen.php">Mensen</a>
    <a href="contact.php">Contact</a>
    <a href="login.php">Inloggen</a>
    <a href="index.php"><img src="logo.png"></a>

</nav>
<body>

<div id="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="index.php">Home</a>
        <a href="informatie.php">Informatie Partij</a>
        <a href="standpunten.php">Standpunten</a>

    </div>
    <div class="container">
        <h1>Minister President Jens</h1>
        <img class="profile-img" src="jens.png" alt="Profielfoto">
        <p><strong>Titel:</strong> Minister President van NLV</p>
        <p><strong>Woonplaats:</strong> Akersloot</p>
        <h2>Functies</h2>
        <ul>
            <li>Vertegenwoordigen van de partij NLV in verkiezingscampagnes en debatten.</li>
            <li>Ontwikkelen en communiceren van partijstandpunten over belangrijke kwesties.</li>
            <li>Leiden van interne partijdiscussies en het nemen van beslissingen in samenwerking met partijleden.</li>
            <li>Onderhouden van contacten met andere politici, belangengroepen en burgers.</li>
            <li>Zichtbaar zijn in de media om het partijbeleid te promoten en te verdedigen.</li>
            <li>Stimuleren van betrokkenheid van burgers bij het politieke proces.</li>
        </ul>
    </div>
    <footer class="footer">
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
                                    <li><a href="migratie-intergratie.php">Migratie en integratie</a></li>
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

</body>

</html>
