<!DOCTYPE html>
<html>
<head>
	<title>KALKULATOR SEDERHANA</title>
	<link rel="stylesheet" type="text/css" href="kalkulator-style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
        $bil3 = $_POST['bil3'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2+$bil3;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2-$bil3;
			break;
			case 'kali':
				$hasil = $bil1*$bil2*$bil3;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2/$bil3;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">Kalkulator Sederhana</h2>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua">
            <input type="text" name="bil3" class="bil" autocomplete="off" placeholder="Bilangan Ketiga">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>