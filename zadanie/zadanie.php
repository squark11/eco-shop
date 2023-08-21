<?php
	/*$i = $_POST["i"];
	$b = $_POST["b"];
	$c = $_POST["c"];
	function dzielenie ($i, $b, $c) {
		$suma=0;
		FOR ($a=1; $a<=$i; $a++){
			if($a%$b==0){
				$suma += $a;
			}
			if ($a%$c==0) {
				$suma += $a;
			}
		}
		return $suma;
	}
	echo dzielenie($i, $b, $c);*/
	
	// $gwiazdka = 5;
	// for($i=1; $i<=$gwiazdka; $i++){
		// for($y=1; $y<=$gwiazdka; $y++){
			// echo '*';
		// }
		// echo '<br/>';
	// }
	
	
	
	
	
	
	
	
	
	
	
	
	
	// $gwiazdka = 7;
	// for($i=1; $i<=$gwiazdka; $i++){
		// for($y=$gwiazdka; 0<=$y; $y--){
			// if($i > $y){
				// echo "x";
			// }else{
				// echo "_";
			// }
		// }
		// echo '<br/>';}
		
		
		
		
		
		
		
		
		
		
	
		//$tablica = array(5,9,"tekst","klucznowy"=>6,8,4); //tablica czyli array
		 /*$ile = count($tablica);
		 FOR ($i=0; $i<$ile; $i++){
			 echo $tablica[$i];
		 }
		
		echo "<pre>";
		var_dump($tablica);
		
		
		
		echo "<br/><br/><br/><br/>";
		
		
		foreach($tablica as $key=>$value){
				echo "tablica -> $key ma wartość -> $value <br/>";
		}*/
		
		
		
		
		
		
		
		
		
		// $tablica[] = 101;
		
		// echo "<pre>";
		// var_dump($tablica);
		
		
		
		// FOR ($i=1; $i<=15; $i++){
			// if ($i%2 == 1){
				// $tab[] = $i;
			// }
		// }
		// echo "<pre>";
		// var_dump($tab);
		
		
		
		
		
		
		
		
		
		
		// $tablica = array(4,2,6,8,2,5,2,6,4);
		
		// function zamien($odbTablice){
				// foreach($odbTablice as $element)
				// if($element == 2){
					// $nowaTablica[] = "dwa";
				// }else{
					// $nowaTablica[] = $element;
				// }
			// return $nowaTablica;
		// }
		// $wartosc = zamien($tablica);
		// echo "<pre>";
		// var_dump($wartosc);
		
		
// $tablica = array(5,10,9,15,34,23,15,90,2);
		// function zamien($staraTablica){
			// $ile = 0;
			// $suma = 0;
			// foreach ($staraTablica as $key=>$value){
				// if(($value%5)==0){
					// $ile++;
					// $suma += $key;
				// }
			// }
			// $nowaTablica["ile"] = $ile;
			// $nowaTablica["suma"] = $suma;
			// return $nowaTablica;
		// }
		
	// $wartosc = zamien($tablica);
	
	// echo "<pre>";
	// var_dump($wartosc);
		
		// $tabWielowymiarowa = array( //tablica Wielowymiarowa
			// array(2,4,6,8,10), // składająca się z kolejnej tablicy, która jest elementem
			// array(1,3,5,7,9), // OO i jeszcze jednej tablicy
			// array(1,3,4,7,9),
			// array(1,3,3,7,9),
			// array(1,3,2,7,9)
		// );
		// // echo "<pre>";
		// // var_dump($tabWielowymiarowa);
		// // echo $tabWielowymiarowa[0] [4];
			// foreach($tabWielowymiarowa as $tabElement){ // Tutaj dzieli się główna tablica na te małe tablice w środku
				// //foreach($tabElement as $element){   //a te małe tablice są dzielone na wartości które się w niej znajdują
					// // echo $element." "; //a tu sobie wyświelam te wartośći 

				// // echo "<br>"; //a tu sobie robię tak żeby tablice były pod sobą 
				// echo $tabElement[2]." ";
				// }				
			
		 // $logowanie = array(
			// array("jan","squark","lucky","adam"),
			// array("12312","14114","22212","232323"),
			// array("jan@jan","squark@squark","lucky@lucky","adam@adam"),
		 // );
		 
		 
		 
		 
		 $login = $_POST["login"];
		 $haslo1 = $_POST["haslo1"];
		 $haslo2 = $_POST["haslo2"];
		 $email = $_POST["email"];
		
		 // function sprawdzanie($login, $haslo1, $haslo2, $email){
			// // pobierasz zawartosc z pliku
			// $dane = fread(fopen("dane.txt", "r"), filesize("dane.txt"));
			// $i=0;
			// $error = true;
			// $errorLogin = true;
			// $errorHaslo = true;
			// $komunikat = "Błędne pola: ";
			// if(($haslo1 !== $haslo2) or (strlen($haslo1)<5)){
				// $komunikat .= "Haslo, ";
				// $error = false;
			 // }else{
				 // $haslo = md5($haslo1);
				 // $tabMulti = explode("| ",$dane);
					// foreach($tabMulti as $item){
						
						// $newItem = explode(",",$item);
						// if($haslo!==$newItem[1]){
							// $errorHaslo = false;
							// break;
						// }	
					// }
			 // }
			
			 // //sprawdzasz czy jest w bazie
			// $tabMulti = explode("| ",$dane);
			
			
			// foreach($tabMulti as $item){
				
				// $newItem = explode(",",$item);
				
				// echo $newItem[0]."<br>";
				
				// if($login==$newItem[0]){
					// $errorLogin = false;
					// break;
				// }	
			// }
			
			
			
			// if($errorLogin==false){
				// $komunikat .= "user jest w bazie, ";
				// $error = false;
			// }
			// if($errorHaslo==false){
				// $komunikat .= "zle haslo ";
				// $error = false;
			// }
			
			 
			 // if(empty(filter_var($email, FILTER_VALIDATE_EMAIL))){
				// $komunikat .= "Email, ";
				// $error = false;
			 // }
			 
			 // if($error){
				// $komunikat = "Zarejestrujesz się spokojnie :D";
				// // dodaje usera do pliku txt 
			 // }
			 // $tabReturn[0] = $komunikat;
			 // $tabReturn[1] = $error;
			 
			 // return $tabReturn;
		 // }
			
			
			// $wynik = sprawdzanie ($login, $haslo1, $haslo2, $email);
			
			// if($wynik[1]){
				// //dodaj do pliku
			// }else{
				// echo $wynik[0];
			// }
			include_once('user.php');
			

			
		 ?>
	
	
	
	
	
	
	
	
	
	
	