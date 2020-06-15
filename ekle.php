<?php

$UserName=$_POST['UserName'];
$SurName=$_POST['SurName'];
$Email=$_POST['Email'];
$Password=md5($_POST['Password']);
$RePassword=md5($_POST['RePassword']);

$sunucu="localhost";
$user="root";
$sifre="root";
$veritabani="users";

$baglan=new mysqli($sunucu,$user,$sifre,$veritabani);

if($baglan->connect_error){
	die("Hata: ".$baglan->connect_error);
}

$sql="INSERT INTO Register(Ad,Soyad,Email,Sifre,SifreTekrar) values ('$UserName','SurName','Email','Password','RePassword')";

if($baglan->query($sql)===TRUE){
	echo "kayıt başarılı!";
}
else{
	echo "kayıt başarısız:".$baglan->connect_error;
}
$baglan->close();







?>