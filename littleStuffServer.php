<?php
  $mydata = $_REQUEST["mydata"];
  $rando = rand(144000, 1008000);
  usleep($rando);
  print "$rando";
?>