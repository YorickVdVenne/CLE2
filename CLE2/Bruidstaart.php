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
                    <div class="bruidstaartContainer">
                        <h2 class="entryTitle">Bruidstaart</h2>
                        <div class="titleUnderline">
                        </div>
                        <div class="whiteLine">
                        </div>
                        <div id="bruidstaartText">
                            <p>
                                Ook het aansnijden van de bruidstaart met een gezelschap behoort tot de mogelijkheden,
                                zeker met het mooie Raadhuis “de Paauw” aan de overkant van de rijksstraatweg wordt veelal de “link” naar ons theepaviljoen gelegd
                                om hier met uw familie en vrienden na de huwelijksvoltrekking een stukje bruidstaart met thee of eventueel champagne te gebruiken.
                            </p>
                            <p>
                                Zeker om even een rustpunt op de huwelijksdag te creëren leent het theepaviljoen zich uitstekend.
                                Terwijl de gasten genieten van een heerlijk stukje taart kan het bruidspaar eventueel foto’s maken in de omgeving.
                            </p>
                            <p>
                                Voor het aansnijden van de bruidstaart kunt u reserveren tijdens onze openingstijden (10-17 uur) tot maximaal 35 personen.
                                Dit geldt alleen in de periode vanaf half mei tot half september.
                            </p>
                            <p>
                                In de periode van half september tot half mei kunt u dit voor maximaal 20 personen reserveren.
                                Wij gaan er dan van uit dat u binnen zal zitten en dan is onze ruimte beperkt.
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
