<?php require "login/loginheader.php"; ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mealplanner</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class="btn" href="#">View details »</a>
			</p>
		
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
$link = mysqli_connect("localhost","root","peniskopf2")  or die("failed to connect to server !!");
mysqli_select_db($link,"mealplanner");

$sql = "SELECT * FROM `dayplan_simple`";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> 
                <td>".$row["datum"]."</td>
                <td>".$row["mittag_nat"]."</td>
                <td>".$row["mittag_jan"]."</td>
                <td>".$row["abend_nat"]."</td>
                <td>".$row["abend_jan"]."</td>
                </tr>";
    }
} else {
    echo "0 results";
}
?>
				</tbody>
			</table>
		</div>
	</div>





	<div class="row">
		<div class="col-md-12">
		
		
			<ol>
				<li>
					Lorem ipsum dolor sit amet
				</li>
				<li>
					Consectetur adipiscing elit
				</li>
				<li>
					Integer molestie lorem at massa
				</li>
				<li>
					Facilisis in pretium nisl aliquet
				</li>
				<li>
					Nulla volutpat aliquam velit
				</li>
				<li>
					Faucibus porta lacus fringilla vel
				</li>
				<li>
					Aenean sit amet erat nunc
				</li>
				<li>
					Eget porttitor lorem
				</li>
			</ol>
		</div>
	
    
      
	
	</div>
	<div class="form-signin">
        <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>