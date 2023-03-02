<?php
require_once 'vendor/autoload.php';
use nrauf90\Greeting\Index;

$obj = new Index("Muhammad");

echo $obj->getMessage("Muhammad");
