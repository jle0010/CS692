<?php
  $mydata = filter_var($HTTP_GET_VARS["mydata"], FILTER_SANITIZE_STRING);
  $rando = rand(500, 6000);
  usleep($rando);
  //echo "$rando";
  //echo htmlspecialchars($rando, ENT_COMPAT, 'UTF-8', FILTER_SANITIZE_STRING);
  echo esc_html($rando, FILTER_SANITIZE_STRING);
  //esc_html_e("$rando");
?>
