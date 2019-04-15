<?php
    if ( isset( $_REQUEST['mydata'] ) ) {
        $mydata = ( $_REQUEST['mydata'] );
    }
  $mydata = $_REQUEST["mydata"];
  $rando = rand(144000, 1008000);
  usleep($rando);
  echo "$rando";
?>