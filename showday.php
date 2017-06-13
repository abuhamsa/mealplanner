<?php
$link = mysqli_connect("localhost","root","peniskopf2")  or die("failed to connect to server !!");
mysqli_select_db($link,"mealplanner");

$sql = "SELECT * FROM `dayplan_simple`";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
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
                <td>".$row["datum"]."</td>
                <td>".$row["mittag_nat"]."</td>
                <td>".$row["mittag_jan"]."</td>
                <td>".$row["abend_nat"]."</td>
                <td>".$row["abend_jan"]."</td>
                </tr></tbody>";
    }
} else {
    echo "0 results";
}
?>

				</tbody>
			</table>