<?php

include $_SERVER['DOCUMENT_ROOT'] . '/src/actions/config.php';

function redirect(string $path)
{
    header("Location: $path");
    die();
}

function addValidationError(string $fieldName, string $massege)
{
    $_SESSION["validation"]["$fieldName"] = $massege;
}


function hasVallidationError(string $fieldName): bool
{
    return isset($_SESSION["validation"]["$fieldName"]);
}

function getErrorMessage(string $fieldName)
{
    $massege = $_SESSION["validation"]["$fieldName"] ?? '';
    unset($_SESSION["validation"]["$fieldName"]);
    echo $massege;
}

function addOldValue(string $key, string $value)
{
    $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

function getPDO(): PDO
{
    try {
        return new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
        die("Connection error: {$e->getMessage()}");
    }
}

function setMessage(string $key, string $message)
{
    $_SESSION['message'][$key] = $message;
}

function hasMessage(string $key): bool
{
    return isset($_SESSION['message'][$key]);
}

function getMessage(string $key)
{
    $message = $_SESSION['message'][$key] ?? '';
    unset($_SESSION['message'][$key]);
    return $message;
}

function findUser(string $email): array|bool
{
    $pdo = getPDO();

    $stmt = $pdo->prepare(query: "SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(mode: \PDO::FETCH_ASSOC);
}

function getCurrentUser(): array|false
{
    $pdo = getPDO();

    if (!isset($_SESSION['user'])) {
        return false;
    }

    $userId = $_SESSION['user']['id'] ?? null;

    $stmt = $pdo->prepare(query: "SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    return $stmt->fetch(mode: \PDO::FETCH_ASSOC);
}
