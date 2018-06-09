<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Monuments</title>
	<link rel="stylesheet" type="text/css" href="mystyle1.css">
	<link rel="stylesheet" type="text/css" href="finale.css">
	<link rel="stylesheet" type="text/css" href="MonumentSlidee.css">
	<link rel="stylesheet" type="text/css" href="monument.css">
</head>

<body>
  <?php
	include 'header.php';
	 ?>




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




<br/><br/><br/><br/><br/>
	  <fieldset style="padding:20px; margin:20px;   ">
	<p class="vesyll" style="width:100%; text-align:center; font-family:Bookman Old Style;">Select the city of Kosovo that you wanna visit :

	<select onchange="la(this.value)" style="font-family:Bookman Old Style;" >

	<option disabled selected>  City   </option>

	<option value="Prishtina.html" > Prishtina  </option>

	<option value="mitrovica.html"> Mitrovica</option>

	<option value="Peje.html"> Peja     </option>

	<option value="Prizreni.html"> Prizreni  </option>

	<option value="Ferizaj.html"> Ferizaji  </option>

	<option value="Gjilan.html"> Gjilani   </option>

	<option value="Gjakova.html"> Gjakova </option>

	</select>
	  </fieldset>
	<script>


	</script>

	<div class="slidercontainer">
        <div class="showSlide fade">
            <img src="iVoyage/Monument/DeçanMonastery-Deçan1.jpg" />
            <div class="content">Deçan Monastery - Deçan</div>
        </div>
        <div class="showSlide fade">
            <img src="iVoyage/Monument/SleepingBeautyCave-Radavc1%5B1149%5D.jpg" />
            <div class="content">"Sleeping Beauty" Cave - Radavc</div>
        </div>

        <div class="showSlide fade">
            <img src="iVoyage/Monument/NationalLibrary-Prishtin%C3%AB1.jpg" />
            <div class="content">National Library - Prishtinë</div>
        </div>
        <div class="showSlide fade">
            <img src="iVoyage/Monument/TabakBridge-Gjakovë1.jpg" />
            <div class="content">Tabak Bridge - Gjakovë</div>
        </div>

        <a class="left" onclick="nextSlide(-1)">&#10094;</a>
        <a class="right" onclick="nextSlide(1)">&#10095;</a>
    </div>

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

            i=0;
            while(i < slides.length)
			{
                slides[i].style.display = "none";
                i++;
            }
            slides[slide_index - 1].style.display = "block";
        }
    </script>
	<div>
	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="image/LidhjaePrizrenit1.jpg">
		  <img src="image/LidhjaePrizrenit1.jpg" alt="Trolltunga Norway" width="300" height="200">
		</a>
		<div class="desc">Prizreni</div>
	  </div>
	</div>


	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="image/EthnographicMuseumGJ1.jpg">
		  <img src="image/EthnographicMuseumGJ1.jpg" alt="Forest" width="600" height="400">
		</a>
		<div class="desc">Gjakova</div>
	  </div>
	</div>

	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="image/EthnologicalMuseumP1.jpg">
		  <img src="image/EthnologicalMuseumP1.jpg" alt="Northern Lights" width="600" height="400">
		</a>
		<div class="desc">Prishtina</div>
	  </div>
	</div>

	<div class="responsive">
	  <div class="gallery">
		<a target="_blank" href="image/EthnographicMuseumGJ11.jpg">
		  <img src="image/EthnographicMuseumGJ11.jpg" alt="Northern Lights" width="600" height="400">
		</a>
		<div class="desc">Prishtina</div>
	  </div>
	</div>
	<p style="clear: both;">
	</div>

	<div style="margin:10px">

	<fieldset>

	<p class="trosha" style=" float: right; font-size:10px; text-align:  center;  margin-right: 10%; margin-bottom: 1em;" >
	<h2>Impressions of tourists that have visited Kosovo</h2><br/>
	<ul>
	<li>
	<blockquote class ="gure" cite="https://www.wanderlustingk.com/travel-blog/beautiful-kosovo-photos" style="font-size: 15px;font-style:code;" >
Kosovo was one of those countries that made me wish that I had all the time in the world to experience every country.
 With on time buses, ridiculously friendly locals who spoke great English who occasionally gave us free dessert, beautiful mountains,
 amazing architecture, a fascinating history, small distances between
 its major cities, and low prices, Kosovo is the perfect country for travelers interested in diving into Balkan culture and history
 </blockquote>
 </li>
 <li>
 <blockquote class="gure" cite="https://www.goatsontheroad.com/6-reasons-visit-kosovo-top-backpacker-destination/" style="font-size: 15px;font-style:code;">
 We had been in the Balkans for a few weeks before arriving in Kosovo and didn’t think the hospitality could get any better. But Kosovo raised the bar. The locals we encountered during our short stay in Kosovo were some of the friendliest people we have met during our travels.
 </blockquote>
 </li>
 <li>
 <blockquote class="gure" cite="https://www.goatsontheroad.com/6-reasons-visit-kosovo-top-backpacker-destination/" style="font-size: 15px;font-style:code;">
 Everything is as cheap as you’ll find in Europe. A beer should cost no more than 1.50 euro. You can usually find a meal for less than 5 euro per person (and that’s at a ‘fancy’ restaurant). A burek or cevapcici sandwich will only cost a couple of euros. Plus, most attractions are free of charge!
 </blockquote>
 </li>
 <li>
 <blockquote class="gure" cite="https://www.goatsontheroad.com/6-reasons-visit-kosovo-top-backpacker-destination/" style="font-size: 15px;font-style:code;">
 No joke, Kosovo makes some of the best coffee we have ever tasted. And we’re from Melbourne, which makes us total coffee snobs. Kosovo’s specialty is espresso macchiatos. The cobble stoned streets of Prizren are a great place to sit in the sun with a tiny cup of deliciousness, and watch the world go by. You will be joined by plenty of locals, especially on weekends. Coffee is a way of life here!
 </blockquote>
 </li>
 </ul>


        <p>
    </fieldset>
	 <p style="clear: both;">
	</div>


  <?php
	include 'footer.php';
	 ?>




</body>
</html>
