<?php
include "app/student.php";
function get_students($students)
{
	$students = [];
	$file_students = file_get_contents("data/students.txt");
	$file_scores = file_get_contents("data/scores.txt");
	$file_students = explode("\n", $file_students);
	$file_scores = explode("\n", $file_scores);
	foreach ($file_students as $key => $value) {
		$scores = explode(" ", $file_scores[$key]);
		$n = explode(" ", $file_students[$key]);
		$stud = new Student($n[0], $n[1], $n[2], $scores);
		array_push($students, $stud);
	}
	return $students;
}
