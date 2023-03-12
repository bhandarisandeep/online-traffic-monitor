# | online-traffic-monitor |
It's a PHP code snippet for checking the online traffic to a Particular Application and using the Maxmind GIO IP data, the location of the IP can be extracted.

## Steps to install the GEO Location data in the application for the maxmind geo data.

### Description
This package provides an API for the GeoIP2 and GeoLite2 web services and databases.

### Install via Composer
We recommend installing this package with Composer.

## Download Composer
To download Composer, run in the root directory of your project:

## curl -sS https://getcomposer.org/installer | php

You should now have the file composer.phar in your project directory.

### Install Dependencies
Run in your project root:

### php composer.phar require geoip2/geoip2:~2.0

You should now have the files composer.json and composer.lock as well as the directory vendor in your project directory. If you use a version control system, composer.json should be added to it.

Require Autoloader
After installing the dependencies, you need to require the Composer autoloader from your code:

## require 'vendor/autoload.php';
