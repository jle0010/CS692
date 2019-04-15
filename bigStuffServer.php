<?php
  $mydata = filter_var($_GET["mydata"], FILTER_SANITIZE_STRING);
  $rando = rand(500, 6000);
  usleep($rando);
  echo "$rando";
?>