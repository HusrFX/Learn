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
    <input type="checkbox" name="del"/>Удалить
    <br><br>
    <?php
    if(isset($_POST['delete']))
    {
      $f = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $file;
      if (isset($_POST['del[]']))
      {
        unlink($f);
        echo 'Файл '.$file.' был удалён';
      } else {
        echo 'Файл '.$file.' не существует';
      }
      ?><br><?php var_dump($_POST['del']);
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
