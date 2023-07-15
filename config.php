<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration
$clientID = '936217549103-s2vkqbgc4d35c2ohqo8suss2luqniipj.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/auntor_final/welcome.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "bookshop";

$conn = mysqli_connect($hostname, $username, $password, $database);
