<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP Ichwan Sanusi</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama"> <br><br>   
    <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua"> <br><br>
    <select class="opt" name="operasi">
        <option value="">--pilih--</option>
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">x</option>
        <option value="bagi">:</option>
    </select><br><br>
    <input type="submit" name="hitung" value="Hitung" class="tombol">
</form>

<?php
    if(isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        if($operasi == "tambah"){
            $hasil = $bil1 + $bil2;
        } else if ($operasi == "kurang"){
            $hasil = $bil1 - $bil2;
        } else if ($operasi == "kali"){
            $hasil = $bil1 * $bil2;
        } else if ($operasi == "bagi"){
            $hasil = $bil1 / $bil2;
        }
        
        echo $hasil;
    }
?>
    
</body>
</html>