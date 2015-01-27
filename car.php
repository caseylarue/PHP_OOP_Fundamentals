<?php

class Car 
{
	public $price;
	public $speed; 
	public $fuel;
	public $mileage;


	function __construct ($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;

		if($price>10000)
		{
			$this->tax = $tax=0.15;
		}
		else 
		{
			$this->tax = $tax=0.12;
		}

		$this->displayInfo();

	}

	function displayInfo()
	{
		echo 'Price: $' . $this->price .'<br>'. 'Speed: ' . $this->speed.' mph <br> Fuel: '.$this->fuel.'<br> Mileage: '.$this->mileage.' mpg<br><br>';
	}
		
}


$car1 = new Car(5000, 100, 'Full', 10000);
$car2 = new Car(20000, 80, 'Empty', 0);
$car3 = new Car(10000, 110, 'Half-tank', 35000);
$car4 = new Car(25000, 90, 'Full', 20000);
$car5 = new Car(45000, 130, 'Not full', 0);


?>
