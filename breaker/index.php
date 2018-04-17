<?php
//Make use of stackoverflow.com
//Make use of git - nvie branching model Ref: http://nvie.com/posts/a-successful-git-branching-model/
//Recagp of distinction between server-side and client-side languages

//set current datetimezone to Africa/Nairobi
//You should do this in php.ini - Search for date.timezone and replace accordingly
date_default_timezone_set("Africa/Nairobi");
ini_set('display_errors','1');

/**
* A function that attempts to open a browser tab ;)
* You'll learn quite a bit of things about what PHP can and can't do alone
* Give it a shot!
  //loopsy loops
*/
function breaker($url,$homedate,$wait_time){
  //convert to time
  $hometime =  strtotime($homedate);//Seconds

  echo '<div>Scheduled breaktime every <b>'.$wait_time.' seconds!</b></div>';
  echo '<br/><p></p><div style="font-size:24px;" id="timer"></div>';

  //loopsy loops
  //This is where we stop using PHP - and call out Javascript guns :)

  /*
    Why??? PHP is a server side language - remember?
    You cannot control this from server-side code.
    You would have to issue some javascript to the client,
    and have that JS code open the window/tab and point that window/tab at the URL which provides your data.
    Of course, you can just output the full page contents for this JS code to stuff into the window as well.
    But regardless, you cannot make the browser open a window directly from the server.
    At most you can suggest via some JS, or a target="..." attribute on a link or form.
    Ref : https://stackoverflow.com/questions/7517100/open-browser-tab-in-php
  */
  echo '
  <script>

    var breaker_interval = setInterval(countTimer, 1000);
    var totalSeconds = 0;

    function countTimer() {
       ++totalSeconds;

       var hour = Math.floor(totalSeconds /3600);
       var minute = Math.floor((totalSeconds - hour*3600)/60);
       var seconds = totalSeconds - (hour*3600 + minute*60);

       var now_time = parseInt( (new Date().getTime() / 1000) );
       var home_time = '.$hometime.';
       var diff_time = home_time - now_time;

       if(totalSeconds % '.$wait_time.' === 0 ){
          window.open( "'.$url.'", "_blank");
       }
       console.log(diff_time);

       if( diff_time <= 0 ){
         clearInterval(breaker_interval);
         document.getElementById("timer").innerHTML ="HOME TIME!!";
       }else{
         document.getElementById("timer").innerHTML = hour + ":" + minute + ":" + seconds;
       }
     }
  </script>
  ';
  }

  $url = "https://www.youtube.com/watch?v=gxSx3h9GKgo";#Kwata kawaya - kasolo's favourite :)

  //Let's assume that Kasolo works until 5pm - we will utilise this to stop the script
  $homedate = date("Y-m-d") . ' 13:21';

  //how long until the next interrupt?
  //for testing, keep it something small - like 10 seconds
  //this value should be in seconds since strtotime() is in seconds
  //$wait_time = 100;

  //function call
  breaker($url,$homedate,$wait_time=10);

?>
