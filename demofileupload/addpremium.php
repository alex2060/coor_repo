<?php
session_start();

include("config.php");
include("web_name.php");


$Sight_Pass=$_GET["Sight_Pass"];

$url=$_GET["url"];

$name=$_GET["name"];

$text=$_GET["text"];


//CREATE TABLE demo_sub_page ( `name` TEXT NOT NULL , `loc` TEXT NOT NULL , `text` TEXT NOT NULL , `time` TIMESTAMP NOT NULL , UNIQUE `value` (`name`(248))) ENGINE = MyISAM ;

if ($Sight_Pass==$addminpass) {
    $sql= "INSERT INTO `demo_sub_page` (`name`, `loc`,`text`,`time`) VALUES ('".$name."', '".$url."','".$text."',CURRENT_TIMESTAMP); ";
    $output="true";
    $result = $conn->query($sql);
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
              <label for="login">embededurl</label><br>
              <input type="linked" id="sorce" name="url" class="button"  >
              </br>
              <label for="login">name</label><br>
              <input type="linked" id="sorce" name="name" class="button"  >
              </br>
              <label for="login">text</label><br>
              <input type="linked" id="sorce" name="text" class="button"  >
              </br>
              <br>
              <input type="submit" class="button2" value="Enter">
      </form>
      <?php echo $output;   ?>
    </div>
</div>

    
</body>
</html>
