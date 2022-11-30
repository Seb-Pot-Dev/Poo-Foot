<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});

$French = new Nationality("French");
$France = new Country("France");

$mbappe = new Player ("Killian", "Mbappe", "Male", "20-12-1998", $French);
$psg = new Club ("PSG", $France);
 $mercato1 = new Mercato ($psg, $mbappe);

echo $mbappe->getClub();