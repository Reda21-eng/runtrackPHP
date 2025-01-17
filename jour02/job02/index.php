<?php
$exclude_numbers = [26,37,88,11];

for ($i = 1 ; $i <= 1337 ; $i++){
   if ($i == $exclude_numbers){
   
    unset($exclude_numbers[$i]);
 }
 
 else {
    echo"<br>$i<br\>";
 };
}
?>


   
   
