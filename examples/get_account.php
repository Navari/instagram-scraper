<?php

require_once '../vendor/autoload.php';
use Navari\InstagramScrapper\Instagram;


$instagram = new Instagram(new \GuzzleHttp\Client());

print_r($instagram->getAccount('dorukstl'));