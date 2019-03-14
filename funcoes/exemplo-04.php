<?php

  function ola(){

     $argumentos = func_get_args();      
       	
          return "Ola {$argumentos[0]} {$argumentos[1]}";  

  }


  var_dump(ola("Joao", "Bom dia"));

?>