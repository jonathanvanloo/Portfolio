 <?php

$nameErr = $lastnameErr = $emailErr =  $websiteErr = "";
$name = $lastname = $email =  $comment = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Uw voornaam is verplicht";
	  } else {
	    $name = test_input($_POST["name"]);
	  }

	  if (empty($_POST["lastname"])) {
	    $lastnameErr = "Uw achternaam is verplicht";
	  } else {
	    $lastname = test_input($_POST["lastname"]);
	  }

	  if (empty($_POST["email"])) {
	    $emailErr = "Uw email is verplicht";
	  } else {
	    $email = test_input($_POST["email"]);
	  }

	  if (empty($_POST["comment"])) {
	    $comment = "";
	  } else {
	    $comment = test_input($_POST["comment"]);
	  }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>mad-lips 2</title>
	<link rel="stylesheet" type="text/css" href="mad_lips_2.css">
</head>
<body>

  <?php include'navbar.html'; ?>

<div class="container"><br>
	
	<form>
	
		<div class="form-group row">
	    	<div class="col-6">
  				<label class="col-3 col-form-label">Uw voornaam</label>
	      		<input type="text" class="form-control" placeholder="Henk">
	    	</div>    
	    	<div class="col-6">
  				<label class="col-5 col-form-label">Uw achternaam</label>
	      		<input type="text" class="form-control" placeholder="Jansen">
	    	</div>
	 	</div>

		<div class="form-group row">
  			<div class="col-6">
  				<label for="example-email-input" class="col-3 col-form-label">Uw email</label>
    			<input class="form-control" type="email" value="naam@gmail.com" id="example-email-input">
    		</div>
			<div class="col-6">
  				<label for="example-tel-input" class="col-5 col-form-label">Uw telefoonnummer</label>
			    <input class="form-control" type="tel" value="60 11223344" id="example-tel-input">
			</div>
		</div>

  		<div class="form-group row">
  			<div class="col-12">
    			<label for="exampleFormControlTextarea1">Uw vraag</label>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
  		</div>
   		
   		<div class="form-group row">
   			<div class="col-12">
    			<label for="exampleFormControlFile1">Uw bestand</label>
    			<input type="file" class="form-control-file" id="exampleFormControlFile1">
  			</div>
  		</div>
   		<div class="form-group row">

  		    <div class="col-auto">
      			<button type="submit" class="btn btn-primary mb-2">Submit</button>
    		</div>
    	</div>

	</form>

</div>

	<?php include'footer.html'; ?>

</body>
</html>