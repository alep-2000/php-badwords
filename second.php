<?php 

  $word = $_POST["word"];

  $paragraph = $_POST["paragraph"];
  
  $startParagraph = $paragraph;
  $lenghtParagraph = strlen($paragraph);

  $str = str_replace("$word", "***", $paragraph);

  $censoredParagraph = $str;
  $lenghtCensored = strlen($censoredParagraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
    <h3><strong>Paragrafo iniziale</strong></h3>
    <p><?php echo $startParagraph ?></p>
    <div><strong>Lunghezza paragrafo:</strong> <?php echo $lenghtParagraph ?></div>
    <h3><strong>Paragrafo censurato</strong></h3>
    <p><?php echo $censoredParagraph ?></p>
    <div><strong>Lunghezza paragrafo:</strong> <?php echo $lenghtCensored ?></div>
</body>
</html>