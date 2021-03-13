<?php
$con=mysqli_connect("localhost","root","Kuleli172@","veri") or die("Hata");

$Ad=$_POST['Ad'];
$Soyad=$_POST['Soyad'];
$E_Posta=$_POST['E_Posta'];
$Parola=$_POST['Parola'];
$Dogum_Tarihi=$_POST['Dogum_Tarihi'];
$Cinsiyet=$_POST['Cinsiyet'];

$sql="INSERT INTO uyeislemleri(Ad,Soyad,E_Posta,Parola,Dogum_Tarihi,Cinsiyet) VALUES('$Ad','$Soyad','$E_Posta','$Parola','$Dogum_Tarihi','$Cinsiyet')";
$res=mysqli_query($con,$sql);

if ($res)
    echo "Bilgiler kaydedildi.";
else
    echo "Bilgiler kaydedilemedi.";
mysqli_close($con);

?>