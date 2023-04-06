<?php
header('Refresh:3;url=not-listele.php');
//Database
require_once('db-config.php');

//Update Student


//Include Database
require_once('./db-config.php');

$baslik = $_POST['baslik'] ;
$icerik = $_POST['icerik'];
$etiketler = $_POST['etiketler'];
$id = $_POST['id'];


$sql ="UPDATE notlar SET baslik='$baslik', icerik='$icerik', etiketler='$etiketler' WHERE id='$id'";
$ret = $db->exec($sql);
if(!$ret) {
   echo $db->lastErrorMsg();
} else {
   echo $db->changes(), "Not başarılı bir şekilde güncellendi.";
}
