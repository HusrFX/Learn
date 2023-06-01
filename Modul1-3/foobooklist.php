<?php 
function booklist($arr)
{
  foreach($arr['books'] as $book ){
    $aut = $arr['authors'][$book['email']];
    echo "<p>Книга " . $book['name'] . ", её написал " . $aut['FIO'] .
    $aut['birthday'] ." (". $book['email'] .")</p>";
}
}
