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
  <li><a href="3-5.php" class="current">Задание 5</a></li>
  <li><a href="3-6.php">Задание 6</a></li>
</ul>
<h1>Задание 5</h1>
<pre>
<!--Шоссе проходит через два города, в городе ограничение скорости 70 км/ч, за городом 90 км/ч. Даны (заведите переменные со значением)
$city1 — километр шоссе — центр первого города, $city1Radius — радиус города 1, $city2 — километр шоссе — центр второго города, $city2Radius —
радиус второго города.

Есть 10 машин, для каждой задан километр шоссе (случайное целое число) на котором машина находится. Все автолюбители соблюдают скоростной режим.
Для каждой машины выведите подобную строку:
“Машина 4 едет по городу на 3 км со скоростью 70
-->
<?php 

$city1=70;
$city1Radius=122;
$city2=90;
$city2Radius=278; 

$car=[
  'BMW' => rand(0, 90),
  'Tayota' => rand(0, 90),
  'Audi' => rand(0, 90),
  'Jeep' => rand(0, 90),
  'Suzuki' => rand(0, 90),
  'УАЗ' => rand(0, 90),
  'Bugatti' => rand(0, 90),
  'Opel' => rand(0, 90),
  'Volvo' => rand(0, 90),
  'Nisan' => rand(0, 90)
];

foreach($car as $key => $cars ){
    if ($cars > 70) {
      echo "<p>" . $key . " едет за городом на " . rand($city1Radius, $city1Radius + $city2Radius) . " км со скоростью " . $cars . "</p>";
    }
    else {
      echo "<p>" . $key . " едет по городу на " . rand(0, $city1Radius) . " км со скоростью " . $cars . "</p>";
    }
  } 
?>
</pre>
</body>
</html>
