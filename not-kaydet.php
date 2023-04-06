<?php
header('Refresh:1;url=not-listele.php');
//Include Database
require_once('./db-config.php');

$baslik = SQLite3::escapeString($_POST['baslik']);
$icerik = $safe = SQLite3::escapeString($_POST['icerik']);
$etiketler = SQLite3::escapeString($_POST['etiketler']);

 $sql ="INSERT INTO notlar(baslik, icerik, etiketler) VALUES('$baslik', '$icerik', '$etiketler')";

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Not başarılı bir şekilde kaydedildi.";
   }
