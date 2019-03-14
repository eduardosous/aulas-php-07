<?php

 $nome = "Glaucio";

 function teste(){

     global $nome;
     echo $nome;

 }

 function teste2(){

   $frutas = array("laranja","banana","manga");
   
   foreach ($frutas as $key => $value) {
   	 if($key == 0)
   	 	print $value;
   }

 }

//teste(); 

teste2();

?>