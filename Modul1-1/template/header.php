<?php

$main_menu = include_once $_SERVER['DOCUMENT_ROOT'] . '/route/main_menu.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href = "/styles.css" rel="stylesheet" />
<title>Project - ведение списков</title>
</head>

<body>

  <div class="header">
    	<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project" /></div>
        <div style="clear: both"></div>
    </div>
    <ul class="top-menu">
      <?php sort($main_menu);
      include $_SERVER['DOCUMENT_ROOT'] . '/template/menu.php'?>
    </ul>
    