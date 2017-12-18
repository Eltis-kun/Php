<?php
class Auto extends Car 
{
	public $startEngine;
	public $lightOn;
	public $musicOn;
	public $climatOn;

	public function startEngine()
	{
		return $this->startEngine = $startEngine;
	}

	public function lightOn()
	{
		return $this->lightOn = $lightOn;
	}

	public function musicOn()
	{
		return $this->musicOn = $musicOn;
	}

	public function climatOn()
	{
		return $this->climatOn = $climatOn;
	}
}

?>