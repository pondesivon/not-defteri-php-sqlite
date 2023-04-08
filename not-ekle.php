<!-- Gerekli dosyaları çağır. -->
<?php
   require_once('db-config.php');
   require_once('navbar.php');
?>

<div class="container">

   <!-- Üst Başlık -->
   <h3 class="page-title">Yeni Not Ekle</h3>

   <form action="not-kaydet.php" method="post">

      <!-- İçerik Başlığı -->
      <div class="form-group">
         <label>Başlık</label>
         <input type="text" class="form-control" name="baslik">
      </div>

      <!-- İçerik -->
      <div class="form-group">
         <label>İçerik</label>
         <textarea class="form-control bg-e8e8e8" name="icerik" id="exampleFormControlTextarea1" rows="10"></textarea>
      </div>

      <!-- İçerik Etiketleri -->
      <div class="form-group">
         <label>Etiketler</label>
         <input type="text" class="form-control" name="etiketler">
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