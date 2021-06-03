<?php


session_start();

include("config.php");
include("web_name.php");


$Sight_Pass=$_POST["sightpass"];

$client=$_POST["client"];

$pass=  $_POST["pass"];

$link= $_POST["link"];

$lat= $_POST["lat"];

$lang= $_Post["lng"];

$andress = $_POST["adress"];




# check if U name nto taken.
/*

CREATE TABLE `demo_provider` ( `client` VARCHAR(64) NOT NULL , `pass` TEXT NOT NULL , `link` TEXT NOT NULL , `lat` TEXT NOT NULL , `lng` TEXT NOT NULL , `adress` TEXT NOT NULL , UNIQUE (`client`(64)) ) ENGINE = MyISAM; 

*/

$output="False";
if ($Sight_Pass==$addminpass) {



      $sql1 = "SELECT * FROM demo_provider WHERE client LIKE '".$client."' ;";
      $result = $conn->query($sql1);

      if($result->num_rows==0)
      {


          $sql="INSERT INTO `demo_provider` (`client`, `pass`, `link`, `lat`, `lng`, `adress`) VALUES ('".$client."', '".$pass."', '".$link."', '".$lat."', '".$lang."', '".$andress ."')  ; ";
          $output="true";
          $result = $conn->query($sql);
          $_SESSION["majuname".$sitename  ]=$uname.$names[$web];
          $_SESSION["logedin".$sitename]="True";


      }


      $output=$sql;
    # code...
  }



?>







<!DOCTYPE html>
<html>
<head>
  <title>first_page</title>

<style>

.boady{

  width: 12vw;
  height: 6vw;
  font-size: 5vw;

}

.parent{

    display: flex;
    flex-direction:column;

}


.child1{

    color: blue;
    text-decoration-color: 
    flex: 1;
    margin: 4vw;
    padding: 5vw;
     border: 5px solid black;

}


.button{
  min-width:5vw;
  height: 3vw;
  font-size: 2vw;
}


.button2{
  min-width:10vw;
  height: 5vw;
  font-size: 2vw;
}
</style>

<body style="background-color: #24222a;">



<button type="button" class="button" onclick="window.location.href='add_apointmentpage.php'" > add apointmentpage </button>


<button type="button" class="button" onclick="window.location.href='add_provider.php'" > add provider </button>


<div class="parent" style="background-color: #24222a;">
  <div class="child child1" style="background-color: #000000; color: #ffffffff; font-size:6vw; flex: 1; display: flex;">
      <form action = "" method = "POST" enctype = "multipart/form-data">

            <label for="login">Sight Pass</label><br>
            <input type="linked" id="sorce" name="sightpass" class="button"  >
            <br>
            <label for="login">client</label><br>
            <input type="boady" id="sorce" name="client" class="button" value="">
            <br>
            <label for="login">password</label><br>
            <input type="linked" id="sorce" name="pass" class="button"  >
            <br>

            <label for="login">Link</label><br>
            <input type="linked" id="sorce" name="link" class="button"  >
            <br>

            <label for="login">lat,lang</label><br>
            <input type="linked" id="sorce" name="lat" class="button"  >
            <br>


            <br>

            </br>
            <input type="submit" class="button2" value="Enter">
      </form>
  <?php echo $output;   ?>
  </div>
</div>

    
</body>
</html>
