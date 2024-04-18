<li><a href="/?reg=yes">Регистрация</a></li>
</ul>
<div style="clear: both;"></div>
</div>
<div class="index-auth">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <?php
        include $_SERVER['DOCUMENT_ROOT'] . '/include/formAuth.php';
        /*
        if (isset($_GET['log'])) {

        ?>

            <?php
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $logins =  include $_SERVER['DOCUMENT_ROOT'] . '/include/logins.php';
            $passwords = include $_SERVER['DOCUMENT_ROOT'] . '/include/passwords.php';

            $login = $_POST['login'] ?? '';
            $pass = $_POST['pass'] ?? '';

            if (($k = array_search($login, $logins)) !== false) {
                if ($passwords[$k] != $pass) {
                    echo 'Неверный логин или пароль';
                    include $_SERVER['DOCUMENT_ROOT'] . '/include/formAuth.php';
                } else {
                    include $_SERVER['DOCUMENT_ROOT'] . '/include/success.php';
                    echo $login . '</b>!';
                    include $_SERVER['DOCUMENT_ROOT'] . '/sessions/checkerAuth.php';
                    echo '</br>' ?>
                    <a href="/template/logout.php">Выйти</a>
            <?php
                }
            } else {
                echo 'Неверный логин или пароль';
                include $_SERVER['DOCUMENT_ROOT'] . '/include/formAuth.php';
            }
        } else { ?><a href='/?log=yes'>Ввести данные для входа</a>
        <?php }*/

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