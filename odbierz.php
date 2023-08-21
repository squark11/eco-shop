<?php
 	// echo 123456789;
	// echo "</br>To jest<strong> moj tekst </strong> </br>";
	// echo "Teskt numer dwa </br>";
	// echo 10+128;
	
	
	// $liczba=8;
	// $cyfra=10;
	// echo 1/2*($liczba*$cyfra);

	
	// $bok = $_POST["bok"];
	// $podstawa = $_POST["podstawa"];
	// $wysokosc = $_POST["wysokosc"];
	
	
	// IF(($bok>=0)AND($podstawa>=0)AND($wysokosc>=0)){
		// $wynik = 1/2*(($bok + $podstawa)*$wysokosc);
		// echo "Twoje pole wynosi: ".$wynik;
	// }else{
		// echo "Poucz sie lepiej..";
	// }
	
	
	
	// $cyfra = $_POST["cyfra"];
	// if($cyfra>0){
		// echo "liczba wiekasza od 0";
	// }else if($cyfra==0){
		// echo "liczba rowna 0";
	// }else{
		// echo "liczba mniejsza 0";
	// }
	
	
	
	// function pole ($a, $b){
		// $pole= $a*$a ;
		// echo "Twoje pole wynosi: $pole <br>";
	// }
	
	
	// pole(5,8);
	// pole(6,1);
	// pole(11,2);

	
	// $a = $_POST["a"];
	// $b = $_POST["b"];
	// $c = $_POST["c"];
	
	// function wieksza ($a, $b, $c){
		// if (($a>$b)AND($a>$c)){
			// echo "Najwieksza to : $a";
		// }else if (($b>$a)AND($b>$c)){
			// echo "Najwieksza to : $b";
		// }else{
			// echo "Najwieksza to : $c";
		// }
	// }
	
	// return wieksza($a, $b, $c)
	
	
	// function kwadrat ($a, $b){
		// $kwadrat = $a*$a;
		// if($kwadrat== $b){
			// $komunikat = "Prawda";
		// }else{
			// $komunikat = "Falsz";
		// }
		// return $komunikat;
	// }
	
	// echo kwadrat(2,4)
	
	
	
	
	// $a = $_POST["a"];
	// $b = $_POST["b"];
	// $c = $_POST["c"];
	// $d = $_POST["d"];
	
	// function srednia ($a, $b, $c, $d){
		// $srednia = ($a+$b+$c+$d)/4;
		// if($srednia >= 4.75){
			// $info = "wow super! Masz czerwony pasek, postarales sie <img src='pasek.jpg' alt='blad' /> ";
		// }else{
			// $info = "Oj! nie masz czerwonego paska. Jak mi przykro..  :'( ";
		// }
		// return $info;
	// }
	
	// echo srednia (6,6,6,4)
	
	// function czytnik ($pesel){
		// if(strlen($pesel) == 11){
			// $a = $rok = "Rok:".substr($pesel, 0, 2);
			// $a .= "<br>".$miesiac= "Miesiac:".substr($pesel, 2, 2);
			// $a .= "<br>".$dzien= "Dzien:".substr($pesel, 4, 2);
			// $a .= "<br>".$plec="Plec:".substr($pesel, 6, 4);
			// $a .= "<br>".$suma="Suma kontolna:".substr($pesel, 10, 1);
		// }else{
			// $a = "bledny numer pesel";
		// }
	 // return $a;
	// }
	
	// echo czytnik (98262521242);
	
	
	
	
	
	$a = 0;
	// function zmien(&odbierzK){
		// $odbierzA = 3;
		// return $odbierz;
	// }
	// echo zmien($a);
	
	$b = 6;
	// function zmien(&odbierzK){
		// $odbierzB = 5;
		// return $odbierz;
	// }
	// echo zmien($b);
	
	$c = 4;
	// function zmien(&odbierzK){
		// $odbierzC = 7;
		// return $odbierz;
	// }
	// echo zmien($c);
	
	// if (($a>$b)AND($a>$c)){
		// if ($b>$c){
			// echo $a.$b.$c;
		// }else{
			// echo $a.$c.$b;
		// }
	// }elseif(($b>$a)AND($b>$c)){
		// if ($a>$c){
			// echo $b.$a.$c;
		// }else{
			// echo $b.$c.$a;
		// }
	// }elseif(($c>$a)AND($c>$b)){
		// if ($b>$a){
			// echo $c.$b.$a;
		// }else{
			// echo $c.$a.$b;
		// }
	// }
	
	
	
	function zamien($a,$b){
		$c=$a;
		$a=$b;
		$b=$c;
		
	}
	
	if ($a > $b){
		zamien($a,$b);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
?>