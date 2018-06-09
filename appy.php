<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<?php
require 'iVoyageRegister/db.php';//e lidhum formen me php fajllin i cili krijon lidhje me databazen
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>ApplyGuide</title>



	<link rel="stylesheet" href="iVoyageRegister/css/style.css"/>
	<link rel="stylesheet" href="guideStyle.css"/>
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
	<!--Ajax-->
	<script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("sugg").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("sugg").innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

</head>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	if(isset($_POST['login']))//nese klikohet butoni login
	{
		require 'iVoyageRegister/login.php';//nese klikohet butoni submit
	}
	elseif (isset($_POST['register'])) {

		//shkruarja ne files
		$firstName=$_POST['firstname'];
		$lastName=$_POST['lastname'];
		$guideEmail=$_POST['email'];

		$registerFile=fopen("registerFile/registeredGuides.txt","a+") or die ("file not open");

		$register="\r".date('H:i, jS F Y')." => Guide: ".$firstName." ".$lastName." , Email: ".$guideEmail.PHP_EOL;
		fwrite  ($registerFile,$register);
		fclose($registerFile);

		//validimi i emrit dhe imelles
		if(!empty($_POST["firstname"]))
		{
				$emri = $_POST["firstname"];
	    // check if name only contains letters and whitespace
	    	if (!preg_match("/^[a-zA-Z ]*$/",$emri)) {
				$_SESSION['message'] = 'Only letters allowed in Name!';
				header("location: iVoyageRegister/error.php");
			}
		}
		if(!empty($_POST["lastname"]))
		{
				$mbiemri = $_POST["lastname"];
			// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z ]*$/",$mbiemri)) {
				$_SESSION['message'] = 'Only letters allowed in LastName!';
				header("location: iVoyageRegister/error.php");
			}
		}
		if(!empty($_POST["email"]))
		{
				$imella = $_POST["email"];

	    	if (!filter_var($imella, FILTER_VALIDATE_EMAIL)) {
				$_SESSION['message'] = 'Invalid email format';
				header("location: iVoyageRegister/error.php");
			}
		}

		require 'iVoyageRegister/register.php';// nese klikohet butoni submit per regjistrim athere thirret skripta register.php


	}
}

?>
<body>
	<?php include 'header.php' ?>



