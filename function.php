<?php

$url = parse_url(getenv("mysql://b1e6ee4b212da0:b43dd2cc@us-cdbr-iron-east-02.cleardb.net/heroku_a278cee12538f5a?reconnect=true"));

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
    
