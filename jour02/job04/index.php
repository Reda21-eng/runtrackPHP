<?php
 
 for ($i=1; $i<=100; $i++){

    if ($i % 3 == 0 and $i %5 == 0){
        
        echo '<br>' . "FizzBuzz" .'</br>';
   }

    elseif ($i % 3 == 0){
       
        echo '<br>' .'Fizz'.'</br>';
   }

    elseif ($i % 5== 0){
        
        echo '<br>'.'Buzz'.'</br>';
   }

    else {
        
        echo '<br>'.$i.'</br>';
   
   }

}

?>

