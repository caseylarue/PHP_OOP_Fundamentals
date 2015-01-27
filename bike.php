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
		return $this->price.' '.$this->max_speed.' '.$this->miles.' total miles';
	}

	function drive()
	{
		$this->miles = $this->miles+10;
		return "Driving ".$this->miles ." total miles";
	}

	function reverse()
	{
		$this->miles = $this->miles-10;
		return "Reverse ".$this->miles ." total miles";
	}

}

$bike1 = new Bike('200','25mph');
$bike2 = new Bike('500','20mph');
$bike3 = new Bike('100','15mph');

// echo $bike1->displayInfo().'<br>';
// echo $bike2->displayInfo().'<br>';
// echo $bike3->displayInfo().'<br>';

echo $bike1->drive().'<br>';
echo $bike1->drive().'<br>';
echo $bike1->reverse().'<br>';
echo $bike1->displayInfo().'<br>';

echo $bike2->drive().'<br>';
echo $bike2->drive().'<br>';
echo $bike2->reverse().'<br>';
echo $bike2->reverse().'<br>';
echo $bike2->displayInfo().'<br>';


echo $bike3->reverse().'<br>';
echo $bike3->reverse().'<br>';
echo $bike3->reverse().'<br>';
echo $bike3->displayInfo().'<br>';

?>