<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';
if(isset($_POST['upload']))
{
  $allowed_types=array("jpg", "png", "jpeg");  
  $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
  if(!empty($_FILES['photo']['error']))
  {
    echo 'Ошибка загрузки';
  } elseif (strpos($_FILES['photo']['name'], $allowed_types[0]) == false && strpos($_FILES['photo']['name'], $allowed_types[1]) == false &&
  strpos($_FILES['photo']['name'], $allowed_types[2]) == false) {
    echo 'Изображение имеет неверный формат. Допустимы только jpeg, png, jpg.';
  } elseif ($_FILES['photo']['size'] > 5242880) {
    echo 'Файл слишком велик. Размер файла должен быть ниже 5 MB';
  } else {
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath . $_FILES['photo']['name']);
  }
}

?>

<form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>" >
<span>Загрузите файл менее 5 MB: </span>
<input type="file" name="photo" />
<br/>
<br/>
<input type="submit" name="upload" value="Загрузить"/>
</form>

<form action="/gallery.php" method="POST">
<input type="submit" name="toGallery" value="Перейти в галерею"/>
</form>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';
