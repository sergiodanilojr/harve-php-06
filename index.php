<?php
include __DIR__."/classes/Person.php";
include __DIR__."/classes/Vehicle.php";
include __DIR__."/classes/Car.php";
include __DIR__."/classes/Bus.php";
include __DIR__."/classes/services/CalculateFipe.php";

// DateTime

$date = new \DateTime("+1YEARS");
$date->modify("+ 3 days");

$dateTwo = new DateTime("-1MONTH");

$isGreaterThan = $date != $dateTwo;

$diff = $date->diff($dateTwo);

var_dump($diff);

//America/Sao_Paulo

// DatePeriod
// DateInterval


die;

// interfaces
// enumerators
// traits
// reflection Class -> Meta programação

$john = new Person;

$john->name = "John";
$john->birth_date = "1992-09-09";
$john->genre = "male";

$david = new Person;
$david->name = "David";
$david->birth_date = "1993-08-27";
$david->genre = "male";

//var_dump($john);
echo "<br/><br/>";
//var_dump($david);

// Principios Fundamentais OO
// Abstração
// $vehicle = new Vehicle;
// var_dump($vehicle);
// Herança

$bus = new Bus(
    model: "Polo",
    brand: "VW",
    madeYear: "2020"
);

$car = new Car(
    model: "Polo",
    brand: "VW",
    madeYear: "2022"
);

$bus->setPrice(80000);
$car->setPrice(100000);

echo (new CalculateFipe($bus))->fipe()."<br/>";
echo (new CalculateFipe($car, 1))->fipe()."<br/>";

die;

$car->accelerate()."<br/>";
$car->shiftGear("primeira")."<br/>";

// $car->wheels = 3;

$bus = new Bus(
    "C40",
    "Volvo",
    "2023"
);
$bus->accelerate()."<br/>";
$bus->shiftGear("ré")."<br/>";

var_dump($car->getActions());
echo "<br/><br/>";
var_dump($bus->getActions());
// Encapsulamento -> Visibilidade
// Polimorfismo