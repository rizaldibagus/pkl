<html>
<head>
    <title>Menghitung Luas Persegi</title>
</head>
<body>
    <h2>Hitung Luas Persegi</h2>
    <h3>Isi Data:</h3>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang" required ></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar" required ></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
	<?php
    if(isset($_POST['submit'])){
        $panjang    = $_POST['panjang'];
        $lebar      = $_POST['lebar'];
               
        // menghitung luas persegi
        $luas_persegi = ($panjang*$lebar);
        // menghitung keliling persegi
        $keliling_persegi = 2*($panjang+$lebar);
                
        echo "Hasil hitung luas persegi adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Panjang = $panjang<br />";
        echo "Lebar = $lebar<br />";
        echo "Maka luas persegi sama dengan [ $panjang x $lebar ] = $luas_persegi<br />";
        echo "Maka keliling persegi sama dengan [ 2 x ($panjang + $lebar) ] = $keliling_persegi";
    }
?>
</body>
</html>