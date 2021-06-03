<?php 
session_start();
include("config.php");
include("web_name.php");


$output="";
$uname=$_GET["uname"];
$password2=$_GET["password"];


$hash=$_GET["hash"];
$web=$_GET["web"];



$webid="alex_websight";


if ($web!="") {


$Websights = array(
  "http://alexhaussmann.com/adhaussmann/alex/dat2/datumes.php",
  "http://alexhaussmann.com/adhaussmann/alex/dat3/datumes.php",
  "this");

$names = [
    'http://alexhaussmann.com/adhaussmann/alex/dat2/datumes.php' => "-1",
    'http://alexhaussmann.com/adhaussmann/alex/dat3/datumes.php' => "-2"
];



if(in_array($web, $Websights)){
  #$output="good";
  $val=hash('sha256', $password2.$webid);
  $make=$web."?webname=".$webid."&type=login_check&user=".$uname."&hashword=".$val;
  $ch1 = curl_init();
  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($ch1, CURLOPT_VERBOSE,TRUE);
  curl_setopt($ch1, CURLOPT_URL,    str_replace(' ', '', $make)   );
  $test1 =  curl_exec($ch1);
  curl_close($ch1);


  $make=$web."?webname=".$webid."&type=login_check&user=".$uname."&hashword=".$hash;
  $ch1 = curl_init();
  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($ch1, CURLOPT_VERBOSE,TRUE);
  curl_setopt($ch1, CURLOPT_URL,  str_replace(' ', '', $make)   );
  $test2 =  curl_exec($ch1);
  curl_close($ch1);
  $output=$test1.$test2;

  if ($test1) {


      $_SESSION["uname".$sitename  ]=$uname.$names[$web];
      $_SESSION["logedin".$sitename]="True";

      header("Location: letts_doit.php");
      $output="loged in as ".$uname." ";
  }
  else{

      $_SESSION["uname".$sitename  ]=$uname.$names[$web];
      $_SESSION["logedin".$sitename]="True";
      header("Location: letts_doit.php");
      $output="loged in as ".$uname." ";
  }
}
else{
  $output="websight not suported";
}



}
else{

  $sql1 = "SELECT * FROM user_".$sitename." WHERE user LIKE '".$uname."' and pass LIKE '".$password2."';";  
  $result = $conn->query($sql1);

  if ($uname!="") {


  	if($result->num_rows==1){
  		$_SESSION["uname".$sitename]=$uname;
      $_SESSION["logedin".$sitename]="True";
  		header("Location: letts_doit.php");
  		$output="loged in as ".$uname." ";
    }




  	else{
  		$output="not loged in";

  	}



  }

  $uname=$_SESSION['uname'];
  if ($uname=="") {
    $uname="nobody";
    echo $row["boady"];

  }

}




/*
if ($result->num_rows!=0){
  	$_SESSION['uname']
  	$output="loged in as".$uname."here";
}
$output="wrong user name of password ";
/*
CREATE TABLE `treelose_data`.`__users` (
 `user` VARCHAR(100) NOT NULL , 
 `payment` TEXT NOT NULL , 
 `created` TIMESTAMP NOT NULL , 
 `email` TEXT NOT NULL , 
 `phone number` INT NOT NULL , 
 `paymentkey` TEXT NOT NULL , 
 `pass` TEXT NOT NULL, 
 PRIMARY KEY (user) ) ENGINE = MyISAM
*/

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
    border: 1px solid black ;
    display: flex;
    flex-direction:column;
}


.child1{
    color: blue;
    text-decoration-color: 
    flex: 1;
    margin: 4vw;
    padding: 5vw;
     border: 5px solid black ;
}


.button
{
min-width:12vw;
height: 5vw;
font-size: 4vw;
}


</style>

<body style="background-color: #24222a;">
  <div class="parent" style="background-color: #24222a;">


    <div class="child child1" style="background-color: #000000; color: #ffffffff; font-size:6vw; flex: 1; display: flex;">

      <form action="log_in.php">
        <label for="login">User Name</label><br>
        <input type="uname" id="uname" name="uname" class="button" value=""><br>
        <label for="login">Password</label><br>
        <input type="text" id="password" name="password" class="button" value=""><br>

        <label for="login">Login Hash</label><br>
        <input type="text" id="hash" class="button" name="hash"  value=""><br>


        <label for="login">Login Websight</label><br>
        <input type="text" id="hash" class="button" name="web" value=""><br>


        <input type="submit" value="Submit" class="button"></br>




      </form> 
      <?php echo $output;?>

              <button class = 
              "button" 
              onclick="window.location.href='sigh_up_user.php';">
              sigh up
        </button>
      <br>



  </div>
</div>

    


</body>
</html>









