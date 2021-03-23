<?php
$con=mysqli_connect("sql113.epizy.com","epiz_28159435","1h7yc9fq","epiz_28159435_veri") or die("Hata");

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$email=$_POST['email'];
$parola=$_POST['parola'];


$sql="insert into uyeislemleri(ad,soyad,email,parola) values('$ad','$soyad','$email','$parola')";
$res=mysqli_query($con,$sql);

if ($res)
    echo header("Location:http://ahmetcekin.cf/VERI/login.html");
else
    echo "Bilgiler kaydedilemedi.";
mysqli_close($con);

?>