<?php
//some variables
//Take note of simple templating
$title = 'BBIT Three A';
require_once 'header.php';
?>
<body>
<h4 class="uline-wavy">
  <?= $title; ?> Quiz 1
</h4>
<?php
/********************************************************************************************************************
  Consider the following string(bbit3a.txt)                                                                         *
  It constains names(IP address,surname,second_name,first_name),number,country and country code of some individuals *
                                                                                                                    *
  @Required                                                                                                         *
  1. Create a new branch from the develop branch called feature-rewind-13a                                          *
  2. Display the following data as follows (NB: first_name can be clicked to open the persons IP on a new tab)      *
                                                                                                                    *
      a). first_name second_name,surname (# country_code(0)number[country])                                         *
      b). .......                                                                                                   *
      c). .......                                                                                                   *
      (For example                                                                                                  *
        a) Mosiro Olesaningo Chirchir(# +254 (0) 760 387 482[KENYA])                                                *
      )                                                                                                             *
                                                                                                                    *
    Summary                                                                                                         *
     -- Total names : total.                                                                                        *
     -- Total unique countries : total(list of countries - comma separated)                                         *
  3. Commit changes of the new branch                                                                               *
  4. Merge changes with the development branch                                                                      *
  5. Push the changes to your repo.                                                                                 *
  6. Submit the github url on google classroom (Check Quiz 1 - 3A)                                                  *
 ********************************************************************************************************************/
 //add functions file
 require_once 'functions.php';

$people_details = '"66.249.72.240".Chirchir,Olesaningo Mosiro.0760387482.KENYA.+254_"192.168.170.25".Wambua,Doe Mumbua.080023450.KENYA.+254_
"113.193.241.186".Vonbora,Katherina Luther.0600990033.GERMANY.+32
_"197.176.231.200".Boromir,Grommit Wallace.0100873901.IRELAND.+98_"113.193.241.186".Faramir,Edwards Jonathan.0200983729.AMERICA.+1_"77.77.7.7".Asaph,Aslan King.02990033.ISRAEL.+2
_"172.53.14.2".Huan,Valinor Hound.02880023.SPAIN.+26_
"113.193.241.18".Otoyo,Wafula Joel.0777799920.KENYA.+254
_"173.190.141.16".Mapete,Mwambingu Simba.0987483292.TANZANIA.+257_
"153.193.241.186".SARATON,DAVID BREINARD.043899292.AMERICA.+1
_"103.153.211.186".Legolas,JOHN OWEN.074749292.ZAMBIA.+267_"123.19.201.186".Puddleglum,JOHN BUNYAN.09837328.UGANDA.+256_"163.193.241.156".Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32_"150.133.10.23".Beren,Luthien Lovi.028403323.SPAIN.+26
';

$people_details_array = explode('_',$people_details);

#sweet function that runs a user defined function on every element of the array
#Here we just modify the array instead of creating another variable
#Note that the callback specified is intended to take into consideration that we are not
#to modify the IP although it has the same delimeter as the other fields i.e dots
array_walk($people_details_array,'getcsv_custom');

//start ordered list
echo '<ol type="a" >';
//counter for total names
$name_counter = 0;
//an array to store unique countries
$countries_array = [];
foreach($people_details_array as $key => $value){

    echo '<li>';

    foreach( $value as $key2 => $value2 ):

      //this is the IP Address
      if( $key2 == 0 ):
        $ip = $value2;
      //this are the names
      elseif( $key2 == 1 ):
        $name = order_names($value2,$ip);
      //this is the number
      elseif( $key2 == 2):
        $number = modify_number($value2);
      //this is the country
      elseif( $key2 == 3):
        $country = $value2;

        //store unique country in array - array_push adds a new element to an array
        //Note to store unique only - if it is not in the array, we add it
        //Notice if you have one statement only for the if you do not need to close/open with a curly brace.
        if( !in_array($country, $countries_array) ):
          array_push($countries_array, $country);
        endif;
      //this is the country_code
      elseif( $key2 == 4):
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
