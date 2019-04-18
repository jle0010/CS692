<?php
    $mydata = filter_input(INPUT_GET, "mydata", FILTER_SANITIZE_STRING);
    $rando = rand(144000, 1008000);
    usleep($rando);
    echo intval($rando);
?>