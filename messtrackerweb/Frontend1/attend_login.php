<!DOCTYPE html>
<html>
<head>
	<title>login attendant</title>
	<link rel="stylesheet" type="text/css" href="styleloginstudent.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styleattendance.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
		  <img class="logo" src="../img/logo2.png" alt="logo" srcset="" />
		  <button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="Toggle navigation"
		  >
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link" aria-current="page" href="index1.html"><button="sand">Home</button></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="index1.html"><button="sand">Team</button></a>
			  </li>
			  
			</ul>
			
		  </div>
		</div>
	  </nav>
	<div class="container">
		<div class="img">
			<img src="../img/Capture1-removebg-preview (2).png">
		</div>
		<div class="login-content">
			<form action="../backend/attendantlogincheck.php" method="post">
				<img src="../img/undraw_pic_profile_re_7g2h.svg">
				<h2 class="title">WELCOME ATTENDANT</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" placeholder="UserID" class="input" name="userid">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	
           		    	<input type="password" placeholder="Password"  class="input" name="password">
            	   </div>
            	</div>
            	<!-- <a href="#">Forgot Password?</a> -->
            	<input type="submit" class="btn" value="Login" name="submit">
            </form>
        </div>
    </div>
    
</body>
</html>
