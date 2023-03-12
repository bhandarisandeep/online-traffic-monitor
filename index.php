<?php


require 'vendor/autoload.php';
use GeoIp2\Database\Reader;
$databaseFile = 'GeoLite2-City.mmdb';
$reader = new Reader($databaseFile);

$ipAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$timeOfAccess = date('Y-m-d H:i:s');

$location = $reader->city($ipAddress);
$country = $location->country->name;
$region = $location->mostSpecificSubdivision->name;
$city = $location->city->name;
$latitude = $location->location->latitude;
$longitude = $location->location->longitude;

$data = "$ip_address\t$country\t$region\t$city\t$latitude\t$longitude\n";

$logEntry = "$ipAddress\t$userAgent\t$timeOfAccess\n";
$logFile = 'mylogs.txt';
//mylogs.txt is the file to store all the data that can be viewen in the real time.

if (!file_exists($logFile)) {
  $handle = fopen($logFile, 'w') or die("Unable to create log file!");
  fclose($handle);
  chmod($logFile, 0666); // set file permissions to allow write access
}

//the below echo is just for the proper check if the file is being populated with the desired data.
// comment it out in the production code.

echo $logEntry ; 
echo $data;

file_put_contents($logFile, $logEntry, FILE_APPEND);
file_put_contents($logFile, $data, FILE_APPEND);



?>

// Put all the html content in this page so that the user can have his own page and at the same time he can have his visit stats as well.
