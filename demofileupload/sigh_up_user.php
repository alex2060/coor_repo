<?php


session_start();

include("config.php");
include("web_name.php");

include("stiper.php");

$Sight_Pass=the_striper($_POST["Sight_Pass"]);
$add_user=the_striper($_POST["add_user"]);
$pass_user=the_striper($_POST["pass_user"]);


  $sql1 = "SELECT * FROM `demo_user_table` WHERE user LIKE '".$add_user."' ;";




  
  $result = $conn->query($sql1);
$output="here we are then".$sql1."  ";
  if ($add_user!="") {


    if($result->num_rows==1){
      $output="user taken";

    }
    
    else{

    $sql="INSERT INTO `demo_user_table` (`user`, `payment`, `created`, `email`, 
       `phone number`, `paymentkey`, `pass`, `views`, `view_M`)  VALUES 
       ('".$add_user."', '1', CURRENT_TIMESTAMP, '".$email."', '1', '1', '".$pass_user."', '1', '1')";

      $output=$output.$sql;
          $result = $conn->query($sql);

      $_SESSION["uname".$sitename]=$add_user;
      $_SESSION["testingit"]="we are the test";
      $_SESSION["logedin".$sitename]="True";
      header("Location: letts_doit.php");

      }



}
//"DELETE FROM table_name WHERE user like ;"

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
    <form action = "" method = "POST" enctype = "multipart/form-data">

            <label for="login">email</label><br>
            <input type="boady" id="boady" name="Sight_Pass" class="button" value="">
            <br>
            
            <label for="login">user to add</label><br>
            <input type="linked" id="sorce" name="add_user" class="button"  >
            <br>

            <label for="login">user to pass</label><br>
            <input type="linked" id="sorce" name="pass_user" class="button"  >
            <br>



            <input type="submit" class="button2" value="Enter">


    </form>
<?php echo $output;   ?>

  </div>
</div>

    
</body>
</html>
