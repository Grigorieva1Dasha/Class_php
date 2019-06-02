<?php
error_reporting(0);
$errors = array();

if (!empty($_POST))
{
	$name = isset($_POST['name']) ? trim($_POST['name']) : null;
	$scores = isset($_POST['scores']) ? trim($_POST['scores']) : null;

	if (empty($name))
	{
		$errors[$name] = "Введите ФИО";
	}
	else
	{
		$array = explode(" ", $name);
		if (count($array) != 3)
		{
			$errors[$name] = "Проверьте корректность введенных данных";
		}
	}

	if (empty($scores))
	{
		$errors[$scores] = "Введите оценки";
	}

	if (empty($errors))
	{
		$content_student = "\n" . $name;
		file_put_contents("data/students.txt" , $name, FILE_APPEND);
		$content_scores = "\n" . $scores;
		file_put_contents("data/scores.txt" , $scores, FILE_APPEND);

		header('Location: index.php');
		exit;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Добавить данные</title>
</head>
<body>
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">
		<p>Введите ФИО</p>
		<p><input name="name" value="<?= isset($_POST['name']) ? $_POST['name']:''?>" required><?php echo $error['name'] ?></p>
		<p>Введите оценки через пробел</p>
		<p><input name="scores" value="<?= isset($_POST['scores']) ? $_POST['scores']:''?>" required><?php echo $error['scores'] ?></p>
		<p><input type="submit" value="Добавить"></p>
	</form>
</body>
</html>
