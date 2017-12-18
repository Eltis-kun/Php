<?php
class Cat extends Animal
{
	public $catname;
	public $catsleep;
	public $catwashen;

	public function __construct ($catname, $catsleep, $catwashen)
	{
		$this->catname = $catname;
		$this->catsleep = $catsleep;
		$this->catwashen = $catwashen;
	}
}

?>