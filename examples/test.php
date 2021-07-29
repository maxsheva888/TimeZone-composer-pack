<?php

require __DIR__ . '/../vendor/autoload.php';

use TimeZoneApp\BaseTimeZone\TimeZone;
use TimeZoneApp\BaseTimeZone\IP;
use TimeZoneApp\BaseTimeZone\WorldTimeApi;

//$ip = new IP('185.29.68.79');

// SetUp Ip address
$ip = new IP('69.162.81.155');

// Declare service
$service = new WorldTimeApi();

// Declare main Class
$currentTimeZone = new TimeZone();

// Set custom IP 
$currentTimeZone->setIpv4($ip);

//Get Data from service
$currentTimeZone->getCurrentLocal($service);

// Demonstrate result
echo $currentTimeZone->dateTime->format('c');