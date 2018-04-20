<?php
/*
*print the following string on a new line
*inplace of th spaces
*@example
*wambua dreamt of cows
*output
* --wambua
* --dreamt
* --of
* --cows
*/

$sentence = "Wambua dreamt of cows.";
$breaker = " ";
function breakspace($sentence, $breaker){
  $sentence_array = explode($breaker,$sentence);
  foreach ($sentence_array as $word) {
    echo $word."</br>";
  }
}

breakspace($sentence, $breaker);

?>
