<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Joydeep Dev Nath">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>Sign Up | Project Meteor</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/bootstrap-select.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-select.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	<script src="js/bootstrap-datetimepicker.js"></script>
    		
	</head>

	<!-- HEAD TAG ENDS -->

	
		
		<!------------------------------------------------------------------------------------------------------
		
		
			  ADD CONDITION TO PREVENT USERS FROM SIGNING UP IN CASE THE CHOSEN USERNAME ALREADY EXISTS
			  					USE AJAX TO CHECK AND JQUERY TO DISPLAY AN ERROR MESSAGE
			  					
			  											OR
			  											
			  					ADD CONDITION IN SIGNUP ACTION PAGE TO CHECK FOR EXISTING
			 				  USER WITH SAME USERNAME AND DISALLOW THE USER FROM SIGNING UP.
		
		
		------------------------------------------------------------------------------------------------------->
		
			
				
						
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
		<div class="signup">
				
			<div class="col-sm-12">
					
				<div class="heading text-center">
					Sign Up
				</div>
						
			</div>
			
			<div class="col-sm-6 col-sm-offset-3">
				
				<div class="containerBox">
				
				<form action="signupAction.php" method="POST">
				
					<label for="name">Full Name:</label>
					<input type="text" class="input" name="name" placeholder="Enter your full name here" required>
					
					<label for="email">E-mail:</label>
					<input type="email" class="input" name="email" placeholder="Enter your email here" required>
					
					<label for="phone">Phone:</label>
					<input type="text" class="input" name="phone" placeholder="Enter your phone no. here" required>
					
					<label for="username">Username:</label>
					<input type="text" class="input" name="username" placeholder="Enter a username here" required>
					
					<label for="password">Password:</label>
					<input type="password" class="input" name="password" placeholder="Enter a password here" required>
					
					<label for="repeatPassword">Repeat Password:</label>
					<input type="password" class="input" name="repeatPassword" placeholder="Enter the same password again" required>
					
					<label for="addressLine1">Address Line 1:</label>
					<input type="text" class="input" name="addressLine1" placeholder="Enter your House No./ Flat No. or Apartment No." required>
					
					<label for="addressLine2">Address Line 2:</label>
					<input type="text" class="input" name="addressLine2" placeholder="Enter the name of your Lane, Locality" required>
					
					<label for="city">City:</label>
					<input type="text" class="input" name="city" placeholder="Enter the name of your city here" required>
					
					<label for="addressLine2">State:</label>
					<input type="text" class="input" name="state" placeholder="Enter the name of your state here" required>
					
					<div class="col-sm-12 text-center">
					<input type="submit" class="button" name="signup" value="Sign Up">
					</div>
					
				</form>
				
					<div class="col-sm-12 text-center">
						<div class="loginPrompt">
							Already have an account? <a href="login.php"><span class="dots">Login</span></a> instead.
						</div>
					</div>
				
				</div>
				
			</div>
			
		</div>
		
		</div> <!-- container-fluid -->
		
	</body>
	

	<!-- BODY TAG ENDS -->
	
</html>
	