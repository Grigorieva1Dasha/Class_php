<?php
error_reporting(0);
include "function.php";
$students = [];
$students = get_students($students);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Класс студенты</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="app.php">
		<table border="2">
			<thead>
				<td><b>ФИО студента</b></td>
				<td><b>Срендняя оценка</b></td>
			</thead>
			<tbody>
				<?php
				for ($i=0; $i < count($students); $i++) {
				?>
				<tr>
					<td><?php echo $students[$i]->get_full_name(); ?></td>
					<td><?php echo $students[$i]->get_avg(); ?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		<p><input type="submit" value="Добавить данные"></p>
	</form>
</body>
</html>
