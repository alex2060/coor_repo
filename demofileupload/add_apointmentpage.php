<?php


session_start();
include("config.php");
include("web_name.php");


#get claint

$cliant=    $_POST["cliant"];
$password=  $_POST["password"];

$day=       $_POST["day"];
$time=      $_POST["time"];

$type=      $_POST["type"];

$price=      $_POST["price"];

# this that  



#CEATE TABLE `demo_apoint` ( `claint` TEXT NOT NULL , `type` TEXT NOT NULL , `day` TEXT NOT NULL , `time` TEXT NOT NULL , `price` TEXT NOT NULL,`id` TEXT NOT NULL ,UNIQUE (`client`(248)) ) ENGINE = MyISAM;

$sql = "SELECT * FROM demo_provider WHERE client LIKE '".$cliant."' and pass LIKE '".$password."';";

$result = $conn->query($sql);

$out2=$sql;

if($result->num_rows==1){
      $sql="INSERT INTO `demo_apoint` (`claint`, `type`, `day`, `time`, `price`,`id`) VALUES ('".$cliant."', '".$type."', '".$day."', '".$time."', '".$price."','".$cliant."_".time()."')  ";
      $result = $conn->query($sql);
      $output=$sql;
}


else{
  $output="wrong password";
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

        <label for="login">cliant</label><br>
        <input type="boady" id="boady" name="cliant" class="button" value="">
        <br>
        <label for="login">password</label><br>
        <input type="linked" id="sorce" name="password" class="button"  >
        <br>
        <label for="login">day</label><br>
        <input type="linked" id="sorce" name="day" class="button"  >
        <br>

        <label for="login">type</label><br>
        <input type="linked" id="sorce" name="type" class="button"  >
        <br>

        <label for="login">price </label><br>
        <input type="linked" id="sorce" name="price" class="button"  >
        <br>

        <label for="login">time</label><br>
        <input type="linked" id="sorce" name="time" class="button"  >
        <br>



        <input type="submit" class="button2" value="Enter">

  </form>



  <?php echo $output;   ?>
  </br>
  <?php echo $out2;?>




  </div>
</div>

    
</body>
</html>
