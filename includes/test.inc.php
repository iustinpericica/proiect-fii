<?php

$string = "soseta nike";
$string = preg_replace("#[^0-9a-z]#i", '', $string);
var_dump($string);