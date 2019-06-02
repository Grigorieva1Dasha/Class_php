<?php
class Human
{
	public $name;
	public $lastname;
	public $secondname;
	
	public function __construct($name, $lastname, $secondname)
	{
		$this->name = $name;
		$this->lastname = $lastname;
		$this->secondname = $secondname;
	}

	public function get_full_name()
	{
		$fullname = $this->lastname . " " . $this->name . " " . $this->secondname;
		return $fullname;
	}
}
