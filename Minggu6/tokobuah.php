
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tugas Praktikum PEMWEB Mg 6</title>
</head>
<body>
    
    <form method="POST">
        <legend><h1>TOKO BUAH ITERA</h1></legend>
        <br>
        <table>
            <tr>
                <th></th>
                <th>Nama Buah</th>
                <th>Harga</th>
                <th>Berat Buah (Kg)</th>
                <th>Sub Total Harga</th>
            </tr>
            <tr>
                <td><img src="Gambar/mangga.png" height=30 width=30></td>
                <td>Mangga</td>
                <td>Rp.15.000/kg</td>
                <td><input type="text" id="mangga" name="mangga" onchange="hargaBuah()"></td>
                <td><input id="totalMangga" name="totalMangga" readonly></td>
            </tr>
            <tr>
                <td><img src="Gambar/jambu.png" height=30 width=30></td>
                <td>Jambu</td>
                <td>Rp.13.000/kg</td>
                <td><input type="text" id="jambu" name="jambu" onchange="hargaBuah()"></td>
                <td><input id="totalJambu" name="totalJambu" readonly></td>
            </tr>
            <tr>
                <td><img src="Gambar/salak.jpg" height=32 width=32></td>
                <td>Salak</td>
                <td>Rp.10.000/kg</td>
                <td><input type="text" id="salak" name="salak" onchange="hargaBuah()"></td>
                <td><input id="totalSalak" name="totalSalak" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total Harga Keseluruhan</td>
                
                <td><input id="total" name="total" readonly></td>
            </tr>
        </table>
        <br>
        <td><button type="submit" id="detailBelanja" name="detailBelanja">Lihat Detail Pembelian</button></td>
    </form>
    
    <script type="text/javascript">
        function hargaBuah(){
            var total = document.getElementById("total");
            var totalMangga = document.getElementById("totalMangga");
            var totalJambu = document.getElementById("totalJambu");
            var totalSalak = document.getElementById("totalSalak");
            var mangga = document.getElementById("mangga").value * 15000;
            var jambu = document.getElementById("jambu").value * 13000;
            var salak = document.getElementById("salak").value * 10000;
            var jumlah = mangga + jambu + salak;
            total.value = jumlah;
            totalMangga.value = mangga;
            totalJambu.value = jambu;
            totalSalak.value = salak;
        }
    </script>
    
    <div id="detail"> 
    <h1>Detail Pembelian</h1>
    <?php
        class buah {
            var $hargaMangga, $hargaJambu, $hargaSalak;

            public function __construct($mangga, $jambu, $salak){
                $this->mangga = $mangga;
                $this->jambu = $jambu;
                $this->salak = $salak;
            }

            public function hitungMangga(){
                $this->hargaMangga = $this->mangga * 15000;
                echo "Total Harga Mangga : Rp.$this->hargaMangga<br>";
            }
                
            public function hitungJambu(){
                $this->hargaJambu = $this->jambu * 13000;
                echo "Total Harga Jambu : Rp.$this->hargaJambu<br>";
            }
                
            public function hitungSalak(){
                $this->hargaSalak = $this->salak * 10000;
                echo "Total Harga Salak : Rp.$this->hargaSalak<br>";
            }

            public function totalHarga(){
                $total = $this->hargaMangga + $this->hargaJambu + $this->hargaSalak;
                echo "Total Harga Keseluruhan= Rp.$total<br>";
            }
        }
        if(isset($_POST['detailBelanja'])){
            $mangga = $_POST["mangga"];
            $jambu = $_POST["jambu"];
            $salak = $_POST["salak"];
            $detail = new buah($mangga, $jambu, $salak);
            $detail->hitungMangga();
            $detail->hitungJambu();
            $detail->hitungSalak();
            $detail->totalHarga();
        }else{
            echo "Belum Ada Inputan Belanja";
        }
                    
    ?>
    </div>
</body>
</html>
