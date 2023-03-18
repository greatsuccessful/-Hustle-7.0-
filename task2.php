<?php
//check for age
   $age=29;
   $PVC="true";
   $ward="020";

   if ($age <=13 && $PVC="true" && $ward=020) {
    echo "Voter not eligable to vote";
   }
   elseif ($age > 13 && $age < 19 && $PVC="true" && $ward=020) {
     echo "Voter not eligable to vote";
 }
   else {
    echo " Voter is eligable to vote ";
   }
?>