<br/><br/><br/><br/><br/>
    <div>
			<p style="float: right; font-size: 12pt; text-align: center; width: 30%; margin-right: 15%; margin-bottom: 1em;"><a href="appy.php" class="myButton">Tour Guide SignUp/SignIn</a></p>
			<p style="float: right; font-size: 12pt; text-align: center; width:30%;  margin-right: 13%; margin-bottom: 1em;"> <a href="find.php" class="myButton">Find Your Tour Guide</a></p>
    </div>

		<div class="form">

	      <ul class="tab-group">
	        <li class="tab"><a href="#signup">SIGN UP</a></li>
	        <li class="tab active"><a href="#login">LOG IN</a></li>
	      </ul>

	      <div class="tab-content">

	         <div id="login">

			  <!--Trashegimia-->
	          <h1>
			  <?php
			  class We{
			      public static function w(){
				  echo "Welcome";
			      }
			  }
			  class Ba extends We{
			      public static function b(){
				  echo " Back!";
			      }
			  }
			  echo We::w();
			  echo Ba::b();
			  ?>
		 </h1>

	          <form action="appy.php" method="post">

	            <div class="input">

	              <input type="text" name="email" required placeholder="Email"/>
	            </div>
	            <div class="input">

	              <input type="password" name="password" required placeholder="Password"/>
	            </div>

	            <p class="forgot"><a href="iVoyageRegister/forgot.php">Reset / Forgot Password?</a></p>

	            <button class="button button-block" name="login" >Log In</button>

	          </form>


	        </div>

	        <div id="signup">
	          <h1>
			    <!--Konstruktori dhe destruktori-->
			<?php

			class Su {
			    function __construct() {
				print "Sign Up for Free\n";
			    }
			}

			class Ff extends Su {
			    function __destruct() {
				parent::__construct();
			    }
			}

			$obj = new Ff();
			?>

		  </h1>

	          <form action="appy.php" method="post" enctype="multipart/form-data">
							<div class="s-input" style="float:right;">
								<label >Upload image:</label>
								<input type="file"  accept="image/*" name="userImage" multiple="false" id="finput" onchange="upload(this)" >
								<div class="img-wrap">

									<img id="blah" src="#" alt="Please insert a picture of yourself" style="height:200px;margin-left:100px;"/>
								</div>
							</div>

							<div class="input_group">

								<div class="s-input">
									<label for="text_field">First Name:</label>
							    <input type="text" id="name" placeholder="Required" onkeydown="color('blue')" maxlength="30" autofocus onkeyup="color('white')" required name="firstname">
									<?php //name="emri"? me i kqyr qysh i kan emrin variablat te iVoyage per arsye te databazes ?>
								</div>

								<div class="s-input">
									<label for="text_field">Last Name:</label>
							    <input type="text" id="name" placeholder="Required" onkeydown="color('blue')" maxlength="30" autofocus onkeyup="color('white')" required name="lastname">
								</div>

								<div class="s-input">
									<label for="text_field">Email:</label>
							    <input type="text" id="name" placeholder="Required" onkeydown="color('blue')" maxlength="50" autofocus onkeyup="color('white')" required name="email">
								</div>

								<div class="s-input">
									<label for="field-password">Password :</label>
						      <input type="password" class="password" id="field-password" required placeholder="Required" name="password"/>
								</div>

								<div class="s-input">
									<!--Ajax-->
									<label> Birthplace:</label>
									<input type="text" onkeyup="showHint(this.value)" name="birthplace"/>
									<p id="sugg" style="color:white"></p>
								</div>

								<div class="s-input">
									<label for="text_area">Birthday:</label>
						    <input type="date" id="text_field_readonly" name="birthday" min="1997-01-01"/>
								</div>

								<div class="s-input">
									<label for="field-email">Telephone:</label>
						      <input type="tel" id="tel" placeholder="003..." name="telephone" required pattern="[0-9]{9}" />
								</div>
						</div>

							<div class="s-input">
								<label>Sex: </label>
								<input type="radio" class="radio" name="gender" value="male" /><label>Male</label>
								<input type="radio" class="radio" name="gender" value="Female" /><label>Female</label>
							</div>

							<div class="s-input">
								<label>The languages you speak: </label>
				        <input type="checkbox" class="checkbox" name="language[]" value="albanian" /><code>Albanian</code>
				        <input type="checkbox" class="checkbox" name="language[]" value="english" /><code>English</code>
				        <input type="checkbox" class="checkbox" name="language[]" value="french" /><code>French</code>
				        <input type="checkbox" class="checkbox" name="language[]" value="turkish" /><code>Turkish</code>
								<input type="checkbox" class="checkbox" name="language[]" value="serbian" /><code>Serbian</code>
								<input type="checkbox" class="checkbox" name="language[]" value="other" /><code>Other</code>
							</div>

							<div class="s-input">
								<label>Tour Guide Of: </label>
								<input list="city" id="text_field_readonly" name="city">
								<datalist id="city">
								<option value="Pristina">
								<option value="Mitrovica">
								<option value="Peja">
								<option value="Prizereni">
								<option value="Ferizaji">
								<option value="Gjilani">
								<option value="Gjakova">
								<option value="Other...">
								</datalist>
							</div>

							<div class="s-input">
								<label>Transport included: </label>
				        <input type="radio" class="radio" name="transport" value="Yes" /><label>Yes</label>
				        <input type="radio" class="radio" name="transport" value="No" /><label>No</label>
							</div>

							<div class="s-input">
								<label for="field-number">Salary:</label>
					      <input type="number"  min="0" max="300" step="10" value="0" name="salary"/>
								<label>€</label>
							</div>

							<div class="s-input">
								<label for="text_field">Please input years of experience:</label>
							  <input type="text" id="get-value" value= "" name="experience"/>
							</div>

							<div class="s-input">
								<label for="text_area">Please say something about your experience:</label>
						    <textarea id="text_area" placeholder="Write your message..." name="about"></textarea>
							</div>

							<div class="s-input">
								<input class="s-button" name="register" type="submit" value="Submit" />
					      <input class="s-button" type="reset" value="Clear" />
							</div>

	          </form>


	        </div>

	      </div>

	    </div>
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script>
	$('.tab a').on('click', function (e) {

	    e.preventDefault();

	    $(this).parent().addClass('active');
	    $(this).parent().siblings().removeClass('active');

	    target = $(this).attr('href');

	    $('.tab-content > div').not(target).hide();

	    $(target).fadeIn(600);

	});

	function upload(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	</script>
	<?php
	include 'footer.php';
	 ?>


</body>

</html>
