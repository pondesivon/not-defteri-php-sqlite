<?php
   //--------------------------------------------------
   //Veri tabanını çağır.
   //--------------------------------------------------
   require_once('db-config.php');

   //--------------------------------------------------
   //Bilgileri değişkene aktar.
   //--------------------------------------------------
   $baslik = SQLite3::escapeString($_POST['baslik']);
   $icerik = $safe = SQLite3::escapeString($_POST['icerik']);
   $etiketler = SQLite3::escapeString($_POST['etiketler']);
   $id = $_POST['id'];


   //--------------------------------------------------
   //Güncelleme sorgusu çalıştır.
   //--------------------------------------------------
   $sql ="UPDATE notlar SET baslik='$baslik', icerik='$icerik', etiketler='$etiketler' WHERE id='$id'";
   $sonuc = $db->exec($sql);

   //--------------------------------------------------
   //Sorgu sonucuna göre bilgilendir.
   //--------------------------------------------------
   if(!$sonuc) {
      echo $db->lastErrorMsg();
   } else {
      echo "Not başarılı bir şekilde güncellendi." . " [" . $db->changes() . "]";
   }

   //--------------------------------------------------
   //Not okuma sayfasına yönlendir.
   //--------------------------------------------------
   header('Refresh:1;url=not-oku.php?id=' . $id);