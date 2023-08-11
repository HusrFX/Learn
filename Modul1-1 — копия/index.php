<?php 
//$login='WR';
//$password='Muerta';

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';

?>
   
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

						 if (isset($_GET['login']) & $_GET['login']=='yes'){
								include $_SERVER['DOCUMENT_ROOT'] . '/include/formAuth.php';
							} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
								$logins =  include $_SERVER['DOCUMENT_ROOT'] . '/include/logins.php';
    						$passwords = include $_SERVER['DOCUMENT_ROOT'] . '/include/passwords.php';
								
								$login = $_POST['login'] ?? '';
								$pass = $_POST['pass'] ?? '';
								
								if (($k = array_search($login, $logins)) !== false) {
									if ($passwords[$k] !=$pass) {
										echo 'Неверный логин или пароль';
										include $_SERVER['DOCUMENT_ROOT'] . '/include/formAuth.php';
									} else {
										echo $login . '</b>!' . include $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
									}
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
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';
