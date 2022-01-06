<?php
if(isset($_POST['submit'])) {
    $angka1 = $_POST['input1'];
    $angka2 = $_POST['input2'];
    $operator = $_POST['operator'];

    if ($operator == "tambah"){
        $hasil = $angka1 + $angka2;
    } elseif ($operator == "kurang"){
        $hasil = $angka1 - $angka2;
    } elseif ($operator == "kali"){
        $hasil = $angka1 * $angka2;
    } elseif ($operator == "bagi"){
        $hasil = $angka1 / $angka2;
    }

    echo $hasil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP Ichwan Sanusi</title>
</head>
<body>

    <form method="post" action=""> 
        <input type="text" name="input1" placeholder="masukkan angka pertama"> <br><br>
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">:</option>
        </select><br><br>
        <input type="text" name="input2" placeholder="masukkan angka kedua"> <br><br>
        <button type="submit" name="submit">submit</button>
    </form>
    
</body>
</html>