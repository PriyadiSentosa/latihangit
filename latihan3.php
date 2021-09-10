<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>
    <h1>Program Penggajian</h1>
    </legend>
<table>
<tr>
<td>
<label for="nama">
    Masukan Nama
 </label>
</td>
<td>
    :
</td>
<td>
    <input type="text" name="nama" id="nama" required>
</td>
</tr>
<tr>
<td>
    Masukan Jenis Kelamin
</td>
<td>
    :
</td>
<td>
<label for="l">
    <input type="radio" name="jk" id="l" value="Laki-laki" >
    Laki-laki
</label>

<label for="p">
    <input type="radio" name="jk" id="p" value="Perempuan" >
    Perempuan
</label>
    </td>
</tr>
<tr>
<td>
    Pilih agama
</td>
<td>
    :
</td>
<td>
    <select name="agama" required>
    <option value="">Pilih</option>
    <option value="islam">Islam</option>
    <option value="kristen">Kristen</option>
    <option value="katolik">Katolik</option>
    <option value="hindu">Hindu</option>
    <option value="budha">Budha</option>
    <option value="konghucu">Konghucu</option>
</select>
</td>
</tr>

<tr>
<td>
    Pilih Golongan
</td>
<td>
    :
</td>
<td>
    <select name="golongan" required>
    <option value="">Pilih</option>
    <option value="1">Golongan 1</option>
    <option value="2">Golongan 2</option>
    <option value="3">Golongan 3</option>
    <option value="4">Golongan 4</option>
</select>
</td>
</tr>
<tr>
    <td>
    <label for="jamkerja">
        Jam Kerja
    </label>
    </td>
    <td>
        :
    </td>
<td>
    <input type="number" name="jamKerja" id="jamkerja" value="173" min="173" required>
</td>
</tr>
    </table>
    <button type="submit" name="hitung">
         Hitung
    </button>
    </fieldset>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $agama = $_POST['agama'];
        $golongan = $_POST['golongan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $Lembur = 0;
        $Pajak = 0;
       
        $jamLembur = $jamKerja-173;
                
             $Lembur = $jamLembur*20000;
        
        if($golongan == 1){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }else if($golongan == 2){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }else if($golongan == 3){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else if($golongan == 4){
            $gajiPokok = 3000000;
            $tunjangan = 300000;
        }else{
            echo "Anda bukan golongan kami";
        }
        
        $pajakGajiPokok = $gajiPokok * 0.05;
        $pajakGajiLembur = $Lembur * 0.05;
            
        $totalPajak = $pajakGajiLembur+$pajakGajiPokok;
        
        $totalGaji = $gajiPokok+$Lembur+$tunjangan-$totalPajak;
   
        echo "<br>";
        
        echo "Nama : <b>$nama</b> <br>
        Jenis Kelamin : <b>$jk </b> <br>
        Agama : <b>$agama</b> <br>
        Gaji Pokok : <b>$gajiPokok</b> <br>
        Gaji Lembur : <b>$Lembur</b> <br>
        Pajak Gaji Pokok : <b>$pajakGajiPokok</b>  <br>
        Pajak Gaji Lembur : <b>$pajakGajiLembur</b> <br>
        Total Pajak : <b>$totalPajak</b> <br>
        Tunjangan Pengabdian: <b>$tunjangan</b> <br>
        Gaji Yang Diterima: <b>$totalGaji</b><br>";
    }
?>

