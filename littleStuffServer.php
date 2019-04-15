<?php
    $mydata = filter_var($_GET['mydata'], FILTER_SANITIZE_STRING);
    $rando = rand(144000, 1008000);
    usleep($rando);
    echo "$rando";
?>