<?php

class Address {
	// street address
	public $street_address_1;
	public $street_address_2;

	// name of the city
	public $city_name;

	// name of the subdivision
	public $subdivision_name;

	// postal code
	public $postal_code;

	// name of the country
	public $country_name;


	function display() {
		$output = '';

		// street address
		$output .= $this->street_address_1;
		if($this->street_address_2) {
			$output .= '<br/>' . $this->street_address_2;
		}

		// city, subdivision, postal
		$output .= '<br/>';
		$output .= $this->city_name . ', ' . $this->subdivision_name;
		$output .= ' '. $this->postal_code;

		//country
		$output .= '<br/>';
		$output .= $this->country_name;

		return $output;
	}

}





?>