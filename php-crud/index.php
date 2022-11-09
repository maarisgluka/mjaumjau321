<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <img src="css/swedbank.png" class="display-4 text-center"><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="name">Neim</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="name" 
		           value="<?php if(isset($_GET['name']))
		                           echo($_GET['name']); ?>" 
		           placeholder="Enta neim">
		   </div>

		   <div class="form-group">
		     <label for="email">Emeil</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?php if(isset($_GET['email']))
		                           echo($_GET['email']); ?>"
		           placeholder="Enta emeil">
		   </div>

		   <div class="form-group">
		     <label for="cardnum">16 numbers card please</label>
		     <input type="cardnum" 
		           class="form-control" 
		           id="cardnum" 
		           name="cardnum"
				   maxlength="16"
		           value="<?php if(isset($_GET['cardnum']))
		                           echo($_GET['cardnum']); ?>"
		           placeholder="Enta 16">
		   </div>

		   <div class="form-group">
		     <label for="ccv">3 number on back CCV</label>
		     <input type="ccv" 
		           class="form-control" 
		           id="ccv" 
		           name="ccv"
				   maxlength="3"
		           value="<?php if(isset($_GET['ccv']))
		                           echo($_GET['ccv']); ?>"
		           placeholder="Enta CCV">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Create</button>
		    <a href="read.php" class="btn btn-primary">View</a>
	    </form>
	</div>
</body>
</html>