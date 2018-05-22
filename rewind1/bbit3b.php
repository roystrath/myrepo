<<<<<<< HEAD
<?php
<<<<<<< HEAD
/*
  Consider the following string(bbit3b.txt)
  It contains a quote,the author(surname,first_name second_name),date and the url_reference
  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows (NB: The author's  first_name can be clicked to open the url_reference on a new tab)

      (a). "Quote" - first_name second_name,surname (YEAR).
      (b). .......
      (c). .......
      (For example                                                                                                  *
        a) "The worth and excellency of a soul is to be measured by the object of its love." -  HENRY P,SCOUGAL (1678).                                      *
      )
    Summary
     -- Total quotes : total.
     -- Total unique authors : total(list of author surnames - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1 3B)
 */




=======
>>>>>>> e5a588c5afc82747eadb975a4d3b8c80d1af6363

 <?php
/*
  Consider the following string(bbit3b.txt)
  It contains a quote,the author(surname,first_name second_name),date and the url_reference
  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows (NB: The author's  first_name can be clicked to open the url_reference on a new tab)

      (a). "Quote" - first_name second_name,surname (YEAR).
      (b). .......
      (c). .......
      (For example                                                                                                  *
        a) "The worth and excellency of a soul is to be measured by the object of its love." -  HENRY P,SCOUGAL (1678).                                      *
      )
    Summary
     -- Total quotes : total.
     -- Total unique authors : total(list of author surnames - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1 3B)
 */

$raw = "'Joy is the serious business of heaven.'.LEWIS,CLIVE STAPLES.1964-01-01.https://bit.ly/2HwPJd6
|'We were not meant to be somebody--we were meant to know Somebody'.PIPER,JOHN STEPHEN.2011-07-17.https://bit.ly/2r31InJ|'He who sings prays twice.'.Hipponensis,Aurelius Augustinus.430-02-30.https://bit.ly/2JwSHuH
|'The task of the modern educator is not to cut down jungles but to irrigate deserts.'.LEWIS,CLIVE STAPLES.1943-09-23.https://bit.ly/2HwPJd6
|'There is not one blade of grass, there is no color in this world that is not intended to make us rejoice.'.Calvin,John C.1530-10-09.https://www.brainyquote.com/authors/john_calvin|
'The worth and excellency of a soul is to be measured by the object of its love.'.SCOUGAL,HENRY P.1678-08-23.https://bit.ly/2Kh1VMR
|'It is not the strength of your faith but the object of your faith that actually saves you.'.KELLER,TIMOTHY J.2013-01-14.https://bit.ly/2I0WocO
|'Truth is the agreement of our ideas with the ideas of God.'.Edwards,Jonathan Prtn.1703-09-23.https://bit.ly/2HSMz2U
|'Each day we are becoming a creature of splendid glory or one of unthinkable horror.'.LEWIS,CLIVE STAPLES.1952-02-01.https://bit.ly/2HwPJd6|'At your right hand are pleasures evermore..'.David,Jesse soun.1200-09-29.https://www.google.com|'Tolerance is not about not having beliefs. It is about how your beliefs lead you to treat people who disagree with you.'.KELLER,TIMOTHY J.2015-10-23.https://bit.ly/2I0WocO
|'It is better to lose your life than to waste it.'.PIPER,JOHN STEPHEN.2000-05-33.https://bit.ly/2r31InJ|
'It is not opinions that man needs: it is TRUTH...'.Bonar Horatius B.1885-02-12.https://www.goodreads.com/author/quotes/133605.Horatius_Bonar|
'Nothing could be more irrational than the idea that something comes from nothing.'SPROUL,CHARLES ROBERT.2006-03-23.https://bit.ly/2HQ4TJV
|'He is no fool who gives what he cannot keep to gain that which he cannot lose.'.Elliot,James Phillip.1944-07-26.https://www.brainyquote.com/authors/jim_elliot
";

$data = array("quote" => "It is better to lose your life than to waste it.",
              "name" => "JOHN STEPHEN", "lastname" => "PIPER",
              "date" => "2000-05-33", "url" => "URL link");

function print_formatted_line($data) {
  printf("'%s' - <a href='%s' target='_blank'>%s</a>, %s (%s)<br>",
    $data["quote"], $data["url"], $data["name"], $data["lastname"], date('Y', strtotime($data["date"])));
}


$iterData = explode('|', $raw, -1); // divide data by delim parametar "|"
$output = array(); // array to save the formatted data in

foreach($iterData as $key) {
  $quote_rest = explode("'.", $key, 2);  // divide one string into strings [0] => quote, [1] => other data
  $lastname_rest = explode(",",  $quote_rest[1], 2); // divide "[1] => other data" to array "[0] => lastname, [1] => name.date.url"
  $name_date_url = explode(".",  $lastname_rest[1], 3); // finally, extract data from [1] => name.date.url to

  // create array of extracted data
  $data = array("quote" => substr($quote_rest[0], 1),
                "name" => $name_date_url[0],
                "lastname" => $lastname_rest[0],
                "date" => $name_date_url[1],
                "url" => $name_date_url[2]);
  // insert data to output array
  array_push($output, $data);

  // print data
  print_formatted_line($data); // pass data to output function
}





 ?>
=======
//some variables
//Take note of simple templating
$title = 'BBIT Three B';
require_once 'header.php';
?>
<body>
<h4 class="uline-wavy">
  <?= $title; ?> Quiz 1
</h4>

