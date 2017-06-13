<?php require "login/loginheader.php";
$date= date("d.m.y");


$kw=date("W",strtotime($date));


$link = mysqli_connect("localhost","root","peniskopf2")  or die("failed to connect to server !!");
mysqli_select_db($link,"mealplanner");

$sql = "SELECT * FROM `dayplan_simple` where WEEK (`datum`,3) = $kw order by datum asc";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

echo "<p>Angezeigte KW ist ".$kw."</p>";
?>
<table class="table table-striped table-bordered table-hover">
<thead>
					<tr>
						<th>Datum</th>
						<th>Mittag - Natü</th>
						<th>Mittag - Jan</th>
						<th>Abend - Natü</th>
						<th>Abend - Jan</th>
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
        </tr>";
        $i++;}


}
?>

				</tbody>
			</table>