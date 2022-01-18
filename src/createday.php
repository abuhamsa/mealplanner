
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

<form class="form-horizontal" action="newdayform.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Neuen Tag erfassen</legend>

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
    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
</body>
</html>
