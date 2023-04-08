<!-- Gerekli dosyaları çağır. -->
<?php
   require_once('db-config.php');
   require_once('navbar.php');
   require_once('arac.php');
?>

<div class="container">

   <!-- İlgili notu getiren sorguyu çalıştır. -->
   <?php
      $id = $_GET['id'];
      $sql ="SELECT * FROM notlar WHERE id=$id";
      $sonuc = $db->query($sql);
      $kayit = $sonuc->fetchArray(SQLITE3_ASSOC);
   ?>

   <!-- Üst Başlık Ve Yönlendirme Butonları -->
   <h3 class="page-title text-success"> <?php echo $kayit['baslik']; ?></h3>
   <a href="not-listele.php" class="btn btn-success _float-right">Not Listesi</a>
   <a href="not-duzenle.php?id=<?php echo $kayit['id']; ?>" class="btn btn-danger _float-right">Düzenle</a>

   <form action="not-guncelle.php" method="post">

      <!-- id Bilgisi -->
      <input type="hidden" name="id" value="<?php echo $kayit['id']; ?>">

      <!-- İçerik Alanı -->
      <div class="form-group">

         <!-- Ana İçerik -->
         <p class="icerik"><?php echo Arac::YeniSatirKarakterleriniPEtiketiIleSar($kayit['icerik']); ?></p>
         <hr>

         <!-- Etiket -->
         <p>

            <!-- Konu etiketlerini html tag ile sar. -->
            <?php 
               $dizi =  explode(",", $kayit['etiketler']);

               $yeni = "<span class='badge badge-success'>Etiketler</span> ";

               foreach ($dizi as $oge) {
                  $oge = trim($oge);
                  $yeni = $yeni . "<span class='badge badge-primary'>" . $oge . "</span> ";
               }

               echo $yeni;
            ?>
         </p>
      </div>
   </form>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>