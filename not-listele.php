<!-- Gerekli dosyaları çağır. -->
<?php
	require_once('db-config.php');
	require_once('navbar.php');
?>

<div class="container">

	<!-- Üst Başlık Ve Yönlendirme Alanı -->
	<h3 class="page-title">
		Not Listesi
		<a href="not-ekle.php" class="btn btn-success float-right">Yeni Not Ekle</a>
	</h3>

	<!-- Not Listesi --->
	<table class="table table-bordered table-striped">

		<!-- Tablo Başlık Bölümü -->
		<tr>
			<th>ID</th>
			<th>Başlık</th>
			<!-- <th>İçerik</th> -->
			<th>Etiketler</th>
			<th>İşlemler</th>
		</tr>

		<!-- Tablo İçerik Bölümü -->
		<!-- PHP İle Satır Listele Başlangıç -->
		<?php
			$sql ="SELECT * FROM notlar";

			$sonuc = $db->query($sql);
			while($kayit = $sonuc->fetchArray(SQLITE3_ASSOC)) {
		?>

		<tr>
			<!-- id -->
			<td><?php echo $kayit['id']; ?></td>

			<!-- Başlık -->
			<td>
				<a href="not-oku.php?id=<?php echo $kayit['id']; ?>" class="text text-danger">
				<?php echo $kayit['baslik']; ?>
				</a>
			</td>

			<!-- İçerik -->
			<!-- <td><?php //echo $kayit['icerik']; ?></td> -->

			<!-- Etiketler -->
			<td><?php echo $kayit['etiketler']; ?></td>

			<!-- Düzenleme Alanı -->
			<td>
				<div class="btn-group">
					<a href="not-oku.php?id=<?php echo $kayit['id']; ?>" class="btn btn-info">O</a>
					<a href="not-duzenle.php?id=<?php echo $kayit['id']; ?>" class="btn btn-primary">D</a>
					<a href="not-sil.php?id=<?php echo $kayit['id']; ?>" class="btn btn-danger">S</a>
				</div>
			</td>
		</tr>
		
		<!-- PHP İle Satır Listele Bitiş -->
		<?php } ?>

	</table>
</div>

<!-- Footer alanını getir. -->
<?php require_once('footer.php'); ?>