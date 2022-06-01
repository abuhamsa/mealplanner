
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
      
      <form name="kwselect" action="index.php" method="POST">
        
        <div class="nativeWeekPicker">
        <input id="year_week" type="week" name="year_week" onchange="this.form.submit()">  
        </div>
        <div class="fallbackWeekPicker">
          <div>
            <span>
              <label for="week">Woche:</label>
              <select id="fallbackWeek" name="week">
              </select>
            </span>
            <span>
              <label for="year">Year:</label>
              <select id="year" name="year">
                <option value="2022" selected>2022</option>
                <option value="2021">2021</option>
              </select>
            </span>
          </div>
        </div>

      </form>

			<?php include 'showday.php';?>

		</div>
	</div>

	
	<div class="container-fluid createnewday">

      <form class="createnewday" name="createnewdayform" method="post" action="createday.php">
        
        <button name="Create" id="create" class="btn btn-lg btn-success btn-block" type="create">Neuen Tag erfassen</button>
      </form>
</div>
<div class="container-fluid createnewday">
<p> Version: 0.4.0</p>
</div>
    <script src="js/scripts.js"></script> 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>