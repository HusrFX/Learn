<?php
require ('login.php');
require ('password.php');
$logi=$_POST['log'];
$passwor=$_POST['pass'];

if ($logi===$login && $passwor===$password){

}else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form method="post" action="/">
<label>Логин:</label><input type="text" name="log">
<label>Пароль:</label><input type="password" name="pass">
<button type="submit">Войти</button>
</form>  
</body>
</html>
<?php } ?>