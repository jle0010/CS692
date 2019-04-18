<?php
    $mydata = filter_var(INPUT_GET["mydata"], FILTER_SANITIZE_STRING);
    $rando = rand(5000, 6000);
    usleep($rando);
    echo intval($rando);
?>