<?php
class Bike
{
	public $price;
	public $max_speed;
	public $miles;

	function __construct($price, $max_speed)
	{
		$this->price = 'price: $'. $price;
		$this->max_speed = 'max_speed: '. $max_speed;
		$this->miles = 0;
	}

	function displayInfo()
	{
		echo $this->price.' '.$this->max_speed.' '.$this->miles.' total miles <br><br>';
		return $this;
	}

	function drive()
	{
		$this->miles = $this->miles+10;
		echo "Driving ".$this->miles ." total miles <br>";
		return $this;
	}

	function reverse()
	{
		$this->miles = $this->miles-10;
		echo "Reverse ".$this->miles ." total miles <br>";
		return $this;
	}

}

$bike1 = new Bike('200','25mph');
$bike2 = new Bike('500','20mph');
$bike3 = new Bike('100','15mph');


$bike1->drive()->drive()->reverse()->displayInfo();

$bike2->drive()->drive()->reverse()->reverse()->displayInfo();

$bike3->reverse()->reverse()->reverse()->displayInfo();


?>