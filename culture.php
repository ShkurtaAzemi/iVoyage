<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Culture</title>
   <link rel="stylesheet" type="text/css" href="finale.css">
    <link rel="stylesheet" type="text/css" href="mystyle1.css">
    <link rel="stylesheet" type="text/css" href="events.css">
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
	<br/><br/><br/><br/><br/><br/><br/>

    <div class="ert">
<figure class="events">
<img src="image/teatri.jpg" width="300" height="300">
<figcaption>
<article>
<h1>The National Theatre</h1>
<p>The National Theatre, located in the center of Prishtina, has a repertoire
							that consists of many dramatic shows from national and international directors.
							The theatre has produced more than 400 premieres and around 10.000 replays.
							Some of its most notable actors are: Istref Begolli, Muharrem Qena, etc.</p>
</article>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>





<figure class="events">
<img src="image/oda.jpg"width="300" height="300">
<figcaption>
<section>
<h1>ODA Theatre</h1>
<p>The independent ODA Theatre in Prishtina has produced over 60 theatre
							productions of its own, several exhibitions, over 70 concerts and around
							100 guest performances. Its main audience is relatively young, around
							25–35 years of age. Some of its most successful plays are:
							“Mundesi qe u shpagua”, “Dhoma 13”, “Kanuni”, “Endrra e nje nate
							vere”, “Doruntina”.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html"  onclick="vero()"></a>
</figure>







<figure class="events">
<img src="image/dodona.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Dodona Theatre</h1>
<p>Located in Prishtina, it is a theatre for youth, children and puppetry.
							One of its most successful plays of all time is “Pylli eshte i te
							gjitheve”. Until today, 37 premieres have been
							shown, which were seen by half a million viewers. Dodona theatre has been part
							of different festivals and was awarded with a lot of different prizes and
							certificates.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="image/prizreni.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Prizreni theatre</h1>
<p>The Professional Theatre of Prizren is located in the "Farketaret"
							   area in Prizren and has performed a lot of plays since it was founded in 2006. Its
							   first one was in 2007, called "Im Ate Donte Adolfin". Other shows were
							   “Dosja K",“Darka Publike” and “Moncerati”, which was also performed in
							   Albania by 35-40 actors..</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>



<div class="ert">
<figure class="events">
<img src="image/shka.jpg"width="300" height="300">
<figcaption>
<section>
<h1>CAS Agimi</h1>
<p>Cultural-Artistic Society Agimi is the first organization of this character
							   in Kosovo. Its 200 regular members practice and perform activities like:
							   Mix Choir, Folk Orchestra, Literary and Recitative, Painting and Artistic
							   Photos, Entertaining Music and Drama to their audiences, thus presenting
                               a precious part of Prizren and Kosovo's culture.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="image/gjakova1%20-%20Copy.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Gjakova theatre</h1>
<p>Gjakova’s theatre was founded in 1977 by an ensemble of actors. Since
							   the beginning of the work until today, the theatre developed under the
							   influence of the actor Hadi Shehu, who was the director and also a
							   protagonist in the most important plays. The most notable directors in
							   the theatre are: Muharrem Qena, Ekrem Kryeziu, Agim Sopi, Selami Taraku,
							   Ilir Bokshi. </p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="image/gjilani.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Gjilan theatre</h1>
<p>Founded in 1944, the theatre of Gjilan is located in the center of the
                               city and has always been known for organizing scenic artistic shows.
                               It has performed over 150 premieres and 950 replays of all genres.
                               Some of the most notable shows are: "Nje nate e turbullt", "Gjenerali
                               i ushtrise se vdekur", "Hotel Kashta", "Rropollari". </p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="image/abc.jpg"width="300" height="300">
<figcaption>
<section>
<h1>ABC Cinema</h1>
<p>The ABC Cinema is the first cinema in Kosovo with the rights of showing
							   professional movies in the 3D and digital 2D format. The cinema has a
							   warm environment and European standards, and is located in the center of
							   Prishtina. It premieres movies from every genre each month, organizes
							   professional workshops, movie festivals and many cinematographic activities.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>




