<?php

abstract class Transport
{
	public $driverName = "Водитель";

	abstract function driverSide();
	abstract protected function changeOil();

	public function Move()
	{
		echo "Посторониииись!!!";
	}
}

class Car extends Transport
{

	public $wheels = 4;

	public function countWheels()
	{
		echo "У машины " . $this->wheels . " колеса";
	}

	public function driverSide()
	{
		echo $this->driverName . " сидит за рулем слева";
	}

	public function changeOil()
	{
		echo "В машине надо обязательно менять масло";
	}
}

class Bike extends Transport
{

	public $wheels = 2;

	public function countWheels()
	{
		echo "У велосипеда " . $this->wheels . " колеса";
	}

	public function driverSide()
	{
		echo $this->driverName . " просто сидит за рулем";
	}

	public function changeOil()
	{
		echo "В велосипеде не обязательно менять масло...точнее совсем не нужно";
	}
}

//Создаем объекты
$car = new Car();
$bike = new Bike();

//исследуем объекты...
echo "<pre>";
print_r($car);
echo "</pre>";

echo "<pre>";
print_r($bike);
echo "</pre>";

$car->countWheels();
echo "<br>";
$bike->countWheels();
echo "<br>";
$car->driverSide();
echo "<br>";
$bike->driverSide();
echo "<br>";
$car->changeOil();
echo "<br>";
$bike->changeOil();
echo "<br>";
$car->move();
echo "<br>";
$bike->move();

//создаем интерфейсы...
interface Oilable
{
	public function changeOil();
}

interface Doorable
{
	public function countDoors();
}

//используем интерфейсы в классе Car...
class SuperCar implements Oilable, Doorable
{

	public $wheels = 4;

	public function countWheels()
	{
		echo "У машины " . $this->wheels . " колеса";
	}

	public function changeOil()
	{
		echo "Пора менять масло";
	}

	public function countDoors()
	{
		echo "В машине 2 или 4 двери";
	}
}

//созданные интерфейсы не применимы для велосипеда...
class superBike
{

	public $wheels = 2;

	public function countWheels()
	{
		echo "У велосипеда " . $this->wheels . " колеса";
	}
}

$car = new SuperCar();
$bike = new SuperBike();

/*Посмотрим на объекты*/
echo "<pre>";
print_r($car);
echo "</pre>";

echo "<pre>";
print_r($bike);
echo "</pre>";

$car->countWheels();
echo "<br>";
$bike->countWheels();
echo "<br>";
$car->changeOil();
echo "<br>";
$car->countDoors();
