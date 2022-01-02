
<?php
//$_SERVER['HTTP_REFERER']
header('Location:giris.php '  );
$eposta = $_POST['eposta'];
$isim = $_POST['isim'];
$soyisim = $_POST['soyisim'];
$tel_no= $_POST['tel_no'];
$sifre = $_POST['sifre'];
echo $eposta;
echo $isim;
echo $soyisim;
echo $tel_no;
echo $sifre;


// Create connection
$conn = mysqli_connect("localhost", "root", "", "otogar");
mysqli_set_charset($conn,"utf8");
$kullaniciekle="INSERT INTO kullanici(eposta,sifre) 
VALUES ('$eposta','$sifre')";
$sonuc=mysqli_query($conn,$kullaniciekle);
if ($sonuc==0)
     echo "Eklenemedi, kontrol ediniz";
else
     echo "Başarıyla eklendi";
$sqlekle="INSERT INTO kayit(eposta, isim, soyisim, tel_no, sifre) 
VALUES ('$eposta','$isim','$soyisim','$tel_no','$sifre')";
$sonuc=mysqli_query($conn,$sqlekle);
if ($sonuc==0)
     echo "Eklenemedi, kontrol ediniz";
else
     echo "Başarıyla eklendi";



// Check connection
/*if (!$conn) {
    die("Connection failed: " . 
mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);*/
   
?>  