<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';
$files = scandir('upload/');
?><form enctype="multipart/form-data" method="POST" action="<?=$_SERVER['PHP_SELF']?>" ><?php
foreach ($files as $file) {
  if($file != '.' && $file != '..')
  {
    ?><img src="upload/<?=$file?>">
    <br>
    <br>
    <?php
    echo $file;
    ?><br>
    <input type="checkbox" name="delete[]" value="$files"/>Удалить
    <br><br>
    <?php
  }
}
if(isset($_POST['delete']))
{
  foreach ($files as $filename) {
    if (file_exists($filename))
    {
      unlink($filename);
      echo 'Файл '.$filename.' быд удалён';
    } else {
      echo 'Файл '.$filename.', не существует';
    }
  }
}
?>

<input type="submit" name="delete" value="Удалить выделенное"/>
</form>
<form action="/index.php" method="POST">
<input type="submit" name="toUpload" value="Вернуться назад"/>
</form>

<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';
