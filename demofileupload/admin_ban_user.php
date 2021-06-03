
<?php 
$uname=$_SESSION['uname'];
if ($uname=="") {
  $uname="nobody";
}
include("config.php");
include("web_name.php");
include("stiper.php");

$Sight_Pass=the_striper( $_POST["Sight_Pass"] );
$baned_user=the_striper( $_POST["baned_user"] );




if ($Sight_Pass==$addminpass) {
  $sql= "DELETE FROM  `demo_user_table` WHERE user = '".$baned_user."'; ";
  $result = $conn->query($sql);
  $output=$sql;
}

?>



heresss
<?php 
include("style/admin_ban_user_style.php");
echo $admin_ban_user."heres";
?>


