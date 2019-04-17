<?php
    $mydata = filter_var($HTTP_GET_VARS["mydata"], FILTER_SANITIZE_STRING);
    $rando = rand(5000, 6000);
    usleep($rando);
    echo htmlentities($rando);
?>