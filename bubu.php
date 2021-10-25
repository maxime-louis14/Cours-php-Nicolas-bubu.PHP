<?php
$Tableau = array(9, 8, 7, 6, 5, 4, 3, 2, 1,);
$comparesion = 0;
$memoire = 0;

echo "Avant:";
for($M = 0; $M < count($Tableau); $M++) {
  echo  $Tableau[$M].", ";
   
  for($J = $I+1; $J<count($Tableau); $J++) {
    $memoire += 4;
    $comparesion += 2;

    if($Tableau[$J] < $Tableau[$I]) {  

      $t = $Tableau[$J];
      $Tableau[$J] = $Tableau[$I];
      $memoire += 4;
      $Tableau[$J] = $t; 
    }
  }
}
 
echo "<br />Après:";

echo "comparesion : $comparesion";
echo "<br />";
echo "memoire : $memoire";

var_dump($Tableau);
?> 