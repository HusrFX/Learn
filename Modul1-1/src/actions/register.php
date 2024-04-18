 <?php

    session_start();

    include_once $_SERVER['DOCUMENT_ROOT'] . '/functions/halpers.php';

    $surname = $_POST['surname'] ?? null;
    $name = $_POST['name'] ?? null;
    $patronymic = $_POST['patronymic'] ?? null;
    $email = $_POST['email'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $password = $_POST['password'] ?? null;
    $password_confirmation = $_POST['password_confirmation'] ?? null;
    $agree = $_POST['agree'] ?? null;

    addOldValue('surname', $surname);
    addOldValue('name', $name);
    addOldValue('patronymic', $patronymic);
    addOldValue('email', $email);
    addOldValue('phone', $phone);

    if (empty($surname)) {
        addValidationError('surname', 'Неверная фамилия');
    }

    if (empty($name)) {
        addValidationError('name', 'Неверное имя');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        addValidationError('email', 'Неверная почта');
    }

    if (!filter_var($phone, FILTER_VALIDATE_INT)) {
        addValidationError('phone', 'Неверный номер');
    }

    if (empty($password)) {
        addValidationError('password', 'Пароль пустой');
    }

    if ($password !== $password_confirmation) {
        addValidationError('password_confirmation', 'Пароли не совпадают');
    }

    if (empty($agree)) {
        addValidationError('agree', 'Вы не согласились с условиями');
    }

    if (!empty($_SESSION['validation'])) {
        redirect('/?reg=yes');
    }
    $pdo = getPDO();

    $query = "INSERT INTO users (surname, name, patronymic, email, phone, password, active, agree) VALUES (:surname, :name, :patronymic, :email, :phone, :password, :active, :agree)";
    $params = [
        'surname' => $surname,
        'name' => $name,
        'patronymic' => $patronymic,
        'email' => $email,
        'phone' => $phone,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'active' => 0,
        'agree' => 1

    ];
    $stmt = $pdo->prepare($query);
    try {
        $stmt->execute($params);
    } catch (\Exception $e) {
        die($e->getMessage());
    }

    redirect('/');
