<?php 
require "login/dbconf.php";

if (isset($_POST['startDate']) && isset($_POST['endDate'])){
$startDate=$_POST['startDate'];
$endDate=$_POST['endDate'];

}
else {
$day = date('w');
$startDate = date('Y-m-d', strtotime('-'.($day-1).' days'));
$endDate = date('Y-m-d', strtotime('+'.(7-$day).' days'));
}



$link = mysqli_connect($host,$username,$password)  or die("failed to connect to server !!");
mysqli_select_db($link,"mealplanner");

$sql = "SELECT * FROM `dayplan_simple` where datum between '$startDate' AND '$endDate' order by datum asc";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

echo "<p>Angezeigter Zeitraum ist ".$startDate." von ".$endDate."</p>"; ?>

<table class="table table-striped table-bordered table-hover">

<thead>
					<tr>
						<th>Datum</th>
                        <?php
						echo "<th>Mittag - ".$person1."</th>";
						echo "<th>Mittag - ".$person2."</th>";
						echo "<th>Abend - ".$person1."</th>";
						echo "<th>Abend - ".$person2."</th>";
                        ?>
                        <th>Edit</th>
					</tr>
				</thead>
<tbody>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> 
                <td>".date("D, d.m.y",strtotime($row["datum"]))."</td>
                <td>".$row["mittag_nat"]."</td>
                <td>".$row["mittag_jan"]."</td>
                <td>".$row["abend_nat"]."</td>
                <td>".$row["abend_jan"]."</td>
                <td><a href='./editday.php?dayid=".$row["dayplan_s_id"]."'><i class='bi bi-pencil-square'></i></a></td>
                </tr>";
    }
} else {
    $i = 0;
    while ($i < 7){
        echo "  <tr> 
                <td>Keine Daten gefunden</td>
                <td>Keine Daten gefunden</td>
                <td>Keine Daten gefunden</td>
                <td>Keine Daten gefunden</td>
                <td>Keine Daten gefunden</td>
                <td><span class='glyphicon glyphicon-pencil'></span></td>
        </tr>";
        $i++;}


}
?>

				</tbody>
			</table>
