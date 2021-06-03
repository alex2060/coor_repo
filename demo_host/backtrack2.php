
<?php

$trace=$_GET["trace"];
$user=$_GET["user"];
$hashword=$_GET["hashword"];
$setion_id=$_GET["setion_id"];
$pass=$_GET["password"];

	include("config.php");
	$sql = "SELECT * FROM `demo-host_users` WHERE `user` LIKE '".$user."' AND `hashword` LIKE '".$pass."';";
	$out="False".$sql;
	$result = $conn->query($sql);
	if ($result->num_rows==1) {


		$sql ="UPDATE `demo-host_backtrack_Ledger` SET `used` = 'T' WHERE `hashword` = '".$hashword."';";
		$out="False";
		$result = $conn->query($sql);

		$out="True".$sql;

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

      <form action="">
        <label for="login">traceaaaaaa</label><br>
        <input type="uname" id="uname" name="trace" class="button" 						value= <?php echo "\"".$trace."\""; ?> > <br>
        <label for="login">user</label><br>
        <input type="text" id="password" name="user" class="button" 					value= <?php echo "\"".$user."\""; ?> > <br>

        <label for="login">hashword</label><br>
        <input type="text" id="hashword" name="hashword" class="button" name="hash"  	value= <?php echo "\"".$hashword."\""; ?> > <br>


        <label for="login">setion_id</label><br>
        <input type="text" id="hash" class="button" name="setion_id" 					value= <?php echo "\"".$setion_id."\""; ?> > <br>


        <label for="login">password</label><br>
        <input type="text" id="hash" class="button" name="password" 					value= "" > <br>



        <input type="submit" value="Submit" class="button"></br>



      </form> 
      
        <button class = 
              "button" 
              onclick="window.location.href='sigh_up_user.php';">
              sigh up
        </button>


      <?php echo $output;?>
      
      </br>
      <?php echo $webid;?>
      <br>



  </div>
</div>

    


</body>
</html>

<?php echo $out; ?>








