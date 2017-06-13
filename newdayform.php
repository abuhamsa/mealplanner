<?php require "login/loginheader.php";
$link = mysqli_connect("localhost","root","peniskopf2")  or die("failed to connect to server !!");
mysqli_select_db($link,"mealplanner");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$datum=$_POST['datum'];
$mittag_j=$_POST['mittag_j'];
$mittag_n=$_POST['mittag_n'];
$abend_n=$_POST['abend_n'];
$abend_j=$_POST['abend_j'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `mealplanner`.`dayplan_simple`
(`datum`, `mittag_nat`, `mittag_jan`, `abend_nat`, `abend_jan`) VALUES ('$datum', '$mittag_n', 
'$mittag_j', '$abend_n', '$abend_j')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}
header("Location: index.php");
exit();

?>