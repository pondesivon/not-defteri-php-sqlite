<?php
require_once('db-config.php');
require_once('navbar.php');
?>
<div class="container">
    <h3 class="page-title">Arama Sonuçları
      <a href="index.php" class="btn btn-success float-right">
        Not Ekle
      </a>
    </h3>


  <!-- Table --->
   <table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Başlık</th>
        <!-- <th>İçerik</th> -->
        <th>Etiketler</th>
        <th>İşlemler</th>
    </tr>
<?php

    $search = $_GET['terim'];
	$sql ="SELECT * FROM notlar WHERE baslik LIKE '%$search%'";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) )
   {
       ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td>
                <a href="not-oku.php?id=<?php echo $row['id']; ?>" class="text text-danger">
                    <?php echo $row['baslik']; ?>
                </a>
            </td>
            <!-- <td><?php //echo $row['icerik']; ?></td> -->
            <td><?php echo $row['etiketler']; ?></td>
            <td>
                <div class="btn-group">
                <a href="not-oku.php?id=<?php echo $row['id']; ?>" class="btn btn-info">O</a>
                <a href="not-duzenle.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">D</a>
                <a href="not-sil.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">S</a>
                </div>
            </td>
        </tr>
      <?php
   }



 ?>


   </table>

 <!-- Table End --->
</div>
</body>
</html>