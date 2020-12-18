<?php
/**
 * Created by PhpStorm.
 * User: Kevin Schuit (3Dynamisch)
 * Date: 25-5-2020
 * Time: 09:52
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Het privacybeleid van klusbedrijf osman">
    <meta name="keywords" content="klusbedrijf osman, privacybeleid">
    <meta name="author" content="Klusbedrijf Osman">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="privacy-pages/elements/css/style.scss" rel="stylesheet">
    <?php include 'privacy-pages/elements/head.php'; ?>
    <title>Privacybeleid | <?= $sitename; ?></title>
</head>
<body>
<div class="priv-wrap-pagina">
    <h1>Privacy beleid</h1>
    <input class="back-btn btn btn-dark" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Terug naar privacy centrum"/>
    <div class="row">
        <div class="col-md-12">
            <p><?= $sitename; ?> streeft altijd naar perfectie. De inhoud van deze website is met uiterste zorg samengesteld.
                Ondanks deze zorgvuldigheid kunnen gegevens zijn veranderd of onjuist zijn weergegeven.
                De informatie wordt wekelijks soms maandelijks aangevuld en eventuele wijzigingen kunnen te allen tijde met onmiddellijke ingang en zonder enige kennisgeving worden aangebracht.
                Jij als bezoeker van onze website mag geen auteursrechtelijke beschermde werken of andere opgeslagen informatie openbaar maken of verveelvoudigen zonder toestemming van de <?= $sitename; ?> organisatie.
                Wij kunnen er niet voor instaan dat de informatie op onze website geschikt is voor het doel waarvoor de informatie door jou wordt geraadpleegd. Alle informatie, producten en diensten worden aangeboden in een staat waarin deze zich feitelijk bevinden en zonder enige garantie of waarborg ten aanzien van hun deugdelijkheid, geschiktheid voor een bepaald doel of anderszins.
                Wij sluiten alle aansprakelijkheid uit voor enigerlei directe of indirecte schade, van welke aard dan ook, die voortvloeit uit of in enig opzicht verband houdt met het gebruik van onze website, of met de tijdelijke onmogelijkheid om onze website op Internet te kunnen raadplegen.
                Wij zijn ook niet aansprakelijk voor directe of indirecte schade die het gevolg is van het gebruik van informatie die door middel van onze website verkregen is.
            </p>
            <h3>Bezwaar maken </h3>
            <p>
                Als een bepaalde verwerking op grond van het ‘gerechtvaardigd belang’ van <?= $sitename; ?> een derde plaatsvindt, heb je het recht om bezwaar te maken tegen die verwerking.
            </p>
            <h3>Waar kan je terecht met klachten en vragen? </h3>
            <p>
                Mocht je nog vragen hebben over de privacyverklaring en de wijze waarop je gegevens gebruikt, dan kun je een e-mail sturen naar <?= $email; ?>. Ook als je een klacht hebt over de manier waarop <?= $sitename; ?> jouw gegevens verwerkt, kun je een e-mail sturen naar <?= $email; ?>.
                Daarnaast kan je ook altijd contact opnemen met de bevoegde nationale toezichthouder op het gebied van privacybescherming. In Nederland is dit de Autoriteit Persoonsgegevens.
            </p>
            <h3>Gegevensoverdracht </h3>
            <p>
                Je hebt het recht je persoonsgegevens van <?= $sitename; ?> te verkrijgen.
                <?= $sitename; ?> zal deze verstrekken in een gestructureerde en gangbare vorm, die op eenvoudige wijze in andere gangbare digitale systemen te openen valt.
                Op deze manier kun je je gegevens ook bij een andere aanbieder onderbrengen.
            </p>
            <h3>Hoe gebruikt <?= $sitename; ?> jouw gegevens? </h3>
            <p>
                Hieronder vind je een overzicht van de doeleinden waarvoor <?= $sitename; ?> persoonsgegevens over je verwerkt.
                Daarbij is telkens aangegeven welke gegevens <?= $sitename; ?> voor dat specifieke doel gebruikt, wat de juridische grondslag is om die gegevens te mogen verwerken en hoe lang de gegevens door <?= $sitename; ?> worden bewaard.
                Om het overzichtelijk te houden, hebben we alles gegroepeerd naar type gegevensstroom en voor de profielen gebruiken we vaak wat algemene gegevens zoals:
            </p>
            <ul>
                <li>naam</li>
                <li>Adres</li>
                <li>Postcode</li>
                <li>Geboortedatum</li>
                <li>Geslacht</li>
                <li>Telefoonnummer</li>
                <li>Email</li>
            </ul>
            <h3>Reactie door</h3>
            <p>
                Een verzoek kan verstuurd worden naar <?= $email; ?>.
                <?= $sitename; ?> zal je verzoek zo snel mogelijk inwilligen en in elk geval niet later dan één (1) maand nadat <?= $sitename; ?> een dergelijk verzoek heeft ontvangen.
                Indien <?= $sitename; ?> je verzoek afwijst zullen wij in ons antwoord aangeven waarom het verzoek wordt afgewezen.
            </p>
        </div>
    </div>
</div>
</body>
</html>


