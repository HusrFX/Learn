<?php
 
$view = 'Добро пожаловать, <b>Гость</b>!';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $logins = include 'login.php';
    $passwords = include 'pass.php';
 
    $login = $_POST['login'] ?? '';
    $pass = $_POST['pass'] ?? '';
 
    if (($k = array_search($login, $logins)) !== false) {
        $passwords[$k] != $pass ?: $view = 'Добро пожаловать, <b>' . $login . '</b>!';
    }
}
 
?>
 
<?= $view ?>
<form method="post">
    <input type="text" name="login"><br>
    <input type="password" name="pass"><br>
    <input type="submit" value="Вход"><br>
</form>