<?php
ob_start();

$UserName=$_POST['UserName'];
$SurName=$_POST['SurName'];
$Email=$_POST['Email'];
$Password=md5($_POST['Password']);
$RePassword=md5($_POST['RePassword']);

$sunucu="localhost";
$user="root";
$sifre="root";
$veritabani="users";

$baglanti=new mysqli($sunucu,$user,$sifre,$veritabani);

if($baglanti->connect_error){
	die("Hata: ".$baglanti->connect_error);
}

$sql="INSERT INTO register(Ad,Soyad,Email,Sifre,SifreTekrar) values ('$UserName','SurName','Email','Password','RePassword')";

if($baglanti->query($sql)===TRUE){
	echo "kayıt başarılı!";
}
else{
	echo "kayıt başarısız:".$baglanti->connect_error;
}
$baglanti->close();







?>