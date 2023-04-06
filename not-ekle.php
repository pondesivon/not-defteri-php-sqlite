<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">
	<h3 class="page-title"> Yeni Not Ekle
      <a href="not-listele.php" class="btn btn-success float-right">
      	 Not Listesi
      </a>
	</h3>

<form action="not-kaydet.php" method="post">
   <div class="form-group">
      <label>Başlık</label>

      <input type="text" class="form-control" name="baslik">

   </div>

   <div class="form-group">
      <label>İçerik</label>
      <textarea class="form-control bg-e8e8e8" name="icerik" id="exampleFormControlTextarea1" rows="30"></textarea>
   </div>

   <div class="form-group">
      <label>Etiketler</label>

      <input type="text" class="form-control" name="etiketler">

   </div>

   <button type="submit" class="btn btn-info">Kaydet</button>
</form>
</div>

    <script src="js/emmet.min.js"></script>
      <script>
        emmet.require('textarea').setup({
        pretty_break: true, // enable formatted line breaks (when inserting 
                        // between opening and closing tag) 
        use_tab: true       // expand abbreviations by Tab key
      });
    </script>
</body>
</html>
