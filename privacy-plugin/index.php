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
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Klusbedrijf Osman">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="privacy-pages/elements/css/style.scss" rel="stylesheet">
   <?php include 'privacy-pages/elements/head.php'; ?>
    <title>Privacy centrum | Interieur By Erdem</title>
</head>
<body>
<h2 class="page-title">Privacy Centrum<br>
<a class="btn btn-dark" href="<?=$home;?>">Terug naar home</a>
</h2>
<div class="priv-wrap">
    <div class="row">
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$dpo == 0 ? 'hfv' : ''?>">
            <h4>NEEM CONTACT OP MET DPO</h4>
            <p>Neem contact op met onze functionaris voor gegevensbescherming.</p>
            <button type="button" class="btn btn-dark" href="#">Kom meer te weten</button>
        </div>
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$cookie_beleid == 0 ? 'hfv' : ''?>">
            <h4>COOKIE BELEID</h4>
            <p>Configureer hier uw persoonlijk cookie-beleid.</p>
            <a href="cookiebeleid.php"><button type="button" class="btn btn-dark">Kom meer te weten</button></a>
        </div>
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$vergeet_me == 0 ? 'hfv' : ''?>">
            <h4>VERGEET ME</h4>
            <p>Dien een verzoek in om uw privégegevens te wissen.</p>
            <button type="button" class="btn btn-dark">Kom meer te weten</button>
        </div>
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$verzoek_data == 0 ? 'hfv' : ''?>">
            <h4>VERZOEK OM DATA</h4>
            <p>Dien een verzoek in om een ​​kopie van al uw opgeslagen gegevens te ontvangen.</p>
            <button type="button" class="btn btn-dark">Kom meer te weten</button>
        </div>
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$privacybeleid == 0 ? 'hfv' : ''?>">
            <h4>PRIVACYBELEID</h4>
            <p>Lees hier meer over ons privacybeleid.</p>
            <a href="privacybeleid.php"><button type="button" class="btn btn-dark">Kom meer te weten</button></a>
        </div>
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$privacy_instellingen == 0 ? 'hfv' : ''?>">
            <h4>PRIVACY-INSTELLINGEN</h4>
            <p>Configureer hier uw persoonlijke privacy-instellingen.</p>
            <button type="button" class="btn btn-dark">Kom meer te weten</button>
        </div>
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$algemene_voorwaarden == 0 ? 'hfv' : ''?>">
            <h4>ALGEMENE VOORWAARDEN</h4>
            <p>Lees meer over de algemene voorwaarden van onze website.</p>
            <a href="algemene-voorwaarden.php"><button type="button" class="btn btn-dark">Kom meer te weten</button></a>
        </div>
        <div class="priv-row-block col-lg-3 col-md-4 col-sm-12 <?=$abbonement_opheffen == 0 ? 'hfv' : ''?>">
            <h4>ABONNEMENT OPHEFFEN</h4>
            <p>Afmelden voor onze nieuwsbrieven.</p>
            <button type="button" class="btn btn-dark">Kom meer te weten</button>
        </div>
    </div>
</div>
</body>
</html>