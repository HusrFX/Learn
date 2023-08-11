<?php

$main_menu = include $_SERVER['DOCUMENT_ROOT'] . '/route/main_menu.php';

$leftMenu = [
	['href'=>$main_menu[0]["path"], 'link'=>$main_menu[0]["title"]],
	['href'=>$main_menu[1]["path"], 'link'=>$main_menu[1]["title"]],
	['href'=>$main_menu[2]["path"], 'link'=>$main_menu[2]["title"]],
	['href'=>$main_menu[3]["path"], 'link'=>$main_menu[3]["title"]],
	['href'=>$main_menu[4]["path"], 'link'=>$main_menu[4]["title"]],
	['href'=>'/', 'link'=>'Авторизация'],
];

function drawMenu () {
	global $leftMenu; 
  		echo "<ul>";
	foreach ($leftMenu as $item) { 
			echo "<li>";
				echo "<a href='{$item['href']}'>  {$item['link']}  </a>"; // <a href = 'index.php'> Домой </a>
			echo "</li>";
	}
		echo "</ul>";
}
drawMenu ();

?>

<?php $url = $_SERVER["REQUEST_URI"];?>
<ul>
<li><a href="/" <?php if ($url == "/") {echo 'class="active"';}?>>Главная</a></li>
<li><a href="/o-nas" <?php if ($url == "/o-nas") {echo 'class="active"';}?>>О нас</a></li>
<li><a href="/contacti" <?php if ($url == "/contacti") {echo 'class="active"';}?>>Контакты</a></li>
</ul>