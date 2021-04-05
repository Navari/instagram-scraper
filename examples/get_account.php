<?php

require_once '../vendor/autoload.php';
use Navari\InstagramScrapper\Instagram;


$instagram = new Instagram();

print_r($instagram->getAccount('neymarjr'));