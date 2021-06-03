<?php


$forwardurl=$_GET["webforward"];


$forwardurl = str_replace('!', '&', $forwardurl);

$forwardurl = str_replace('>', '?', $forwardurl);

$exta=$_GET["exta"];

$hashword=$_GET["hashword"];

$setion_id=$_GET["setion_id"];

$trace=$_GET["trace"];

$user=$_GET["user"];

$backtrace_url=$_GET["backtrace_url"];





?>



<?php echo $forwardurl; ?>

</br>
</br>
</br>

<?php echo $backtrace_url."?trace=".$trace."&user=".$user."&hashword=".$hashword."&setion_id=".$setion_id; ?>





