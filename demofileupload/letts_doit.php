<?php 


session_start();

include("web_name.php");

include("config.php");

$uname=$_SESSION["uname".$sitename];


if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}



$val="main.php?ulr=";


$sql="SELECT * FROM `demo_basic_page` ORDER BY `time` DESC ";

$result = $conn->query($sql);

$out="";
if ($result->num_rows>0) {

    while($row = $result->fetch_assoc()) {


    $out =$out."<button class = 
              \"button\"  onclick=\"window.location.href='".$val.$row["loc"]."&text=".$row["text"]."&name=".$row["name"]."';\">".$row["name"]." </button> <br>";

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

<div>
        <button class = 
              "button" 
              onclick="window.location.href='premiumpage.php';">
              premium
        </button>


        <button class = 
              "button" 
              onclick="window.location.href='home.php';">
              home
        </button>
        <button class = "button" onclick=<?php echo "\""."window.location.href='".str_replace("\n", "", $_SESSION["linker"] )."mywebsight.com';"."\"";?>>outlink</button>


        <br><br>
        <?php 
        echo $out;

        ?>




      <?php echo $output;?>
      
      <br>

</div>

  </div>
</div>

    <?php echo $_SESSION["testingit"]." ".$_SESSION["uname".$sitename]." ".$_SESSION["logedin".$sitename]." ".$uname."in here we go";?>


</body>
</html>




