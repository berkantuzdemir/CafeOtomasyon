<?php
	try{
		$db=new PDO("mysql:host=localhost;dbname=kahve;charset=utf8",'root','');
		//echo "Veri tabanı bağlantısı başarılı";
	}
	catch(PDOExpception $e){
		echo $e -> getMessage();
	}	
?>