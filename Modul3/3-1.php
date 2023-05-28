<?php 

$result=[
  'author' => [
    'email' => 'hotamovhusrav@gmail.com',
    'FIO' =>'Hotamov H. A.'
  ],
  'book' => [
    'name' => 'Basis of basis',
    'email' => 'hotamovhusrav@gmail.com'
  ]
];

?>

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
  <li><a href="3-1.php" class="current">Задание 1</a></li>
  <li><a href="3-2.php">Задание 2</a></li>
  <li><a href="3-3.php">Задание 3</a></li>
  <li><a href="3-4.php">Задание 4</a></li>
  <li><a href="3-5.php">Задание 5</a></li>
  <li><a href="3-6.php">Задание 6</a></li>
</ul>
<h1>Задание 1</h1>
<pre>
<?php var_dump($result);?>
</pre>
</body>
</html>
