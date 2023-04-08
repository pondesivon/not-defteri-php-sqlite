<?php
   //--------------------------------------------------
   //Gerekli dosyaları çağır.
   //--------------------------------------------------
   require_once('./db-config.php');

   //--------------------------------------------------
   //Bilgileri değişkenlere aktar.
   //--------------------------------------------------
   $baslik = SQLite3::escapeString($_POST['baslik']);
   $icerik = $safe = SQLite3::escapeString($_POST['icerik']);
   $etiketler = SQLite3::escapeString($_POST['etiketler']);

   //--------------------------------------------------
   //Sorgu metni oluştur.
   //--------------------------------------------------
   $sql ="INSERT INTO notlar(baslik, icerik, etiketler) VALUES('$baslik', '$icerik', '$etiketler')";

   //--------------------------------------------------
   //Sorgu çalıştır.
   //--------------------------------------------------
   $sonuc = $db->exec($sql);

   //--------------------------------------------------
   //Sorgu sonucuna göre işlem yap.
   //--------------------------------------------------
   if(!$sonuc) {
      echo $db->lastErrorMsg();
   } else {
      echo "Not başarılı bir şekilde kaydedildi.";
   }

   //--------------------------------------------------
   //Yönlendirme yap.
   //--------------------------------------------------
   header('Refresh:1;url=not-listele.php');
