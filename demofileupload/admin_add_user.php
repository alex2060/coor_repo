<?php


session_start();

include("config.php");
include("web_name.php");
include("stiper.php");


$Sight_Pass= the_striper( $_GET["Sight_Pass"] );
$add_user=the_striper( $_GET["add_user"] );
$pass_user=the_striper($_GET["pass_user"] ) ;


//CREATE TABLE `demo_user_table` ( `username` TEXT NOT NULL , `created` TIMESTAMP NOT NULL , `email` TEXT NOT NULL , `pass` TEXT NOT NULL,UNIQUE (`username`(64)) ) ENGINE = MyISAM; 

if ($Sight_Pass==$addminpass) {
    $sql="INSERT INTO `demo_user_table` (`username`, `created`, `pass`, `email`)  VALUES 
       ('".$add_user."', CURRENT_TIMESTAMP, '".$pass_user."', 'made_on_file');";


    $result = $conn->query($sql);

    	$output="true".$sql."res ".$result ." out";



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
    <form action = "" enctype = "multipart/form-data">

            <label for="login">Sight Pass</label><br>
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
  </div>
</div>

    
</body>
