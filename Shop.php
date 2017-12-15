<?php
require_once "Shops.php";
class Shop extends Shops
{
    public $price;
    public $author;
    public $address = “some address”;
    public $name = "rozetka";

    protected function getPrice()
    {
    	return $price = $this->price;
    }

    protected function getAuthor()
    {
    	return $author = $this->author;
    }

	protected function getAddress()
	{
		return $this->name . ‘: ’ . $this->address;
	}

$result = new Shop;
$result->getAddress();
var_dump($result);
}
?>