<div class="ert">
<figure class="events">
<img src="image/cineplexx.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Cineplexx cinema</h1>
<p>Cineplexx is located in the Albi Mall shopping center, it's modern and
							   offers movies with a high quality of sound and video, as well as the 3D
							   technology. It has 6 rooms, each of them has special seats for disabled
							   people. The cinema shows the newest movies just days after their world
							   premiere, with starting times from 12 in the afternoon till late at night. </p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="image/doku.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Dokukino</h1>
<p>DokuKino is a cinema located in the center of Prizren, specifically in
                               the Europa Complex. It's the perfect place to have fun and relax while
                               in Prizren because it's modern, has a good atmosphere and offers movies
                               with starting prices from 3 Euros, while the 3D costs 4 Euros. During
                               the DokuFest festival in the summer, you can enjoy its outdoor cinema.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero"></a>
</figure>




<figure class="events">
<img src="image/philharmony.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Kosovo Philharmony</h1>
<p>The Kosovo Philharmony was formed in 2000, initially as a
                                string ensemble and then as a chamber orchestra. It has 120 members and does most
                               of its performances at the Red Hall in the Youth and Sports Palace in Prishtina.
                               The Philharmony often invites performers from other countries such as Albania
                               and Macedonia.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>





<figure class="events">
<img src="image/baleti.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Kosova ballet</h1>
<p>The first troupe of the Kosovo Ballet was formed in 1972 within the National
                               Theatre of Kosovo. That generation staged many large productions, including:
                               "Sokoli dhe Mirusha", "Bolero", "Romeo dhe Xhulieta", "Don Kishoti", "E bukura More".
                               The ballet, with one of the youngest troupes in the Balkans has performed many successful
                               shows, both modern and classical. <p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>







<?p

include 'footer.php'
/*<footer>
<div id="korniza">
<table cellspacing="20" align="center">
<tr style="color:#3a3333" ; text-align="center">
<th> About us </th>
<th> Con<script>
var string3="Contacts";
var string4=string3.match(/tacts/);
var string5=string4.toString();
document.write(string5);
</script>
</th>
<th> Follow
<script>
var string1="us and our webpage";
var string2=string1.replace("and our webpage","around the web");
document.write(string2);
</script>
</th>
</tr>
<tr>
<td > <span style="color:#3a3333">
Dear travelers, this webpage is made to help you find the best places to visit in Kosovo. This is the first step you take on
getting to know the world that Kosovo has to offer. All around sightseeing, from the beautiful mountains to the waterfalls and
the vintage cities. Amazing christal caves or maybe authentic albanian food at amazing restaurants. From the 5 star luxory hotels to apartment hotels with decent prices and magnificent views. Tour guides only in your service and travel network lines to make your travel easier and more enjoyable.
Kosovo, the <i>voyage</i> you will never forget and memories you'd want to go back over and over again.</span></td>
    <td> <address> <a href="mailto:"> ivoyagekos@gmail.com</a></address><br/>+386 49 123 456 </td>
<td> <a href="https://www.facebook.com/iVoyageKosova/" target="_blank"><img src="iVoyage/fb1.jpg" onmouseover="this.src='iVoyage/fb.jpg'" onmouseout="this.src='iVoyage/fb1.jpg'"></a>
 <a href="https://twitter.com/iVoyageKos" target="_blank"><img src="iVoyage/tw1.jpg" onmouseover="this.src='iVoyage/tw.jpg'" onmouseout="this.src='iVoyage/tw1.jpg'"></a>
<a href="https://www.instagram.com/ivoyagekosova/?hl=en" target="_blank"> <img src="iVoyage/ins1.jpg" onmouseover="this.src='iVoyage/ins.jpg'" onmouseout="this.src='iVoyage/ins1.jpg'"></a></td>
</tr>
<tr>
<td colspan="3" align="center"><u>Copyright</u> &copy; iVoyage, <i> All rights reserved</i></td>
 </tr>
</table>
</div>
</footer>
*/
?>
<br/>
</body>
</html>
