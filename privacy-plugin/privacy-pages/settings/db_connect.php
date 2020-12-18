<?php
/**
 * Created by PhpStorm.
 * User: Kevin Schuit
 * Date: 29-5-2020
 * Time: 14:42
 */

// instantiate the variables for database
$servername = "interieurbyerdem.nl.mysql"; //Name of the server host
$username = "interieurbyerdem_nl"; // database username
$password = "@hI8$28Ajlwn@*"; // database password
$db = "interieurbyerdem_nl"; // database name

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



