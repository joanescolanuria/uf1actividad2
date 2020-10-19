<?php

function factorial( $value1){

$factorial = 1; 
for ($i = 1; $i <= $value1; $i++){ 
  $factorial = $factorial * $i; 

} 
return $factorial; 

}

function primo($value1){
    $primo=0;
    for($b = 1;$b < $value1; $b++){
        if($value1 % $b == 0){
  
            $primo++;
        }
    }
    if($primo >= 2 ){
        return "false";
    } else {
        return "true";
    }
 }


function suma($value1, $value2){
    
    $result = $value1 + $value2;
    return $result;
}


