<?php
function headerName($main_menu)
{
  if ($_SERVER['SCRIPT_NAME'] == $main_menu[0]['path']) {
    echo $main_menu[0]['title'];
  } elseif ($main_menu[1]['path'] == $_SERVER['SCRIPT_NAME']) {
    echo $main_menu[1]['title'];
  } elseif ($main_menu[2]['path'] == $_SERVER['SCRIPT_NAME']) {
    echo $main_menu[2]['title'];
  } elseif ($main_menu[3]['path'] == $_SERVER['SCRIPT_NAME']) {
    echo $main_menu[3]['title'];
  } elseif ($main_menu[4]['path'] == $_SERVER['SCRIPT_NAME']) {
    echo $main_menu[4]['title'];
  } elseif ('/functions/headerName.php' == $_SERVER['SCRIPT_NAME']) {
    echo $main_menu[4]['title'];
  } else {
    echo 'Авторизация';
  }
}
