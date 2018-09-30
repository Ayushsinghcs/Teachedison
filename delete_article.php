<?php
include "connection.php";
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql= "delete from article_create where id=$id";
  $conn->query($sql);
header('location:article_edit.php');
}
else
{

header('location:article_edit.php');



}
?>
