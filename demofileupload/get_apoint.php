<?php
#Get cliant 
#get cliant pass
#get time
session_start();
include("config.php");
include("web_name.php");
include("stiper.php");
$cliant=the_striper($_GET["cliant"]);

$sql = "SELECT * FROM demo_provider;";

$result = $conn->query($sql);

$outing="apointments ";

while($row = $result->fetch_assoc() ) {

	$outing=$outing."<br><br><br>  <input type=\"button\" class = \"button\" value=\" ".$row["client"]." \" onclick=\"window.location.href='secudual.php?client=".$row["client"]."' \" />	".$row["client"]." ".$row["link"]." ".$row["adress"]." ".$row["lat"]." ".$row["lng"]." ".$row["adress"];

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
  font-size: 2vw;

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
  
  


<body style="background-color: #24222a;">

  
<button type="button" class="button" onclick="window.location.href='home.php'" > home </button>






<div class="parent" style="background-color: #24222a;">

<div class="child child1" style="background-color: #000000; color: #ffffffff; font-size:2vw; ">


		<?php

		echo $outing."inhead";

		?>






  </div>
</div>

    
</body>
</html>


