<?php
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
    
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;   
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP Ichwan Sanusi</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>

<div class="kalkulator">
    <h2 class="judul">Kalkulator PHP Ichwan Sanusi</h2>
    <form method="post" action="index.php">
        <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
        <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
        <select class="opt" name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">:</option>
        </select>
        <input type="submit" name="hitung" value="Hitung" class="tombol">
    </form>
    <div class="answer">
        <center>
            <?php if(isset($_POST['hitung'])){ ?>
                <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php }else{ ?>
                <input type="text" disabled class="bil" value="0">
            <?php } ?>
        </center>
    </div>
</div>

    
</body>
</html>