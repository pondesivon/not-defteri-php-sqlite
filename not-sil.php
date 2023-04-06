<?php
header('Refresh:1;url=not-listele.php');
//Database
require_once('db-config.php');

//DElete Student


//Include Database
require_once('./db-config.php');


$id = $_GET['id'];


$sql ="DELETE FROM notlar WHERE id=$id ";
   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), "<span class='alert alert-success'>Not başarılı bir şekilde silindi.</span>";
   }
