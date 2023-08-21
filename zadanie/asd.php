<?php
session_start();
$zalogowany = $_session['user'];

if($zalogowany){
	echo "Jesteś zalogowany jako - $zalogowany";
	echo "<a href='logout.php'>wyloguj mnie</a>";
}else{
	echo "Nie jestes zalogowany / <a href='logowanie.php'>ZALOGUJ SIĘ SKURCZYBYKU</a>";
}

?>