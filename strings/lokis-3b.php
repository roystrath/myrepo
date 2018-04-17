<?php
/******************************************
* Print the following string on a newline *
* inplace of the spaces                   *
*  @example                               *
*  "Wambua dreamt of cows."               *
*  output                                 *
*  --- Wambua                             *
*  --- dreamt                             *
*  --- of                                 *
*  --- cows.                              *
******************************************/

$sentence = "Wambua dreamt of cows.";
$sentence3 = 'Kambua dreamt of goats.';
$sentence2 = 'Syombua dreamt of the shire.';

#Solution 1
//convert sentence to array
$sentence_array = explode(' ',$sentence1);
//iterate the array printing one at a time.
foreach($sentence_array as $word):
  echo $word.'<br/>';
endforeach;
//Solution 2 - [Jama / Philemon / Edwin]
for ($i=0; $i < sizeof($sentence_array) ; $i++) {
  # code...
  echo $sentence_array[$i]."<br/>";
}


echo '<br/>';
#Solution 3
echo preg_replace('/\s+/','<br/>',$sentence2);
echo '<br/>';
#Solution 4 - [Davis & Roy]
echo str_replace(' ','<br/>',$sentence3)
?>
