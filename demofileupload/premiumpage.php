<?php 




session_start();




include("web_name.php");

$uname=$_SESSION["uname".$sitename];
include("config.php");





if( $_SESSION["logedin".$sitename]==""){
    header("Location: log_in.php?");
}


$sql2="SELECT * FROM `demo_premiumtable` where timeexp > CURRENT_DATE() and username LIKE '".$uname."' ";


$result = $conn->query($sql2);

if($result->num_rows==0){
  header("Location: addprem.php");
}



include("config.php");

$val="main.php?ulr=";


$sql="SELECT * FROM `demo_sub_page` ORDER BY `time` DESC ";

$result = $conn->query($sql);

$out="";
if ($result->num_rows>0) {

    while($row = $result->fetch_assoc()) 
    {
      $out =$out."<button class = \"button\"  onclick=\"window.location.href='".$val.$row["loc"]."&text=".$row["text"]."&name=".$row["name"]."';\">".$row["name"]." </button> <br>";
    }
    
}







/*


CREATE TABLE `subscribe_page` ( `space` TEXT NOT NULL , `loc` TEXT NOT NULL , `text` TEXT NOT NULL , `time` TIMESTAMP NOT NULL ) ENGINE = MyISAM; 

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

<div>


<br><br>

        <button class = 
              "button" 
              onclick="window.location.href='home.php';">
              home
        </button><br><br>
        

        <?php 
        echo $out;

        ?>




      <?php echo $output;?>

      <br>

</div>

  </div>
</div>
<?php echo $sql2;?>
    


</body>
</html>




