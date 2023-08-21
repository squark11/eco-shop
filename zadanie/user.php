<?php
	include_once('config.php');
	
	$loginForm =  $_POST["login"];
	$passForm = $_POST["haslo1"];
	$imie = $_POST["imie"];
	$email = $_POST["email"];
	
	$sql = "SELECT * FROM users WHERE login='$loginForm'"; //zapytanie do bazy czy taki użytkownik u takim loginie jest
	$result = mysqli_query($db, $sql); //odpowiedź z bazy
	
	$ile = $result->num_rows;
	if($ile){
		$wynik_mix = $result->fetch_array(); //jeden rekord
		if($wynik_mix[3]==$passForm){ //sprawdza czy hasło sie zgadza
			echo "zalogowałeś się piczo <br>";
		}else{
			echo "zle haslo <br>";
		}
	}else{
		echo "nie ma cie tu <br>";
	}
	
	
	$sql = "SELECT * FROM users WHERE login='$loginForm'"; //zapytanie do bazy 
	$result = mysqli_query($db, $sql); //odpowiedź z bazy
	
	$ile = $result->num_rows;
	if($ile){
		echo "taki użytkownik już jest, przykro nam";
	}else{
		$sql = "INSERT INTO `users` (`id`, `username`, `login`, `password`, `email`) VALUES (NULL, '$imie', '$loginForm', '$passForm', '$email');"; //dodaje do bazy
		IF(mysqli_query($db, $sql)){ //jeżeli true
				echo "dobra, dodamy cię, ale masz przynieść po dwa piwa!!";
			}else{ //jezlei false
				echo "nie ma piw, nie ma konta";
			}
	}
	
	
	
	// $wynik_asc = $result->fetch_assoc(); //przypisujemy tablice asocjacyjna czyli klucze ktore są słowami
	// $wynik_mix = $result->fetch_array(); //przypisujemy tablice asocjacyjna czyli klucze ktore są słowami i cyframi
	
	// echo "<pre>";
	// var_dump($wynik_asc);
	
	// echo "<br><pre>";
	// var_dump($wynik_mix);
	
	// while ($row = mysqli_fetch_array($result)){
		// echo $row[0]."<br>";
		// echo $row[1]."<br>";
		// echo $row[2]."<br>";
		// echo $row[3]."<br>";
		// echo $row[4]."<br>";
	// }
	
	
	
?>