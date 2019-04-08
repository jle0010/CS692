<?php
  $mydata = $_REQUEST["mydata"];
  $rando = rand(500, 6000);
  usleep($rando);
  print "$rando";
?>