<?php 

try{
	$db=new PDO("mysql:host=185.169.55.124;dbname=eticaret;charset=utf8",'berat','852456Berat!');
	//echo "baglantı başarılı";
 }
 catch(PDOException $e){
 	echo $e->getMessage();
 }
 
 ?>

