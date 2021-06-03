
<?php


session_start();
include("config.php");
include("web_name.php");

include("stiper.php");

$client=    the_striper($_GET["client"]);

if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}




$outing="";

$sql = "SELECT * FROM `demo_provider` WHERE `client` LIKE '".$client."';";

$result = $conn->query($sql);

if($result->num_rows!=0){
$gone="we good";

	while($row = $result->fetch_assoc() ) {
		$outing=$outing."<br> ".$row["client"]." ".$row["link"]." ".$row["adress"]." ".$row["lat"]." ".$row["lng"]." ".$row["adress"];


	}


	

	$sql1 =  "SELECT * FROM `demo_apoint` WHERE `claint` LIKE '".$client."';" ;
	$result = $conn->query($sql1);



	$outing=$outing."<br><br><br>";
	
	
	while($row = $result->fetch_assoc() ) {
		if ($price!=-1) {

			$outing=$outing."<br>  <input type=\"button\" value=\" ".$row["day"]." ".$row["time"] ." \" onclick=\"window.location.href='http://alexhaussmann.com/adhaussmann/l/finpayest.php' \" />	".$row["client"]." ".$row["day"]." ".$row["time"]." ";
		}
		


	}

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
<button type="button" class="button" onclick="window.location.href='home.php'" > home </button>


<button type="button" class="button" onclick="window.location.href='get_apoint.php'">get apointment</button>

<div class="parent" style="background-color: #24222a;">

<div class="child child1" style="background-color: #000000; color: #ffffffff; font-size:2vw;">
	<?php echo $outing;?>
  </div>
</div>

    
</body>
</html>




