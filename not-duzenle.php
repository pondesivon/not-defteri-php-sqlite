<!-- Gerekli dosyaları çağır. -->
<?php
   require_once('db-config.php');
   require_once('navbar.php');
?>

<div class="container">

   <!-- Üst Başlık Ve Yönlendirme Alanı -->
	<h3 class="page-title">Not Düzenle</h3>

   <!-- id bilgisine göre ilgili notu getiren sorgu çalıştır. -->
   <?php
      $id = $_GET['id'];
      $sql ="SELECT * FROM notlar WHERE id=$id";
      $sonuc = $db->query($sql);
      $kayit = $sonuc->fetchArray(SQLITE3_ASSOC);
   ?>

   <!-- Sorgu sonuçlarının yazdırıldığı form alanı. -->
   <form action="not-guncelle.php" method="post">
      
      <!-- id Bilgisi -->
      <input type="hidden" name="id" value="<?php echo $kayit['id']; ?>">

      <!-- Başlık Alanı -->
      <div class="form-group">
         <label>Başlık</label>
         <input type="text" class="form-control" name="baslik" value="<?php echo $kayit['baslik']; ?>">
      </div>

      <!-- İçerik Alanı -->
      <div class="form-group">
         <label>İçerik</label>
         <textarea class="form-control bg-e8e8e8" name="icerik" id="exampleFormControlTextarea1" rows="10"><?php echo $kayit['icerik']; ?></textarea>
      </div>

      <!-- Etiket Alanı -->
      <div class="form-group">
         <label>Etiketler</label>
         <input type="text" class="form-control" name="etiketler" value="<?php echo $kayit['etiketler']; ?>">
      </div>

      <!-- Kaydetme Butonu -->
      <button type="submit" class="btn btn-info">Kaydet</button>
   </form>
</div>

<!-- Emmet Script -->
<script src="js/emmet.min.js"></script>
<script>
   emmet.require('textarea').setup({
   pretty_break: true, // enable formatted line breaks (when inserting 
                       // between opening and closing tag) 
   use_tab: true       // expand abbreviations by Tab key
   });
</script>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>