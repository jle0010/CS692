<?php
    $mydata = filter_var($HTTP_GET_VARS['mydata'], FILTER_SANITIZE_STRING);
    $rando = rand(144000, 1008000);
    usleep($rando);
    echo intval($rando);
?>