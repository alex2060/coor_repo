<?php 

#include("web_name.php");

#include("stiper.php");

//$uname=the_striper($_SESSION["uname".$sitename]);

$uname=$_SESSION["uname".$sitename];



$_SESSION["partal_login".$sitename]="T";



$forwardaddress=$_GET["webforward"];

$myout = str_replace('!', '&', $forwardaddress);

$myout = str_replace('>', '?', $myout);

$user=$_GET["user"];


$backtrackurl=$_GET["backtrace_url"]."?trace=".$_GET["trace"]."&user=".$user."&hashword=".$_GET["hashword"]."&setion_id=".$_GET["setion_id"];






?>

<?php echo $myout; ?>

</br>
</br>
<?php echo $backtrackurl; ?>
</br>
aaab;





