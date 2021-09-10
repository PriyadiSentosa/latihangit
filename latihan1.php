<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <fieldset>
            <legend>Perpangkatan</legend>
            <form action="" method="post">
                <tr>
                    <td>Masukan Bilangan</td>
                    <td>  : </td>
                    <input type="text" name="bil">
                </tr><br>
                <tr>
                    <td>Masukan pangkat</td>
                    <td>   : </td>
                    <input type="text" name="pangkat">
                </tr><br>
                <tr>
                    <td><button type="submit" name="input">Submit</button></td>
                </tr>
            </form>
        </fieldset>
</body>
</html>

<?php
if (isset($_POST['input'])){
    $bil = $_POST['bil'];
    $pangkat=$_POST['pangkat'];

    function perpangkatan($bil,$pangkat){
    if($pangkat > 1){
        return $bil * perpangkatan($bil, $pangkat - 1);

    } else{
        return $bil;
    }
    
    } 
    function pangkatnya($bil,$pangkat) {
        for($i = 1; $i <= $pangkat; $i++){
            echo $bil;
            if($i < $pangkat){
                echo " x ";
            }
        }
    }
    

}
echo "Hasil dari perkalian<br>";
echo Pangkatnya($bil,$pangkat);
$hasil = perpangkatan($bil, $pangkat);
echo " = " .$hasil;

?>