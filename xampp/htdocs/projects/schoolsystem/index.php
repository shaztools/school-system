<!DOCTYPE html>
<html>
<head>
	<title>school system</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8"
    <meta name="viewpoint" content="width=device-width, initital-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">s
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="public/about.php">about us</a></li>
      <li><a href="#contact">contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#authenticationDiv"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#authenticationDiv"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
  	  <img src="images/schoolsystemlogo.png" style="width:600px; height: 200px">
  </div>
  <div class="col" style="text-align: center;">
        	</div>
  
    </div>
    <br>
     <div class="container">
     <div class="jumbotron">
  	 <div class="row">
  	 <div class="col" style="text-align: center">	
  	 	<h3>Register</h3>
  	 	<h3 style="margin-right: 26px; margin-left: 26px;"></h3>
  	 </div>
  	 <div class="col" style="text-align: center;">
  	 	<h3>Login</h3>
  	 	<h3 style="margin-right: 26px; margin-left: 26px;"></h3>
  	 	<form action="authentication/register.php" method="post">
  	 		<div class="form-group">
  	 			<input type="text" name="username" id="username" class="form-control" placeholder="enter username">
  	 		</div>
  	 		<div class="form-group">
  	 			<input type="email" name="email" id="email" class="form-control" placeholder="enter email">
  	 		</div>
  	 		<div class="form-group">
  	 			<input type="password" onkeyup="check();" name="password" id="password" class="form-control" placeholder="enter password"><span id="message"></span>
  	 		</div>
  	 		<div class="form-group">
  	 			<input type="password" onkeyup="check();" name="password" id="conpass" class="form-control" placeholder="confirm password">
  	 		</div>
  	 		<div class="row">
  	 			<div class="col" style="text-align: center;">
  	 				<input type="submit" name="save" id="save" class="btn btn-success btn-block" value="create account">

  	 				<br>	

  	 			</div>
  	 			<div class="col" style="text-align: center;">
  	 				<input type="reset" name="reset" id="reset" class="btn btn-danger btn-block" value="rest password">	
  	 			</div>
  	 			<div class="form-group" style="text-align: center">
  	 			<p>have an account proceed to login</p>
  	 			</div>
  	 			
  	 			
  	 		</div>
  	 	</form>
  	 	<div class="col" style="text-align: center;">
  	 		<h3>Login</h3>
  	 		<hr style="margin-right: 26px; margin-left: 26px;">
  	 		<form action="authentication/access.php" method="post">
  	 		<div class="form-group">
  	 			<input type="text" name="username" id="username" class="form-control" placeholder="enter username">
  	 		</div>
  	 		<div class="form-group">
  	 			<input type="password" name="password" id="password" class="form-control" placeholder="enter password">
  	 		</div>
  	 		
  	 		<br>	
  	 			</div>
  	 			<div class="form-group">
  	 				<input type="submit" name="login" id="login" class="btn btn-success btn-block" value="login">	
  	 			</div>
  	 			<div class="form-group" style="text-align: center">
  	 				<p>If you do not have an account,create one in the create account form</p>
  	 			</div>
  	 			
  	 		</div>
  	 	</form>
  	 
  	 	</div>
  	 	<div class="form-group">
  	 				<input type="welcome" name="welcome" id="welcome" class="btn btn-success btn-block" value="welcome">	
  	 			</div>
  	 
     
</div>
</div>
</div>

<script type="text/javascript">
	function check(){
		 if (document.getelementbyid('password').value === document.getelementbyid('conpass').value) {}
		 	document.getelementbyid('message').style.color = "green";
		    document.getelementbyid('message').innerhtml = "passwords do not match";
		    document.getelementbyid('save').disabled  = false;
		}  else {

			document.getelementbyid('message').style.color = "red";
			document.getelementbyid('message').innerhtml = "passwords do not match";
			document.getelementbyid('save').disabled = "true";
		}


	}



</script>


	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	


</body>
</html>