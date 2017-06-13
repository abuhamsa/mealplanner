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
				Essensplan
			</h2>
			<p>Das ist ein erster Versuch unser Essensplan online zuführen.</p>
			<?php include 'showday.php';?>
		
			
		</div>
	</div>

	
	</div>
	<div class="col-md-6 createnewday">

      <form class="createnewday" name="createnewdayform" method="post" action="createday.php">
        
        <button name="Create" id="create" class="btn btn-lg btn-success btn-block" type="create">Neuen Tag erfassen</button>
      </form>
</div>
	<div class="col-md-6 form-signin">

      <form class="form-signin" name="logoutform" method="post" action="login/logout.php">
        
        <button name="Logout" id="logout" class="btn btn-lg btn-danger btn-block" type="logout">Logout</button>
      </form>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>