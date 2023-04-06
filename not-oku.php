<?php
   require_once('db-config.php');
   require_once('navbar.php');
   ?>
<div class="container">

    <?php

    $id = $_GET['id'];
    $sql ="SELECT * FROM notlar WHERE id=$id";
    $ret = $db->query($sql);
    $row = $ret->fetchArray(SQLITE3_ASSOC);

    ?>

	<h3 class="page-title"> <?php echo $row['baslik']; ?>
      <a href="not-listele.php" class="btn btn-success float-right">Not Listesi</a>
	</h3>


<form action="not-guncelle.php" method="post">
   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
   <div class="form-group">
      <?php echo nl2br($row['icerik']); ?>
      <br><br>
      <?php echo $row['etiketler']; ?>
   </div>

</form>



</div>



</body>
</html>
