<?php

session_start();

include("config.php");

include("web_name.php");
$uname=$_SESSION["uname".$sitename];


if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}



$password=$_GET["password"];




$web="http://alexhaussmann.com/adhaussmann/l/rem_key.php?";



$make=$web.$password;

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch1, CURLOPT_VERBOSE,TRUE);
curl_setopt($ch1, CURLOPT_URL,  str_replace(' ', '', $make)   );
$test2 =  curl_exec($ch1);

curl_close($ch1);




$passwordtext=TRUE;
if (strpos($test2, 'key') != FALSE)
{
  $passwordtext=FALSE;
}
if (strpos($test2, 'fa') != FALSE)
{
  $passwordtext=FALSE;
}


//CREATE TABLE demo_premiumtable ( `username` TEXT NOT NULL , `timeexp` TIMESTAMP NOT NULL , `id` TEXT NOT NULL , UNIQUE (`id`(248)) ) ENGINE = MyISAM; 


if ($passwordtext) {

	$sql="INSERT INTO `demo_premiumtable` (`username`, `timeexp`, `id`) VALUES ('".$uname."',     CURRENT_TIMESTAMP+INTERVAL 30 DAY, '".time().$uname."') ;";
	$result = $conn->query($sql);
  $output= "we are good".$sql;
  header("Location: premiumpage.php");



}

//$output="wrong key </br>".$test2."</br> ".$make." ".$sql;

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
  min-width:12vw;
  height: 5vw;
  font-size: 4vw;
}


.button2{
  min-width:15vw;
  height: 5vw;
  font-size: 3vw;
}
</style>

<body style="background-color: #24222a;">
  <div class="parent" style="background-color: #24222a;">
    <div class="child child1" style="background-color: #000000; color: #ffffffff; font-size:6vw; flex: 1; display: flex;">


      </br>


      <form action = "" enctype = "multipart/form-data">


              <label for="login">password</label><br>
              <input type="boady" id="boady" name="password" class="button" value="">
              <br>

              <input type="submit" class="button2" value="Enter">


      </form>
      
      
      
      
      </br>
      <button class = 
            "button" 
            onclick="window.location.href='http://alexhaussmann.com/adhaussmann/l/finpayest.php';">
            add prem
      </button>

            <button class = 
            "button" 
            onclick="window.location.href='home.php';">
            home
      </button>

    </div>


    <?php echo $output;   ?></br>
    </br>
    </br>
    </br>
    <?php echo $$password;   ?>
    </br>
    </br>
    </br>
    <?php echo $make;   ?>

</div>

    
</body>
</html>


