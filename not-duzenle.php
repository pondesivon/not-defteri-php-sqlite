<?php
   require_once('db-config.php');
   require_once('navbar.php');
?>

<div class="container">
   	<h3 class="page-title"> Not Düzenle
         <a href="not-listele.php" class="btn btn-success float-right">
          Not Düzenle
       </a>
    </h3>

    <?php
       $id = $_GET['id'];
       $sql ="SELECT * FROM notlar WHERE id=$id";
       $ret = $db->query($sql);
       $row = $ret->fetchArray(SQLITE3_ASSOC);
    ?>

    <form action="not-guncelle.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <div class="form-group">
         <label>Başlık</label>
         <input type="text" class="form-control" name="baslik" value="<?php echo $row['baslik']; ?>">
      </div>
      <div class="form-group">
         <label>İçerik</label>
         <textarea class="form-control bg-e8e8e8" name="icerik" id="exampleFormControlTextarea1" rows="30"><?php echo $row['icerik']; ?></textarea>
      </div>
      <div class="form-group">
         <label>Etiketler</label>
         <input type="text" class="form-control" name="etiketler" value="<?php echo $row['etiketler']; ?>">
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