<?php
/***************************************************************************************************************************************************************
  Consider the following string(bbit3b.txt)                                                                                                                    *
  It contains a quote,the author(surname,first_name second_name),date and the url_reference                                                                    *
  @Required                                                                                                                                                    *
  1. Create a new branch from the develop branch called feature-rewind-1                                                                                       *
  2. Display the following data as follows (NB: The author's  first_name can be clicked to open the url_reference on a new tab)                                *
                                                                                                                                                               *
      (a). "Quote" - first_name second_name,surname (YEAR).                                                                                                    *
      (b). .......                                                                                                                                             *
      (c). .......                                                                                                                                             *
      (For example                                                                                                  *                                          *
        a) "The worth and excellency of a soul is to be measured by the object of its love." -  HENRY P,SCOUGAL (1678).                                      * *
      )                                                                                                                                                        *
    Summary                                                                                                                                                    *
     -- Total quotes : total.                                                                                                                                  *
     -- Total unique authors : total(list of author surnames - comma separated)                                                                                *
  3. Commit changes of the new branch                                                                                                                          *
  4. Merge changes with the development branch                                                                                                                 *
  5. Push the changes to your repo.                                                                                                                            *
  6. Submit the github url on google classroom (Check Quiz 1 3B)                                                                                               *
 ***************************************************************************************************************************************************************/

 //add functions file
 require_once 'functions.php';

 $quotes = "'Joy is the serious business of heaven.'.LEWIS,CLIVE STAPLES.1964-01-01.https://bit.ly/2HwPJd6
 |'We were not meant to be somebody--we were meant to know Somebody'.PIPER,JOHN STEPHEN.2011-07-17.https://bit.ly/2r31InJ|'He who sings prays twice.'.Hipponensis,Aurelius Augustinus.430-02-30.https://bit.ly/2JwSHuH
 |'The task of the modern educator is not to cut down jungles but to irrigate deserts.'.LEWIS,CLIVE STAPLES.1943-09-23.https://bit.ly/2HwPJd6
 |'There is not one blade of grass, there is no color in this world that is not intended to make us rejoice.'.Calvin,John C.1530-10-09.https://www.brainyquote.com/authors/john_calvin|
 'The worth and excellency of a soul is to be measured by the object of its love.'.SCOUGAL,HENRY P.1678-08-23.https://bit.ly/2Kh1VMR
 |'It is not the strength of your faith but the object of your faith that actually saves you.'.KELLER,TIMOTHY J.2013-01-14.https://bit.ly/2I0WocO
 |'Truth is the agreement of our ideas with the ideas of God.'.Edwards,Jonathan Prtn.1703-09-23.https://bit.ly/2HSMz2U
 |'Each day we are becoming a creature of splendid glory or one of unthinkable horror.'.LEWIS,CLIVE STAPLES.1952-02-01.https://bit.ly/2HwPJd6|'At your right hand are pleasures evermore..'.David,Jesse soun.1200-09-29.https://www.google.com|'Tolerance is not about not having beliefs. It is about how your beliefs lead you to treat people who disagree with you.'.KELLER,TIMOTHY J.2015-10-23.https://bit.ly/2I0WocO
 |'It is better to lose your life than to waste it.'.PIPER,JOHN STEPHEN.2000-05-33.https://bit.ly/2r31InJ|
 'It is not opinions that man needs: it is TRUTH...'.Bonar Horatius B.1885-02-12.https://www.goodreads.com/author/quotes/133605.Horatius_Bonar|
 'Nothing could be more irrational than the idea that something comes from nothing.'.SPROUL,CHARLES ROBERT.2006-03-23.https://bit.ly/2HQ4TJV
 |'He is no fool who gives what he cannot keep to gain that which he cannot lose.'.Elliot,James Phillip.1944-07-26.https://www.brainyquote.com/authors/jim_elliot
";
  //get the individual quotes first - split by |
  $quotes_array = explode('|',$quotes);

  #sweet function that runs a user defined function on every element of the array
  #Here we just modify the array instead of creating another variable
  #Note that the callback specified is intended to take into consideration that we are not
  #to modify the  although it has the same delimeter as the other fields i.e dots
  array_walk($quotes_array,'getcsv_custom2');

  //start ordered list
  echo '<ol type="a" >';
  //counter for total quotes
  $quotes_counter = 0;
  //an array to store unique authors
  $authors_array = [];

  foreach($quotes_array as $key => $value){

      echo '<li>';
      //remove the url chunks and create another array.
      $url_pieces = array_splice($value, 3);
      //combine the chunks into a string
      $url_string = implode('.',$url_pieces);

      foreach( $value as $key2 => $value2 ):

        //this is the Quote
        if( $key2 == 0 ):
          $quote = $value2;
        //this are the names
        elseif( $key2 == 1 ):
          $nm_return = order_names($value2,$url_string,true);
          $name = $nm_return[0];
          $surname = $nm_return[1];
          //populate authors array
          if( !in_array($surname, $authors_array) ):
            array_push($authors_array, $surname);
          endif;
        //this is the date
        elseif( $key2 == 2):
          $quote_year = date('Y',strtotime($value2));
          //we print everything here since we only want one output :)
          echo "<span class='quotes_galore'>\"{$quote}\"</span> - ".$name." ({$quote_year}).";
        endif;
      endforeach;

      echo '</li>';

      //increment quotes counter
      $quotes_counter++;
  }
?>
<!-- End ordered list -->
</ol>
<p class="uline">Summary</p>
<ul class="dashed">
  <!-- Notice the shorthand echo in PHP -->
  <li>Total names : <?= $quotes_counter; ?> quotes</li>
  <li>Total unique authors : <?= count($authors_array) .' ('.implode(',',$authors_array);?>)</li>
<ul>
</body>
</html>
>>>>>>> e4ee2ac230d24ca2463437175aa576f44fef1e01
