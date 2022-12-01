<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});

$French = new Nationality("French");
$Spanish = new Nationality ("Spanish");
$Italian = new Nationality ("Italian");
$English = new Nationality ("English");
$Dutch = new Nationality ("Dutch");
$Portuguese = new Nationality ("Portuguese");

$France = new Country("France");
$Spain = new Country("Spain");
$Italy = new Country ("Italy");
$England = new Country ("England");
$Netherland = new Country ("Netherland");
$Portugal = new Country ("Portugal");

$Mbappe = new Player ("Killian", "Mbappe", "Male", "20-12-1998", $French);
$Kimpembe = new Player ("Presnel", "Kimpembe", "Male", "13-08-1995", $French);
$Rico = new Player ("Sergio", "Rico", "Male", "01-09-1993", $Spanish);
$Ramos = new Player ("Sergio", "Ramos", "Male", "30-03-1986", $Spanish);
$Verratti = new Player ("Marco", "Verratti", "Male", "05-11-1992", $Italian);
$Donnarumma = new Player ("Gianluigi", "Donnarumma", "Male", "25-02-1999", $Italian);
$Pereira = new Player ("Pereira", "Danilo", "Male", "09-09-1991", $Portuguese);
$Sanches = new Player ("Sanches", "Renato", "Male", "18-08-1997", $Portuguese);



$psg = new Club ("Paris-Saint-Germain", $France);
$realmadrid = new Club ("Real Madrid", $Spain);
$rcs = new Club ("Racing Club de Strasbourg", $France);


$mercato1 = new Mercato ($psg, $Mbappe);
$mercato2 = new Mercato ($realmadrid, $Mbappe);

echo "<b>Résultats</b><br><br>";
echo $France->getInfo();

echo $psg->getPlayers();

echo $Mbappe->getInfo();
