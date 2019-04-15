<?php
    $mydata = filter_var($_REQUEST['mydata'], FILTER_SANITIZE_STRING);
    $rando = rand(144000, 1008000);
    usleep($rando);
    echo "$rando";
?>