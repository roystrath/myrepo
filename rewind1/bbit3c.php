<?php
//some variables
//Take note of simple templating
$title = 'BBIT Three C';
require_once 'header.php';
?>
<body>
<h4 class="uline-wavy">
  <?= $title; ?> Quiz 1
</h4>
<?php
/*
  Consider the following string(bbit3c.txt)
  It constains names(surname,second_name,first_name),number,country and country code of some individuals

  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows

      a). first_name second_name,surname (# country_code(0) number[country])
      b). .......
      c). .......

    Summary
     -- Total names : total.
     -- Total unique countries : total(list of countries - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1)
 */

//add functions file
require_once 'functions.php';

#Create a new variable to hold the people string
$people_details = "Chirakahula,Mukwana Joe.0500387482.UGANDA.+256|
Wambua,Doe Mumbua.080023450.KENYA.+254|
Vonbora,Katherina Luther.0600990033.GERMANY.+32
|Boromir,Grommit Wallace.0100873901.IRELAND.+98
|Piepont,Edwards Jonathan.0200983729.AMERICA.+1
|Asaph,Elihu Mose.02990033.ISRAEL.+2
|Otoyo,Wafula Joel.0777799920.KENYA.+254
|Mapete,Mwambingu Simba.0987483292.TANZANIA.+257
|SARATON,DAVID BREINARD.043899292.AMERICA.+1
|POMPI,JOHN OWEN.074749292.ZAMBIA.+267
|MAG,JOHN BUNYAN.09837328.UGANDA.+256
|Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32
";

//split the people using the pipe (get each record)
$people_details_array = explode('|',$people_details);

#sweet function that runs a user defined function on every element of the array
#Here we just modify the array instead of creating another variable
array_walk($people_details_array,'explosion');
//start ordered list
echo '<ol type="a" >';
//counter for total names
$name_counter = 0;
//an array to store unique countries
$countries_array = [];
foreach($people_details_array as $key => $value){

    echo '<li>';

    foreach( $value as $key2 => $value2 ):
      //this are the names
      if( $key2 == 0 ):
        $name = order_names($value2);
      //this is the number
      elseif( $key2 == 1):
        $number = modify_number($value2);
      //this is the country
      elseif( $key2 == 2):
        $country = $value2;

        //store unique country in array - array_push adds a new element to an array
        //Note to store unique only - if it is not in the array, we add it
        //Notice if you have one statement only for the if you do not need to close/open with a curly brace.
        if( !in_array($country, $countries_array) ):
          array_push($countries_array, $country);
        endif;
      //this is the country_code
      elseif( $key2 == 3):
        //we print everything here since we only want one output :)
        echo $name."(# {$value2} {$number}[{$country}])";
      endif;
    endforeach;

    echo '</li>';

    //increment peoples counter
    $name_counter++;
}
?>
<!-- End ordered list -->
</ol>
<p class="uline">Summary</p>
<ul class="dashed">
  <!-- Notice the shorthand echo in PHP -->
  <li>Total names : <?= $name_counter; ?> names</li>
  <li>Total unique countries : <?= count($countries_array) .' ('.implode(',',$countries_array);?>)</li>
<ul>
</body>
</html>
