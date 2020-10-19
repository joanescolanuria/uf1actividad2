<?php

include('funciones.php'); // incluimos la archivo en el que hemos hecho nosotros de nuestras funciones

$value1;
$opc;

if (($value1=filter_input(INPUT_POST, "num1")) &&
    ($opc=filter_input(INPUT_POST,"operaciones"))!=null){                 
switch ($opc){

  case "factorial":
            echo  factorial($value1);        
  break;
  
  case "primo":
    echo primo($value1);
  break;

}
}
if (($value1=filter_input(INPUT_POST, "num1")) &&
    ($value2=filter_input(INPUT_POST, "num2")) &&
    ($opc=filter_input(INPUT_POST,"operaciones"))!=null){    
      echo suma($value1, $value2);
    }