To give structure to an object we use a class.

A class is a blueprint that defines the structure of an object.  

Classes have attributes which are the data structure for propreties.  
Classes often define behaviors which are implemented as methods.
Methods are a function that's contained within a class. 

Objects are instances of classes, each occurance of an object of a particular class has all properties and behaviors of that class.  

Classes have:
- attributes:
	structure for properties
	terms use interchangeabley; prefers properties
- behaviors - implemented as methods
	subroutine that works on an object
	like a function within a class

Objects are:
- instances of a class
-  each object of a class has:  all class properties, all class behaviors
- properties may be the same but values may differ

Address Class
- Properties:
   city, subdivision
- Behavior:
    look up postal code
- every instance will have addres properties, behavior

Address Instances:
- Address:
   properties, city: Phoenix, subdivision: AZ
   behavior: look up postal code
- Address:
   properties, city: Columbus, subdivision: OH
   behavior: look up postal code
- we can't anticipate contents of properties
- but we can anticipate format and how to access

OOP Features:
- abstraction: defines data, program structures, hides implementation, human readable
- encapsulation: exposes functionality, restricts access
- hierarchy: properties and behavior are inherited
- modularity: functionality in modules that accomplish one task, splits into smaller subproblems
- polymorphism: interact with classes without knowing exactly which class they are.

Class Naming Best Practices:
- UpperCamel
- Variables: lowercase

Class properties:
- structure for storing variables
- unlimited properties per class
- defined with visiblity keyword: public, protected private, use public for now

Declaring a Property
- like variables
- use lowerCamel

Property Defaults
- optional
- unchanging value: must be evaluated on compilation, can't be things that change (time)


Class Methods
- functions within a class
- same naming convention as functions: lowerCamel

First Method
- disply HTML formatted address
- no santization: use something like htmlspecialschars in production

Accessing Properties
- from methods within objects
   $this 
      Reference to calling objects
      Object that the method belongs to

Object Property Access Syntax
- $this->name
- example:
   Address with city property: "San Diego"
   $this->city accesses "San Diego"

Address class so far:
- created class
- properties
- display method

Instantiation
- object of instantiated class
- $instance = new Class;

----------------------------------------------------
----------------------------------------------------
----------------------------------------------------

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

----------------------------------------------------

<?php

require 'class.Address.inc';

echo '<h2>Instantiating Address</h2>';
$address = new Address;

echo '<h2>Empty Address</h2>';

echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Setting properties..</h2>';
$address->street_address_1 = '555 Fake Street';
$address->city_name = 'Townsville';
$address->subdivision_name = 'state';
$address->postal_code = '12345';
$address->country_name = 'USA';
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Displaying address...</h2>';
echo $address->display();

?>
----------------------------------------------------

Instantiating Address

Empty Address

Address::__set_state(array(
   'street_address_1' => NULL,
   'street_address_2' => NULL,
   'city_name' => NULL,
   'subdivision_name' => NULL,
   'postal_code' => NULL,
   'country_name' => NULL,
))
Setting properties..

Address::__set_state(array(
   'street_address_1' => '555 Fake Street',
   'street_address_2' => NULL,
   'city_name' => 'Townsville',
   'subdivision_name' => 'state',
   'postal_code' => '12345',
   'country_name' => 'USA',
))
Displaying address...

555 Fake Street
Townsville, state 12345
USA

----------------------------------------------------
----------------------------------------------------
----------------------------------------------------


Protected Scope
- accessed within class, inherited / inheriting classes
   
   Inheritance
     All properties and methods of another class










