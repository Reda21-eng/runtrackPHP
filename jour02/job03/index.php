<?php
 for($i = 0; $i<=100; $i++){
    
    if ($i>=0 and $i<=20) {
        echo '<br><i>'.$i. '</br></i>';
    }

    elseif ($i>=25 and $i<=50){
        echo '<br><u>'. $i. '</br></u>';
    
    }

    elseif ($i === 42){
        $i = "La Plateforme";
        echo '<br>'.$i.'</br>';
    
    }

    else {
        echo '<br>'.$i.'</br>';
    }
    

 }
    
 
?>