<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>

    <title>TravelGuide</title>
	<meta charset ="utf-8">
	<script src="script.js"></script>
    <link rel="stylesheet" href="finale.css"/>
    <link rel="stylesheet" href="guideStyle.css"/>
    <link rel="stylesheet" href="mystyle1.css"/>

</head>
<body>
  <?php
	include 'header.php';
	 ?>







<br/><br/><br/><br/><br/>
    <div>
        <p style="float: right; font-size: 12pt; text-align: center; width: 30%; margin-right: 15%; margin-bottom: 1em;"><a href="appy.php" class="myButton">Tour Guide SignUp/SignIn</a></p>
        <p style="float: right; font-size: 12pt; text-align: center; width:30%;  margin-right: 13%; margin-bottom: 1em;"> <a href="find.php" class="myButton">Find Your Tour Guide</a></p>
    </div>

	<p style="clear: both;">

<div class="slidercontainer">
        <div class="showSlide fade">
            <img src="image/8.jpg" />
            <div class="content"></div>
        </div>
        <div class="showSlide fade">
            <img src="image/2.jpg" />
            <div class="content"></div>
        </div>

        <div class="showSlide fade">
            <img src="image/1.jpg" />
            <div class="content"></div>
        </div>
        <div class="showSlide fade">
            <img src="image/4.jpg" />
            <div class="content"></div>
        </div>
		<div class="showSlide fade">
            <img src="image/5.jpg" />
            <div class="content"></div>
        </div>
		<div class="showSlide fade">
            <img src="image/6.jpg" />
            <div class="content"></div>
        </div>
		<div class="showSlide fade">
            <img src="image/9.jpg" />
            <div class="content"></div>
        </div>
		<div class="showSlide fade">
            <img src="image/3.jpg" />
            <div class="content"></div>
        </div>
		<div class="showSlide fade">
            <img src="image/7.jpg" />
            <div class="content"></div>
        </div>
		<div class="showSlide fade">
            <img src="image/10.jpg" />
            <div class="content"></div>
        </div>

        <a class="left" onclick="nextSlide(-1)">&#10094;</a>
        <a class="right" onclick="nextSlide(1)">&#10095;</a>
    </div>
    
     <p style="float: center; font-size: 12pt; text-align: center;  "><a href="game.php" class="myButton">Play a game</a></p>

    <script type="text/javascript">
        var slide_index = 1;
        displaySlides(slide_index);

        function nextSlide(n) {
            displaySlides(slide_index += n);
        }

        function currentSlide(n) {
            displaySlides(slide_index = n);
        }

        function displaySlides(n) {
            var i;
            var slides = document.getElementsByClassName("showSlide");
            if (n > slides.length) { slide_index = 1 }
            if (n < 1) { slide_index = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slide_index - 1].style.display = "block";
        }

    </script>


    <?php
  	include 'footer.php';
  	 ?>
<br/>

<script type="text/javascript">

var make_button_active = function()
{
  //Get item siblings
  var siblings =($(this).siblings());

  //Remove active class on all buttons
  siblings.each(function (index)
    {
      $(this).removeClass('active');
    }
  )


  //Add the clicked button class
  $(this).addClass('active');
}

//Attach events to menu
$(document).ready(
  function()
  {
    $(".menu li").click(make_button_active);
  }
)

</script>
</body>
</html>
