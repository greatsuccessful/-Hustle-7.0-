<?php
//check for age
   $age=20;
   $pvc="true";
   $ward=020;

   if ($age <=13 && $pvc && $ward) {
    echo "Voter not eligable to vote";
   }
   elseif ($age > 13 && $age < 19 && $pvc && $ward) {
     echo "Voter not eligable to vote";
 }
 elseif ($age >=20 && !$pvc && $ward) {
   echo "Voter not eligable to vote";
 }
 elseif ($age >=20 && !$ward && $pvc) {
  echo "Voter not eligable to vote";
 }
   else {
    echo " Voter is eligable to vote ";
   }
?>
