
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mealplanner</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
      
          
        
          
        
          <div class="form-group">
            <form name="kwselect" id=weekform action="index.php" method="POST">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="bi bi-calendar2-week"></i>
                </span>
              </div>
            <input type="text" class="form-control" id="weekpicker" name="year_week">
              <div class="input-group-append mx-2">
                <button name="date_submit" id="date_submit" class="btn btn-primary" type="date_submit">Send</button>
              </div>
            </div>
            </form>  
          </div>


       
      
      

      <?php include 'showday.php';?>
			
		
			
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

    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>