<?php
require_once 'connectie_db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reserveringssysteem</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="fullPage">
        <section id="page1">
            <header>
                <h1>Theepaviljoen de Horsten</h1>
            </header>
            <div id="navBar">
                <nav class="mainBar">
                    <ul>
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="Menu.php">Menu</a></li>
                        <li><a href="HighTea.php">High Tea</a></li>
                        <li><a href="Recepties.php">Recepties</a></li>
                        <li><a href="Bruidstaart.php">Bruidstaart</a></li>
                        <li><a href="Landgoed.php">Landgoed</a></li>
                        <li><a href="RouteBeschrijving.php">Route beschrijving</a></li>
                        <?php if(isset($_SESSION['email'])) { ?>
                            <li><a href="secure.php">Beheer pagina</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        <?php } else { ?>
                            <li><a href="secure.php"><small>Log in</small></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
            <div id="content">
                <div class="backGroundTheme">
                    <div class="receptiesContainer">
                        <h2 class="entryTitle">Recepties</h2>
                        <div class="titleUnderline">
                        </div>
                        <div class="whiteLine">
                        </div>
                        <div id="receptiesText">
                            <p>
                                Ook voor het geven van een (<em>huwelijk</em>) receptie is ons theepaviljoen een uniek plekje in de randstad.
                                Met het mooie Raadhuis “de Paauw” van de gemeente Wassenaar op 5 minuten afstand gingen reeds vele bruidsparen u voor.
                            </p>
                            <p>
                                Maar ook voor een <em>borrel</em> een <em>supriseparty</em> of gewoon een <em>verjaardag</em>  vieren behoren tot de mogelijkheden.
                                Deze feestelijkheden kunnen wij voor u verzorgen vanaf half mei tot 1 september van 17.00 uur tot 19.00 uur.
                                u dient dan wel minimaal 40 en maximaal 100 gasten uit te nodigen. Het gehele theepaviljoen is dan voor u en uw gezelschap.
                            </p>
                            <p>
                                Uiterlijk 19.30 uur dient iedereen het landgoed verlaten te hebben.
                                Prijzen en reserveringen alleen telefonisch tijdens openingstijden.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p>Theepaviljoen de Horsten | Papeweg 36 | 2245 BA Wassenaar | tel: 070-5112619</p>
        </footer>
    </div>
<script src="assets/js/stickynavbar.js"> </script>
</body>
</html>
