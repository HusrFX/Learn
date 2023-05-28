<?php 
require_once 'foobooklist.php';
$result3=[
  'authors' => [
    'hotamovhusrav@gmail.com' => [
    'FIO' =>'Hotamov H. A.',
    'birthday' =>'30-01-1999',
    ],
    'goodman@gmail.com' => [
    'FIO' =>'Mykhylov Y. A.',
    'birthday' =>'20-05-2001',
    ],
  ],
  'books' => [
    'book1' => [
    'name' => 'Basis of basis',
    'email' => 'hotamovhusrav@gmail.com'
    ],
    'book2' => [
    'name' => 'Story about GoodMan',
    'email' => 'goodman@gmail.com'
    ],
  ]
];
$title='Задание 4';
$red = (bool) rand(0, 1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Заголовок</title>
    <style type="text/css">.red {color: red;}</style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<ul class="menu-main">
  <li><a href="/">Дом</a></li>
  <li><a href="3-1.php">Задание 1</a></li>
  <li><a href="3-2.php">Задание 2</a></li>
  <li><a href="3-3.php">Задание 3</a></li>
  <li><a href="3-4.php" class="current">Задание 4</a></li>
  <li><a href="3-5.php">Задание 5</a></li>
  <li><a href="3-6.php">Задание 6</a></li>
</ul>

<?php   
if ($red==1) {
  ?><h1 class='red'><?= $title ?></h1><?php
} else {
  ?><h1><?= $title ?></h1><?php
}
booklist($result3);
?>
</body>
</html>
