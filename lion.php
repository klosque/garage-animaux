<?php


require_once "Animal.php";
 


/*class Lion extends Animal

{
	

	public function  chasser()
	{
		echo "je chasse";
	}

	*/

class Lion extends Animal implements iAnimal
{
	
	public function chasser()
	{
		echo "je chasse";
	}

	public function manger()
	{
		echo "je mange";
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getAge()
	{
		return $this->$age;
	}

}

?>