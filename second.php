<?php 

  $word = $_POST["word"];

  $paragraph = $_POST["paragraph"];
  
  echo $paragraph. "  " .strlen($paragraph);

  $str = str_replace("$word", "***", $paragraph);

  echo "<br> <br> <br> <br>" .$str. "  " .strlen($str);
?>