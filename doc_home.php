<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Consultopedia</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="doctor.php" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required/>
            </div>
			<br>
			<div style="float:left;color:#757678">
              I'm a :<label for="userType"> <input type="radio" id ="userType" value="Doctor" />  Doctor&nbsp;<label for="userType"> <input type="radio" id = "userType" value="Patient" /> Patient&nbsp;
              <label for="userType"> <input type="radio" id ="userType" value="Pharmacist" /> Pharmacist</label>&nbsp;
          </div>
			<br>			
            <input type="submit" value="Login" class="btn solid" />
          </form>
          
		  
		  
		  <form action="doctor.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
			<div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="Name" placeholder="Name" required/>
            </div>
			<div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="Email" placeholder="Email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-user-plus"></i>
              <input type="text" name="username1" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password1" placeholder="Password" required/>
            </div>
			<br>
			<div style="float:left;color:#757678">
        	    I'm a : 
				<input type="radio" name="userType1" value="Doctor" required/><label for="userType1">  Doctor</label>&nbsp;
				<input type="radio" name="userType1" value="Patient" required/><label for="userType1"> Patient</label>&nbsp;
				<input type="radio" name="userType1" value="Pharmacist" required/><label for="userType1">  Pharmacist</label>&nbsp;			
			</div>
			<div class="input-field">
              <i class="fas fa-address-card"></i>
              <input type="text" name="license" placeholder="License No." />
            </div>
			<input type="submit" class="btn" name="signup" value="Sign up"/>
          </form>
        </div>
      </div>
      
	  
	  
	  <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <p>
              Consultopedia - Improving the quality of medical care by reducing errors in drug dispensing and administration.
            </p><br>
			<h3>New here ?</h3><br>
            <button class="btn1" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <p>
              Avail accurate digital prescriptions with Consultopedia.
            </p><br>
			 <h3>One of us ?</h3><br>
            <button class="btn1" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
