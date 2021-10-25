<?php
$Tableau = array(9, 8, 7, 6, 5, 4, 3, 2, 1,);
$comparesion = 0;
$memoire = 0;

echo "Avant:";
for($M = 0; $M < count($Tableau); $M++) {
 echo  $Tableau[$M].", ";
 $comparesion++;
 $memoire++;	
}
 
for($I = count($Tableau) - 2;$I >= 0; $I--) {
	$comparesion++;
	$memoire++;	
 for($J = 0; $J <= $I; $J++) {
  if($Tableau[$J + 1] < $Tableau[$J]) {  
   $t = $Tableau[$J + 1];
   $Tableau[$J + 1] = $Tableau[$J];
   $Tableau[$J] = $t;
   $comparesion++;
   $memoire++;	
  }
 }
}
 
echo "<br />Après:";
for($L = 0; $L < count($Tableau); $L++) {
  echo $Tableau[$L].", ";
  $comparesion++;
  $memoire++;	
}

echo "comparesion : $comparesion";
echo "<br />";
echo "memoire : $memoire";

?>