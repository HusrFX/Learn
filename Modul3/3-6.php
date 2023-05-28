<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul class="menu-main">
  <li><a href="/">Дом</a></li>
  <li><a href="3-1.php">Задание 1</a></li>
  <li><a href="3-2.php">Задание 2</a></li>
  <li><a href="3-3.php">Задание 3</a></li>
  <li><a href="3-4.php">Задание 4</a></li>
  <li><a href="3-5.php">Задание 5</a></li>
  <li><a href="3-6.php" class="current">Задание 6</a></li>
</ul>
<h1>Задание 6</h1>
<pre>
<!--Создайте переменную $studentsCount — присвойте ей случайное значение от 1 до 1000000.
Создайте программу, которая выведет в нужной форме текстовое сообщение, например такие “на учебе 100 студентов”, или “на учебе 2 студента” и т.д.
-->
<?php
$studentsCount=rand(1, 1000000);
echo "На занятии по дотерскому искусству присутствовало " . $studentsCount . " человек";
?>
</pre>
</body>
</html>
