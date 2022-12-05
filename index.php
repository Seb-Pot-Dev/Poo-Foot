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
$LeMarchand = new Player("Maxime", "Le Marchand", "Male", "11-10-1989", $French);
$Perrin = new Player ("Lucas", "Perrin", "Male","19-11-1989", $French);



$psg = new Club ("Paris-Saint-Germain", $France);
$realmadrid = new Club ("Real Madrid", $Spain);
$rcs = new Club ("Racing Club de Strasbourg", $France);
$monaco = new Club ("AS Monaco", $France);



// AS MONACO PLAYERS
$mercato2 = new Mercato ($monaco, $Mbappe, "2013", "2018");
// PSG PLAYERS
$mercato1 = new Mercato ($psg, $Mbappe, "2018", "2025");
$mercato3 = new Mercato($psg, $Kimpembe, "2015", "2024");
$mercato4 = new Mercato ($psg, $Rico, "2020", "2024");
$mercato5 = new Mercato ($psg, $Ramos, "2021", "2023");
$mercato6 = new Mercato ($psg, $Verratti, "2012", "2024");
$mercato7 = new Mercato ($psg, $Donnarumma, "2021", "2026");
$mercato8 = new Mercato ($psg, $Pereira, "2021", "2025");
// RACING CLUB DE STRASBOURG PLAYERS
$mercato9 = new Mercato ($rcs, $LeMarchand, "2021", "2023");
$mercato10 = new Mercato($rcs, $Perrin, "2022", "2025");

echo "<b>Résultats</b><br><br>";
echo $France->getInfo();

echo $rcs->getPlayers();

echo $Mbappe->getInfo();
