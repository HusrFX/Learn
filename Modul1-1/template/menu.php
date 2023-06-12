<?php

if ($_SERVER['SCRIPT_NAME']==$main_menu[0]['path']) {?>
  <li><a href=<?= $main_menu[0]['path'] ?> class='current'><?= $main_menu[0]['title'] ?></a></li>
  <li><a href=<?= $main_menu[1]['path'] ?>><?= $main_menu[1]['title'] ?></a></li>
  <li><a href=<?= $main_menu[2]['path'] ?>><?= $main_menu[2]['title'] ?></a></li>
  <li><a href=<?= $main_menu[3]['path'] ?>><?= $main_menu[3]['title'] ?></a></li>
  <li><a href=<?= $main_menu[4]['path'] ?>><?= $main_menu[4]['title'] ?></a></li>
  <li><a href='/'>Авторизация</a></li>
<?php } elseif ($main_menu[1]['path'] == $_SERVER['SCRIPT_NAME']) {?>
  <li><a href=<?= $main_menu[0]['path'] ?>><?= $main_menu[0]['title'] ?></a></li>
  <li><a href=<?= $main_menu[1]['path'] ?> class='current'><?= $main_menu[1]['title'] ?></a></li>
  <li><a href=<?= $main_menu[2]['path'] ?>><?= $main_menu[2]['title'] ?></a></li>
  <li><a href=<?= $main_menu[3]['path'] ?>><?= $main_menu[3]['title'] ?></a></li>
  <li><a href=<?= $main_menu[4]['path'] ?>><?= $main_menu[4]['title'] ?></a></li>
  <li><a href='/'>Авторизация</a></li>
<?php } elseif ($main_menu[2]['path'] == $_SERVER['SCRIPT_NAME']) {?>
  <li><a href=<?= $main_menu[0]['path'] ?>><?= $main_menu[0]['title'] ?></a></li>
  <li><a href=<?= $main_menu[1]['path'] ?>><?= $main_menu[1]['title'] ?></a></li>
  <li><a href=<?= $main_menu[2]['path'] ?> class='current'><?= $main_menu[2]['title'] ?></a></li>
  <li><a href=<?= $main_menu[3]['path'] ?>><?= $main_menu[3]['title'] ?></a></li>
  <li><a href=<?= $main_menu[4]['path'] ?>><?= $main_menu[4]['title'] ?></a></li>
  <li><a href='/'>Авторизация</a></li>
<?php } elseif ($main_menu[3]['path'] == $_SERVER['SCRIPT_NAME']) {?>
  <li><a href=<?= $main_menu[0]['path'] ?>><?= $main_menu[0]['title'] ?></a></li>
  <li><a href=<?= $main_menu[1]['path'] ?>><?= $main_menu[1]['title'] ?></a></li>
  <li><a href=<?= $main_menu[2]['path'] ?>><?= $main_menu[2]['title'] ?></a></li>
  <li><a href=<?= $main_menu[3]['path'] ?> class='current'><?= $main_menu[3]['title'] ?></a></li>
  <li><a href=<?= $main_menu[4]['path'] ?>><?= $main_menu[4]['title'] ?></a></li>
  <li><a href='/'>Авторизация</a></li>
<?php } elseif ($main_menu[4]['path'] == $_SERVER['SCRIPT_NAME']) {?>
  <li><a href=<?= $main_menu[0]['path'] ?>><?= $main_menu[0]['title'] ?></a></li>
  <li><a href=<?= $main_menu[1]['path'] ?>><?= $main_menu[1]['title'] ?></a></li>
  <li><a href=<?= $main_menu[2]['path'] ?>><?= $main_menu[2]['title'] ?></a></li>
  <li><a href=<?= $main_menu[3]['path'] ?>><?= $main_menu[3]['title'] ?></a></li>
  <li><a href=<?= $main_menu[4]['path'] ?> class='current'><?= $main_menu[4]['title'] ?></a></li>
  <li><a href='/'>Авторизация</a></li>
<?php } else {?>
  <li><a href=<?= $main_menu[0]['path'] ?>><?= $main_menu[0]['title'] ?></a></li>
  <li><a href=<?= $main_menu[1]['path'] ?>><?= $main_menu[1]['title'] ?></a></li>
  <li><a href=<?= $main_menu[2]['path'] ?>><?= $main_menu[2]['title'] ?></a></li>
  <li><a href=<?= $main_menu[3]['path'] ?>><?= $main_menu[3]['title'] ?></a></li>
  <li><a href=<?= $main_menu[4]['path'] ?>><?= $main_menu[4]['title'] ?></a></li>
  <li><a href='/' class='current'>Авторизация</a></li>
<?php  }
