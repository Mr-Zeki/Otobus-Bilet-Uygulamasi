
<?php
session_start();
//$_SERVER['HTTP_REFERER']

$eposta = $_POST['eposta'];
$sifre = $_POST['sifre'];

// Create connection
$conn = mysqli_connect("localhost", "root", "", "otogar");
mysqli_set_charset($conn,"utf8");
$sqlkontrol = "SELECT eposta,sifre FROM kullanici WHERE eposta='$eposta' and sifre='$sifre'";
$sql = "SELECT * FROM kayit where 1";
$query = $conn->query($sql);


$result = $conn->query($sqlkontrol);
if ($result->num_rows > 0){
     echo mysqli_fetch_row($result)[0];
     
     if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){
               $_SESSION["isim"] = $row["isim"];
               $_SESSION["soyisim"] = $row["soyisim"];
               $_SESSION["tel"] = $row["tel_no"];
               $_SESSION["eposta"] = $row["eposta"];
          }

     }
     header('Location:firmasec.html '  );
}
else{
     header('Location:giris.php '  );

}




// Check connection
/*if (!$conn) {
    die("Connection failed: " . 
mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);*/
   
?>  