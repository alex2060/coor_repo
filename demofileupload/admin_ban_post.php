<?php
session_start();

include("config.php");
include("web_name.php");
//include( "stiper.php")
$Sight_Pass= $_POST["Sight_Pass"] ;
$baned_post= $_POST["baned_post"] ;

if ($Sight_Pass==$addminpass) {
  $sql= "DELETE FROM  `demo_post_page` WHERE fild_id = '".$baned_post."'; ";
    $output="true";
    $result = $conn->query($sql);
}
?>


<?php 
include("style/addmin_ban_style_post.php");
echo $addmin_ban_style;
?>



