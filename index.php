<?php

$text = readline ("ingresa el nombre: ");
//$text = 'eddy';
$digest = hash('sha512', $text);

echo $digest;