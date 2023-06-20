<?php
$url = $_SERVER['SCRIPT_NAME'];?>
  <li><a href=<?= $main_menu[0]['path'] ?> <?php if ($url == $main_menu[0]['path']) {echo "class='current'";}?>><?= mb_strimwidth($main_menu[0]['title'], 0, 15, "...") ?></a></li>
  <li><a href=<?= $main_menu[1]['path'] ?> <?php if ($url == $main_menu[1]['path']) {echo "class='current'";}?>><?= mb_strimwidth($main_menu[1]['title'], 0, 15, "...") ?></a></li>
  <li><a href=<?= $main_menu[2]['path'] ?> <?php if ($url == $main_menu[2]['path']) {echo "class='current'";}?>><?= mb_strimwidth($main_menu[2]['title'], 0, 15, "...") ?></a></li>
  <li><a href=<?= $main_menu[3]['path'] ?> <?php if ($url == $main_menu[3]['path']) {echo "class='current'";}?>><?= mb_strimwidth($main_menu[3]['title'], 0, 15, "...") ?></a></li>
  <li><a href=<?= $main_menu[4]['path'] ?> <?php if ($url == $main_menu[4]['path']) {echo "class='current'";}?>><?= mb_strimwidth($main_menu[4]['title'], 0, 15, "...") ?></a></li>
  <li><a href="/" <?php if ($url == "/") {echo "class='current'";}?>> <?= mb_strimwidth('Авторизация', 0, 15, "..."); ?> </a></li>

<?php


/* 
function drawMenu() {
	global $main_menu;
	foreach ($main_menu as $item) {
			echo "<li>";
      $url = $_SERVER['SCRIPT_NAME'];
				echo "<a href='{$item['path']}' if ('{$url}' = '{$item['path']}') {echo class = 'current';}>  {$item['title']}  </a>";
			echo "</li>";
	}
}
*/
