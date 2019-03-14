<?php

  session_id('fn7p0pd6v85livnr3lumrp2je4');

  require_once("config.php");

  session_regenerate_id();

  echo session_id();

  var_dump($_SESSION);

?>