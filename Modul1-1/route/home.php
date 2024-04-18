<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';

$user = getCurrentUser();
?>

<div class="card home">
    <h1>Привет, <?php echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']; ?></h1>
    <h1>Ваш номер: <?php echo $user['phone']; ?></h1>
    <h1>Ваша почта: <?php echo $user['email']; ?></h1>
    <a href="#" role="button">Выйти из аккаунта</a>
</div>
<?php

include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';
