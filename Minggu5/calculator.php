<?php
if(isset($_POST['operate'])){
    $i=0;
    $operator = ['+','-','*','/','%'];
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    $tambah = operasi($bil1, $bil2, $operator[0]);
    $kurang = operasi($bil1, $bil2, $operator[1]);
    $kali = operasi($bil1, $bil2, $operator[2]);
    $bagi = operasi($bil1, $bil2, $operator[3]);
    $modulo = operasi($bil1, $bil2, $operator[4]);
}
function operasi($bil1, $bil2, $operator){
    $hasil = 0;
    if($operator == '+'){
        $hasil = $bil1 + $bil2;
    }
    elseif($operator == '-'){
        $hasil = $bil1 - $bil2;
    }
    elseif($operator == '*'){
        $hasil = $bil1 * $bil2;
    }
    elseif($operator == '/'){
        $hasil = $bil1 / $bil2;
    }
    elseif($operator == '%'){
        $hasil = $bil1 % $bil2;
    }
    return $hasil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mg 5 - Calculator</title>
</head>
<body>
    <form method="post">
        <label for="bil1">Bilangan 1 = </label>
        <input type="text" name="bil1"><br><br>
        <label for="bil2">Bilangan 2 = </label>
        <input type="text" name="bil2"><br><br>
        <button type="submit" name="operate">Hasil Operasi</button><br><br>
        
    </form>
    
    <div>
        <p>Berikut Merupakan Hasil Dari Setiap Operasi</p>
        <p>PENJUMLAHAN <br>
        Operator : + <br>
        Hasil : 
        <?php
            if(isset($tambah)){
                echo $tambah;
            }
        ?>
        </p>
        <p>PENGURANGAN <br>
        Operator : - <br>
        Hasil : 
        <?php 
            if(isset($kurang)){
                echo $kurang;
            }
        ?>
        </p>

        <p>PERKALIAN <br>
        Operator : * <br>
        Hasil : 
        <?php 
            if(isset($kali)){
                echo $kali;
            }
        ?>
        </p>
        
        <p>PEMBAGIAN <br>
        Operator : / <br>
        Hasil : 
        <?php 
            if(isset($bagi)){
                echo $bagi;
            }
        ?>
        </p>
        
        <p>MODULUS <br>
        Operator : % <br>
        Hasil : 
            <?php 
            if(isset($modulo)){
                echo $modulo;
            }
        ?>
        </p>
    </div>
</body>
</html>