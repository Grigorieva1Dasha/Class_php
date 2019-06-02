<?php
include "human.php";

class Student extends Human
{
	public $scores = [];

	public function __construct($name, $lastname, $secondname, $scores)
	{
		parent:: __construct($name, $lastname, $secondname);
		$this->scores = $scores;
	}

	public function get_avg()
	{
		$count = count($this->scores);
		$sum = 0;
		for ($i=0; $i < $count; $i++)
		{ 
			$sum += $this->scores[$i];
		}
		$avg = (float)$sum / (float)$count;

		return $avg;
	}
}
