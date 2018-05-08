<?php
/**
 * Return an array form of a string (split on full stop)
 * Since we want to change the arrays values ---> Notice the &$value
 * @param  string $string
 * @return array
 */
function explosion(&$value,$key){
  $value = explode('.',$value);
}
/**
 * Return an array form of a string (split on full stop - except the first part)
 * str_getcsv() can do this, if we used explode then it would split even the IP!
 * Since we want to change the arrays values ---> Notice the &$value
 * @param  string $string
 * @return array
 */
function getcsv_custom(&$value,$key){
    $value = str_getcsv($value,".");
}
/**
 * Return an array form of a string (split on full stop - except the first part)
 * str_getcsv() can do this, if we used explode then it would split even the IP!
 * Since we want to change the arrays values ---> Notice the &$value
 * We needed another function so that we can specify a different enclosure for the sake of the quotes
 * @param  string $value
 * @param  string $key
 * @return string
 */
function getcsv_custom2(&$value,$key){
    $value = str_getcsv($value,".","'");
}
/**
 * This function reorders the names from surname,second_name,first_name to first_name second_name surname
 * If an IP is passed, the first_name contains a link to it
 * @param  string] $name
 * @param  string $ip - optional
 * @param  bool $order2 - optional (Re-shuffles the name from the second arrangement - surname,second_name,first_name)
 * @return mixed
 */
function order_names($name,$ip=false,$order2 = false){
  //create an array of all three names
  //NB: First we need to replace the comma separating surname and other_name using str_replace()
  $name_array = explode(' ',str_replace(',',' ',$name));

  //surname,first_name second_name
  if( $order2 ):
    //remove the first element and save it in a variable
    $surname = array_shift($name_array);

    //add it to the end
    array_push($name_array,$surname);

    if( $ip ){
      //add url to the first_name,we can access it directly since it is the first element
      $first_name = "<a href='{$ip}' target='_blank'>{$name_array[0]}</a>";
      $name_array[0] = $first_name;
    }
    //convert the array into a space delimited string and surname
    //return both as an array
    return [implode(' ',$name_array),$surname];

  //surname,second_name,first_name
  else:

    //reverse the array
    $name_array_reversed = array_reverse($name_array);
    if( $ip  ):
      //add url to the first_name,we can access it directly since it is the first element
      $first_name = "<a href='http://{$ip}' target='_blank'>{$name_array_reversed[0]}</a>";
      $name_array_reversed[0] = $first_name;
    endif;
    //convert the array into a space delimited string
    return implode(' ',$name_array_reversed);

  endif;

}
/**
 * Returns a different number format e.g. +254 (0) 111 333 444
 * @param  string $number
 * @return string
 */
function modify_number($number){
  //get the part of the string after the first zero
  $num = substr($number,1,strlen($number));
  //chunk the number into groups of threes
  $num_chunked = chunk_split($num,3,' ');
  return ' (0) '.$num_chunked;
}
 ?>
