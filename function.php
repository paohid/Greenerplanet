<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$dBServername = "us-cdbr-iron-east-02.cleardb.net";
$dBUsername = "b1e6ee4b212da0";
$dBPassword = "b43dd2cc";
$dBName = "heroku_a278cee12538f5a";

/*$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "addresses";*/



// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    
}
    
