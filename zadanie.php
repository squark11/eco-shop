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
		
		$tabWielowymiarowa = array( //tablica Wielowymiarowa
			array(2,4,6,8,10), // składająca się z kolejnej tablicy, która jest elementem
			array(1,3,5,7,9), // OO i jeszcze jednej tablicy
			array(1,3,4,7,9),
			array(1,3,3,7,9),
			array(1,3,2,7,9)
		);
		// echo "<pre>";
		// var_dump($tabWielowymiarowa);
		// echo $tabWielowymiarowa[0] [4];
			foreach($tabWielowymiarowa as $tabElement){ // Tutaj dzieli się główna tablica na te małe tablice w środku
				//foreach($tabElement as $element){   //a te małe tablice są dzielone na wartości które się w niej znajdują
					// echo $element." "; //a tu sobie wyświelam te wartośći 

				// echo "<br>"; //a tu sobie robię tak żeby tablice były pod sobą 
				echo $tabElement[2]." ";
				}				
			
		?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	