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
                <div class="backGroundThemeLandgoed">
                    <div class="landgoedContainer">
                        <h2 class="entryTitle">Landgoed</h2>
                        <div class="titleUnderline">
                        </div>
                        <div class="whiteLine">
                        </div>
                        <div id="landgoedText">
                            <div id="pHeader">
                                Algemeen
                            </div>
                            <p>
                                De “Koninklijke Landgoederen de Horsten” horen al meer dan 150 jaar bij elkaar, en zijn 415 ha groot.
                                Ze zijn het eigendom van Prinses Beatrix.
                                De Horsten zijn ontstaan toen Prins Frederik der Nederlanden tussen 1836 en 1845 de drie afzonderlijke landgoederen “Ter Horst”,
                                “Raaphorst” en “Eikenhorst” aankocht en samenvoegde.
                                (een Horst is een hoger gelegen stuk (zand)grond, al of niet beplant of omgeven door bomen)
                            </p>
                            <div id="pHeader">
                                Raaphorst
                            </div>
                            <p>

                                Het oude kasteel Raaphorst zou in 1230 door Kerstand van Raephorst gebouwd zijn. Tot 1650 was het goed in bezit van deze familie.
                                In 1783 kwam het in bezit van Mr. A.P. Twent, later minister van waterstaat onder Koning Lodewijk Napoleon.
                                Deze man is begonnen met het bebossen van de Raaphorst.
                                In 1838 kocht Prins Frederik het goed. Het kasteel was toen al afgebroken. Hoe het kasteel er precies heeft uitgezien, is niet bekend.
                                Alleen enkele oude tekeningen zijn nog bewaard gebleven.
                            </p>
                            <div id="pHeader">
                                Eikenhorst
                            </div>
                            <p>

                                In 1553 was Hendrik van Raephorst eigenaar van deze hofstede.
                                Hij verkocht de hofstede in 1598 aan de familie Boll, die in de zeventiende eeuw naast de hofstede een landhuis bouwde.
                                Na aankoop liet Prins Frederik dit huis in 1845 afbreken.
                                De hofstede bleef aanvankelijk gespaard, doch werd in de tweede wereldoorlog door een bombardement verwoest.
                                Op deze plaats is na de oorlog een nieuwe boerderij gebouwd.
                                Slechts de oude Beukenlaan, welke van af de rijksweg Den Haag Ã¢â‚¬â€œ Leiden naar het voormalig landhuis van Prinses Christina voert,
                                tegenwoordig bewoond door Koning Willem-Alexander en Koningin Maxima, herinnert hier aan het verleden.
                            </p>
                            <div id="pHeader">
                                Ter Horst
                            </div>
                            <p>

                                Het eerste kasteel Ter Horst dateert al van 1203 en werd gebouwd door Philip van Wassenaar.
                                Eeuwenlang bleef het goed in bezit van deze familie. Vanaf 1615 heeft het diverse eigenaren gekend.
                                In 1838 kocht Prins Frederik het.
                                Hij liet het oude kasteel afbreken en liet de dezelfde plaats het huidige jachtslot in 1865 in neo-gotische stijl bouwen,
                                met een interieur ontworpen door Mouton. Slechts het oude in 1701, vermoedelijk naar ontwerp van Pieter Post gebouwde onlangs koetshuis/orangerie,
                                alsmede de 2-eeuwen oude waterpomp in de kasteeltuin herinneren nog aan het verleden. N.B. Pieter Post was de architect van stadhouder Frederik Hendrik.
                            </p>
                            <div id="pHeader">
                                Prins Frederik der Nederlanden
                            </div>
                            <p>

                                De naam van Prins Frederik der Nederlanden duikt regelmatig op in de historie van De Horsten.
                                Deze Prins (1797-1881) was de jongere broer van Willem II, en bekleedde tijdens het koningsschap van zijn broer de positie van veldmaarschalk.
                                Hij kocht ook het landgoed De Paauw van de erfgenamen van Pieter Twent, tegelijk met Raaphorst,
                                en liet hete verbouwen tot een statig Paleis dat heden ten dage dienst doet als Raadhuis van de gemeente Wassenaar.
                                Aanvankelijk woonde hij er alleen ‘s zomers, later permanent met zijn vrouw Louise, Prinses van Pruisen, zijn dochters en zoontje.
                                Van de duitse tuinarchitect C.E.A. von Petzold (1815-1891) is het ontwerp gekomen, dat de drie landgoederen tot én geheel maakte.
                                (o.a. Het visueel verband tussen De Paauw en De Raaphorst)
                            </p>
                            <div id="pHeader">
                                Openingstijden van het landgoed
                            </div>
                            <p>
                                Van 1 april tot 1 september	dagelijks van 09.00 tot 19.30 uur.
                                Van 1 september tot april	dinsdag tot en met zondag van 09.00 tot 17.00 uur.
                            </p>
                            <p>
                                Het landgoed is gesloten op de maandagen van 1 september tot 1 april.
                                Men moet in het bezit zijn van een geldig toegangsbewijs.
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
</body>
</html>
