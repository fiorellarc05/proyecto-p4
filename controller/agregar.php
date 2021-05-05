<?php
if($_POST){
  include 'model/blog.php';
  $blog = new blog($_POST['author'],$_POST['title'],$_POST['message']);
  $blog->create();
  $rows = $blog->read();
  include "view/exito.php";
}else{
  include "view/agregar.php";
}

