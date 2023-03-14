<?php
//check for age
   $age=2;

   if ($age <=13) {
    echo "Voter not eligable to vote";
   }
   elseif ($age > 13 && $age < 19) {
     echo "Voter not eligable to vote";
 }
   else {
    echo " Voter is eligable to vote ";
   }
?>
