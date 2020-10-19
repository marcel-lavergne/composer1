<?php
require_once '../src/Wcs/Hello.php';
require __DIR__ . '../vendor/autoload.php';
$hello = new \App\Wcs\Hello();
$hello->talk();
