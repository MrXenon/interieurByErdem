<?php
/**
 * Created by PhpStorm.
 * User: Kevin Schuit (3Dynamisch)
 * Date: 25-5-2020
 * Time: 11:43
 */
include 'privacy-pages/settings/db_connect.php';

$sql = "SELECT * FROM sitename WHERE id = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $sitename               = $row['sitename'];
        $email                  = $row['email'];
        $favicon                = $row['favicon'];
        $home                   = $row['home'];
        $dpo                    = $row['dpo'];
        $cookie_beleid          = $row['cookie_beleid'];
        $vergeet_me             = $row['vergeet_me'];
        $verzoek_data           = $row['verzoek_data'];
        $privacybeleid          = $row['privacybeleid'];
        $privacy_instellingen   = $row['privacy_instellingen'];
        $algemene_voorwaarden   = $row['algemene_voorwaarden'];
        $abbonement_opheffen    = $row['abbonement_opheffen'];
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!--Insert your favicon here-->
<link rel="icon" href="<?= $favicon; ?>" type="image/png" sizes="16x16">