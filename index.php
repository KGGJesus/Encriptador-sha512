<?php

$text = readline ("ingresa el nombre: ");

$digest = hash('sha512', $text);

echo $digest;