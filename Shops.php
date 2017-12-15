<?php
class Shops
{
	public $name;
	public $address;
	public $sumproduct;
	public $data;

	protected function getName()
	{
		return $this->name;
	}

	protected function getAddress()
	{
		return $this->address;
	}

	protected function getSumProduct()
	{
		return $this->sumproduct;
	}
}
?>