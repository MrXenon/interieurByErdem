<?php
$url='interieurbyerdem.nl.mysql';
$username='interieurbyerdem_nl';
$password='@hI8$28Ajlwn@*';
$db='interieurbyerdem_nl';
$conn=mysqli_connect($url,$username,$password,$db);
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?> 