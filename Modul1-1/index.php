<?php 
//$login='WR';
//$password='Muerta';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styles.css" rel="stylesheet" />
<title>Project - ведение списков</title>
</head>

<body>

  <div class="header">
    	<div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project" /></div>
        <div style="clear: both"></div>
    </div>
    
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
            	<td class="left-collum-index">
				
					<h1>Возможности проекта —</h1>
					<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
					
				
				</td>
                <td class="right-collum-index">
					
					<div class="project-folders-menu">
						<ul class="project-folders-v">
						<li class="project-folders-v-active"><span>Авторизация</span></li>
						<li><a href="#">Регистрация</a></li>
						<li><a href="#">Забыли пароль?</a></li>
						</ul>
					<div style="clear: both;"></div>
					</div>
					<div class="index-auth">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<?php
						$view = 'Добро пожаловать, <b>Гость</b>!';
						 if (isset($_GET['login']) & $_GET['login']=='yes'){
								include $_SERVER['DOCUMENT_ROOT'] . '/include/formAuth.php';
							} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
								$logins =  include $_SERVER['DOCUMENT_ROOT'] . '/include/logins.php';
    						$passwords = include $_SERVER['DOCUMENT_ROOT'] . '/include/passwords.php';
								
								$login = $_POST['login'] ?? '';
								$pass = $_POST['pass'] ?? '';
								
								if (($k = array_search($login, $logins)) !== false) {
									$passwords[$k] != $pass ?: $view = 'Добро пожаловать, <b>' . $login . '</b>!';
								}
								else {
								echo 'Неверный логин или пароль';
								include $_SERVER['DOCUMENT_ROOT'] . '/include/formAuth.php';
							}
							}  else {?><a href='/?login=yes'>Ввести данные для входа</a><?php }?>
								
						</table>
					</div>

				</td>
            </tr>
        </table>
    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>