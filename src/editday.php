<?php require "login/loginheader.php"; 

require "login/dbconf.php";
$link = mysqli_connect($host,$username,$password)  or die("failed to connect to server !!");
mysqli_select_db($link,"mealplanner");

if (isset($_GET['dayid'])){
$dayid=$_GET['dayid'];}
else {
die("keine dayid vorhanden");
}

$sql = "SELECT * FROM `dayplan_simple` where `dayplan_s_id` = $dayid";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
$row = $result->fetch_assoc();

?>



<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mealplanner</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

<form class="form-horizontal" action="editdayform.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Tag editieren</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="datum">Datum</label>  
  <div class="col-md-4">
  <input id="datum" name="datum" type="date" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="mittag_n">Mittag Natü</label>  
  <div class="col-md-4">
  <input id="mittag_n" name="mittag_n" type="text" placeholder="Mittag Natü" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="mittag_j">Mittag Jan</label>  
  <div class="col-md-4">
  <input id="mittag_j" name="mittag_j" type="text" placeholder="Mittag Jan" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="abend_n">Abend Natü</label>  
  <div class="col-md-4">
  <input id="abend_n" name="abend_n" type="text" placeholder="Abend Natü" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-1 control-label" for="abend_j">Abend Jan</label>  
  <div class="col-md-4">
  <input id="abend_j" name="abend_j" type="text" placeholder="Abend Jan" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-1 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="hidden" value=<?php echo $dayid;?> name="dayid" />
    <button type="submit" id="submit" name="submit" class="btn btn-success">Save</button>
  </div>
</div>
</fieldset>
</form>

<form class="form-horizontal" action="editdayform.php" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-1 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <input type="hidden" value=<?php echo $dayid;?> name="id_delete" />
    <button type="submit" id="submit" name="submit" class="btn btn-danger">Delete</button>
  </div>
</div>
</fieldset>
</form>



<script type="text/javascript"> 
  document.getElementById("datum").setAttribute('value','<?php echo $row["datum"];?>');
  document.getElementById("mittag_n").setAttribute('value','<?php echo $row["mittag_nat"];?>');
  document.getElementById("mittag_j").setAttribute('value','<?php echo $row["mittag_jan"];?>');
  document.getElementById("abend_n").setAttribute('value','<?php echo $row["abend_nat"];?>');
  document.getElementById("abend_j").setAttribute('value','<?php echo $row["abend_jan"];?>');
</script>



</div>
</div>
</body>
</html>
