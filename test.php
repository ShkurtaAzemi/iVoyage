<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>


<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'iVoyageRegister/css/css.html'; ?>
</head>

<link rel="stylesheet" type="text/css" href="finale.css">
<link rel="stylesheet" type="text/css" href="mystyle1.css">


<body>
  <?php include 'header.php' ?>

  <br/><br/><br/><br/><br/>
      <div>
          <p style="float: right; font-size: 12pt; text-align: center; width: 30%; margin-right: 15%; margin-bottom: 1em;"><a href="appy.php" class="myButton">Apply For Tour Guide</a></p>
          <p style="float: right; font-size: 12pt; text-align: center; width:30%;  margin-right: 13%; margin-bottom: 1em;"> <a href="find.php" class="myButton">Find Your Tour Guide</a></p>
      </div>
  <h1 style="color:black;">Tour guide</h1>
  <div class="form">

      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">

         <div id="login">
          <h1>Welcome Back!</h1>

          <form action="index.php" method="post" autocomplete="off">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

          <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

          <button class="button button-block" name="login" >Log In</button>

          </form>

        </div>

        <div id="signup">
          <h1>Sign Up for Free</h1>

          <form action="index.php" method="post" autocomplete="off">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>

          <button type="submit" class="button button-block" name="register" >Register</button>

          </form>

        </div>

      </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
