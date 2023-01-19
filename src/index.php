
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
  
</div>
		<div class="col-md-12">
			<h2>
				Essensplan - <?php echo gethostname();?>
			</h2>
			<p>Das ist ein erster Versuch unser Essensplan online zuführen.</p>
    
      <form name="kwselect" id=weekform action="index.php" method="POST">
        <input type="text" class="form-control" id="weekpicker" name="year_week">
        <input type="submit" name="submit" class="button" id="submit_btn" value="Send" />
      </form>

       
      
      

      <?php include 'showday.php';?>
			
		
			
		</div>
	</div>

	
	</div>
	<div class="container-fluid createnewday">

      <form class="createnewday" name="createnewdayform" method="post" action="createday.php">
        
        <button name="Create" id="create" class="btn btn-lg btn-success btn-block" type="create">Neuen Tag erfassen</button>
      </form>
</div>
<div class="container-fluid createnewday">
<p> Version: 0.5.0</p>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>