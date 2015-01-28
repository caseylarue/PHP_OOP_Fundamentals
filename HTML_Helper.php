<?php

class HTML_Helper
{

	public function print_table($array)  // change
	{
		foreach($array as $key => $value)
		{
			echo $key.' '.$value.' ';
		}
		echo '<br>';
	}

	public function print_select($class, $array_select)
	{
		echo $class;
		foreach($array_select as $select)
		{
			echo $select;
		}
	}
}

// $row1 = new HTML_Helper();
// $array = array("first_name"=>"Michael", "last_name"=>"Choi", "nickname"=>"Sensei");
// $array1 = array("first_name"=>"Casey", "last_name"=>"LaRue", "nickname"=>"Ruckus");
// $row1->print_table($array);
// $row1->print_table($array1);

$row2 = new HTMl_Helper();
$state_array = array("CA", "WA", "UT", "TX", "AZ");
$row2->print_select('state', $state_array);


?>