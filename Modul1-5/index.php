<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';

if(isset($_POST['upload']))
{
  $allowed_types = array("jpg", "png", "jpeg");
  $countFiles = count($_FILES['photo']['name']);  
  $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
  $fileName= $_FILES['photo']['name'][$i];

  for ($i=0; $i<$countFiles; $i++) {
  $fileName= $_FILES['photo']['name'][$i];
  if(!empty($_FILES['photo']['error'][$i]))
  {
    echo 'Произошла ошибка';
  } elseif (strpos($fileName, $allowed_types[0]) == false && strpos($fileName, $allowed_types[1]) == false &&
  strpos($fileName, $allowed_types[2]) == false) {
    echo 'Изображение имеет неверный формат. Допустимы только jpeg, png, jpg.';
  } elseif ($_FILES['photo']['size'][$i] > 5242880) {
    echo 'Файл слишком велик. Размер файла должен быть ниже 5 MB';
  } else {
    if ($countFiles <= 5) {
      move_uploaded_file($_FILES['photo']['tmp_name'][$i], 'upload/'.$fileName);
    } else { echo 'Слишком много файлов';}
    }
  }
}


?>

<form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>" >
<span>Загрузите файл менее 5 MB: </span>
<input type="file" name="photo[]" multiple/>
<br/>
<br/>
<input type="submit" name="upload" value="Загрузить"/>
</form>

<form action="/gallery.php" method="POST">
<input type="submit" name="toGallery" value="Перейти в галерею"/>
</form>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';
