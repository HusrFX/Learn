<?php
/*
* В сессии будет содержаться информация авторизован пользователь или нет, а также общее количество хитов.
*/
session_start([
    'cookie_lifetime' => 11,
]);

if(!$_SESSION['count_auth'])
{
  $_SESSION['count_auth']= 1;
}
else {
  ++$_SESSION['count_auth'];
}
  