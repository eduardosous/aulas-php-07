<?php

  function ola($texto = "Mundo", $periodo = "Bom dia"){

      return "Olá {$texto} ${periodo}<br>";

  }


 echo ola("mundo");
 echo ola("","Boa noite");
 echo ola("Glaucio","Boa tarde");
 echo ola("Joao","");

?>