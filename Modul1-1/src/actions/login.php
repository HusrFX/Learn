<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/functions/halpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

addOldValue('email', $email);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    addValidationError('email', 'Неверная почта');
    setMessage('error', "Неверный формат записи");
    redirect('/');
}

if (empty($password)) {
    addValidationError('password', 'Пароль пустой');
}

$user = findUser($email);

if (!$user) {
    setMessage('error', "Пользователь $email не найден");
    redirect('/');
}

if (!password_verify($password, $user['password'])) {
    setMessage('error', 'Неверный пароль');
    redirect('/');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/../../route/home.php');
