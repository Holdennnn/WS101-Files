<!DOCTYPE html>
<html>
<head>

	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="pswd" placeholder="Password">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
				
					<label for="chk" aria-hidden="true">Login</label>
					
					<input type="text" name="txt" placeholder="Username" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					

					<button><a href="dashboard">Login</a></button>
          
				</form>
        <label for="chk" aria-hidden="true">Click Login</label>
			</div>
	</div>
</body>
</html>