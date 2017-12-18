<?php
abstract class Car 
{

	abstract function startEngine()
	{

	}

	abstract function lightOn()
	{

	}

	abstract function musicOn()
	{

	}

	abstract function climatOn()
	{

	}

	public function getName()
	{
		$this->name = $name; 
	}

	public function getQuantityDoor()
	{
		$this->getQuantityDoor = $getQuantityDoor;
	}
}