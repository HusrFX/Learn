<li class="project-folders-v-active"><span>Регистрация</span></li>
</ul>
<div style="clear: both;"></div>
</div>
<div class="index-auth">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <?php
        
        include $_SERVER['DOCUMENT_ROOT'] . '/include/formRegister.php';


        /*echo '</br>';
					echo "Авторизован ли: ";
					var_dump($_SESSION['is_auth']);
					echo '</br>';
					echo "Количество хитов: ";
					var_dump($_SESSION['count_auth']);
					echo '</br>';
					echo "Время жизни: ";
					var_dump(ini_get("session.cookie_lifetime")/3600);
					echo " часов";*/
        ?>
    </table>