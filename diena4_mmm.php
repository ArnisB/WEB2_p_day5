<meta http-equiv="refresh" content="5; URL=localhost:8888">

<?php


class Human
{	
	// protected
	// private
	public $first_name = "Joe";
	public $last_name;
	public  $Age;


	public function getFirstName(){
		return ($this->first_name . "!");
	}

	public function setFirstName($value){
		$this->first_name = $value;
	}

	public function getLastName(){
		return ($this->last_name);
	}

	public function setLastName($value){
		$this->last_name = $value;
	}

	public function getName(){
		return ($this->first_name . " " . $this->last_name);
	}

	public function setName($fname, $lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
	}
    public function getAge(){
		return ($this->Age . " ");
	}

	public function setAge($value){
		$this->Age = $value;
	}

}

$adam = new Human;
//var_dump($test);
// echo($adam->first_name);
// echo(" ");

// echo($adam->getFirstName());
// echo(" ");

echo($adam->setFirstName("Ādams"));
echo($adam->setLastName("Ādamsons"));

echo($adam->getName());
echo(" ");


$ieva = new Human;
$ieva->setName("Ieva", "Ādamsone");
$ieva->setAge(" 33");
echo($ieva->getName().$ieva->getAge());


// echo($var);

?>




