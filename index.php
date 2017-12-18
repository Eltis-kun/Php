<?php

spl_autoload_register(function ($class) 
{
    include $class . '.php';
});


$result = new Apteka ('Аптечка', 'Ул.Сумская', '48', '568-56-89', 'товара 700 единиц', 'Марья Ивановна');
var_dump($result);