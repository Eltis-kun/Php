<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

class Shop
{
    public $price;
    public $author;

    public function __construct($price, $author)
    {
        $this->price = $price;
        $this->author = $author;
    }
}

class Picture extends Shop
{
    public $size;

    public function __construct($size)
    {
        parent::__construct();
        $this->size = $size;
    }
}

class Cd extends Shop
{
    public $quantitySong;

    public function __construct($quantitySong)
    {
        parent::__construct();
        $this->quantitySong = $quantitySong;
    }
}

class Book extends Shop
{
    public $quantityPage;

    public function __construct($quantityPage)
    {
        parent::__construct();
        $this->quantitySong = $quantityPage;
    }
}