<?php 
require "login/dbconf.php";
$link = mysqli_connect($host,$username,$password)  or die("failed to connect to server !!");
mysqli_select_db($link,"mealplanner");
if(isset($_REQUEST['submit']))
{
if(isset($_POST['id_delete'])){
$dayiddelete = $_POST['id_delete'];
$insqDbtb="DELETE FROM `mealplanner`.`dayplan_simple` WHERE `dayplan_s_id`= $dayiddelete";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}else {   
$errorMessage = "";
$datum=$_POST['datum'];
$mittag_j=$_POST['mittag_j'];
$mittag_n=$_POST['mittag_n'];
$abend_n=$_POST['abend_n'];
$abend_j=$_POST['abend_j'];
$dayid=$_POST['dayid'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="UPDATE `mealplanner`.`dayplan_simple`
SET `datum` = '$datum', `mittag_nat` = '$mittag_n', `mittag_jan` = '$mittag_j', `abend_nat` = '$abend_n', `abend_jan` = '$abend_j'
WHERE `dayplan_s_id`=$dayid";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
header("Location: index.php");
exit();
}

?>
