<link href="iso.css" rel="stylesheet" type="text/css"/>
<?php
$ebits = ini_get('error_reporting');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


	$brojac=0;
	$sum = 0;
	$polje = array();
	
	$k5s = 0;
	$k5b = 0;
	$k6s = 0;
	$k6b = 0;
	$k7s = 0;
	$k7b = 0;
	$k8s = 0;
	$k8b = 0;	
	$k9s = 0;
	$k9b = 0;
	$k10s = 0;
	$k10b = 0;
	$k11s = 0;
	$k11b = 0;
	$k12s = 0;
	$k12b = 0;	
	$k13s = 0;
	$k13b = 0;
	$k14s = 0;
	$k14b = 0;
	$k15s = 0;
	$k15b = 0;

	for($i = 0; $i <= 846; $i++){
	$polje[$i] = $_POST[$i];
	if($polje[$i] != ""){ $brojac++; }
	$sum += $polje[$i];
	if($i <= 19){
	$k5s += $polje[$i];
	if($polje[$i] != ""){ $k5b++; }
	}
	if($i >= 20 && $i <= 111){
	$k6s += $polje[$i];
	if($polje[$i] != ""){ $k6b++; }
	}
	if($i >= 112 && $i <= 128){
	$k7s += $polje[$i];
	if($polje[$i] != ""){ $k7b++; }
	}
	if($i >= 129 && $i <= 173){
	$k8s += $polje[$i];
	if($polje[$i] != ""){ $k8b++; }
	}
	if($i >= 174 && $i <= 249){
	$k9s += $polje[$i];
	if($polje[$i] != ""){ $k9b++; }
	}
	if($i >= 250 && $i <= 480){
	$k10s += $polje[$i];
	if($polje[$i] != ""){ $k10b++; }
	}
	if($i >= 481 && $i <= 647){
	$k11s += $polje[$i];
	if($polje[$i] != ""){ $k11b++; }
	}
	if($i >= 648 && $i <= 733){
	$k12s += $polje[$i];
	if($polje[$i] != ""){ $k12b++; }
	}
	if($i >= 734 && $i <= 752){
	$k13s += $polje[$i];
	if($polje[$i] != ""){ $k13b++; }
	}
	if($i >= 753 && $i <= 792){
	$k14s += $polje[$i];
	if($polje[$i] != ""){ $k14b++; }
	}
	if($i >= 793 && $i <= 846){
	$k15s += $polje[$i];
	if($polje[$i] != ""){ $k15b++; }
	}
	}

	
//echo" $polje[1] <br>";
//echo" $k5 <br>";
//echo" $brojac <br>";


$rez =  $sum /$brojac;

echo "<h2>Ukupna procjena sukladnosti iznosi: <h2>".round($rez, 2)."%"."<br><br>";
echo"<table id='druga'>";
echo "<tr><td align='center' colspan=2>Procjena po klasama </td></tr>";
//echo"<div class='rezultat' align='left'>";
echo "<tr><td width=500 align='left'>5. Politika sigurnosti </td><td width=100 align='center'>".round($k5s/$k5b, 2)."%</td></tr>";
echo "<tr><td>6. Organizacija informacijske sigurnosti </td><td align='center'>".round($k6s/$k6b, 2)."%</td></tr>";
echo "<tr><td>7. Upravljanje imovinom </td><td align='center'>".round($k7s/$k7b, 2)."%</td></tr>";
echo "<tr><td>8. Sigurnost ljudskog potencijala </td><td align='center'>".round($k8s/$k8b, 2)."%</td></tr>";
echo "<tr><td>9. Fizička sigurnost i sigurnost okruženja </td><td align='center'>".round($k9s/$k9b, 2)."%</td></tr>";
echo "<tr><td>10. Upravljanje komunikacijama i operacijama </td><td align='center'>".round($k10s/$k10b, 2)."%</td></tr>";
echo "<tr><td>11. Kontrola pristupa </td><td align='center'>".round($k11s/$k11b, 2)."%</td></tr>";
echo "<tr><td>12. Nabava, razvoj i održavanje informacijskih sustava </td><td align='center'>".round($k12s/$k12b, 2)."%</td></tr>";
echo "<tr><td>13. Upravljanje sigurnosnim incidentom </td><td align='center'>".round($k13s/$k13b, 2)."%</td></tr>";
echo "<tr><td>14. Upravljanje kontinuitetom poslovanja </td><td align='center'>".round($k14s/$k14b, 2)."%</td></tr>";
echo "<tr><td>15. Sukladnost </td><td align='center'>".round($k15s/$k15b, 2)."%</td></tr>";
//echo"</div>";
echo "</table>";		 


//echo"$rez";

?>
