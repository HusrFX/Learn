<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';
$photo = scandir('upload/');


?><form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>" ><?php
foreach ($photo as $photos) {
  if($photos != '.' && $photos != '..')
  {
    $filePath = 'upload/' . $photos;
    ?><img src="<?=$filePath?>">
    <br>
    <br>
    <?php
    echo $photos;
    ?><br>
    <input type="checkbox" name="file[]" value="<?=$filePath?>" />Удалить
    <br><br>
    <?php
  }
}
if($photo != '.' && $photo != '..') {
  if(isset($_POST['delete']) && isset($_POST['file'])) {
    foreach($_POST['file'] as $file) {
      if($file) {
        if (unlink($file)) {
          echo "Файл $file был удалён<br />";
        } else {
          echo "Произошла непредвиденная ошибка<br />";
        }
      } else {
        echo "Файл $file  не существует<br />";
      }
    }
  } else {
    echo "Выберите файл для удаления<br/>";
  }
}
?>
<button type="submit" name="delete">Удалить файл</button>
<button type="reset" name="reset">Сбросить сделанный выбор</button>
</form>
<form action="/index.php" method="POST">
<input type="submit" name="toUpload" value="Вернуться назад"/>
</form>

<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';
