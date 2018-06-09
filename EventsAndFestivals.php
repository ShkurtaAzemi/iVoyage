<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>
<title>Events and Festivals</title>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="finale.css">
    <link rel="stylesheet" type="text/css" href="mystyle1.css">
    <link rel="stylesheet" type="text/css" href="events.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	<br/>
	<br/>
	<br/>
	<br/><br/>
	<br/><br/>




<div class="ert">
<figure class="events">
<img src="iVoyage/etno.jpg" width="300" height="300">
<figcaption>
<article>
<h1>EtnoFest</h1>
<p>Etno Fest is a cultural event held in Kukaj village during summertime. Artist such as: actors, dancers, musicians, cooks, painters and photographers show their artistic creation under an open sky. One of the most visited areas in EtnoFest is the acting stage where local plays have come alive. Within EtnoFest exists a smaller festival named AgroFest and is specifically made for the traditional Albanian food. The festival usually lasts for 5 to 7 days.</p>
</article>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>





<figure class="events">
<img src="iVoyage/jazz1.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Pristina Jazz Festival</h1>
<p>This festival is known as the most artistic event in Kosovo. It brings together a lot of significant artists from all over the world to flow the local jazz scene. It is held annually in October/ November, in the ODA theatre (Behind Pallati i Rinisë complex), at 20:00. Pristina Jazz Festival has hosted world-famous artists.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html"  onclick="vero()"></a>
</figure>







<figure class="events">
<img src="iVoyage/remusica.jpg"width="300" height="300">
<figcaption>
<section>
<h1>ReMusica</h1>
<p>ReMusica is a festival where a group of talented Albanians from Kosovo led by Rafet Rudi (the initiator of the whole idea) work to promote contemporary music, through presentations of different stylistics tendencies of the 20th century up to the present day. ReMusica, so far, had a lot of famous guest artists from all over the world – from individual ones to collective ensembles.This festival is held every year in May.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="iVoyage/beerfest.jpg"width="300" height="300">
<figcaption>
<section>
<h1>The Pristina Music, Wine and Beer Festival</h1>
<p>The Pristina Music, Wine and Beer Festival is a summer event that is held annually from 30 August to 1 September at Pallati I Rinise. It offers different types of beers and wines for half of the price.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>



<div class="ert">
<figure class="events">
<img src="iVoyage/piano.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Chopin Piano Fest</h1>
<p>The Chopin Piano Fest is a festival held in April every year.It offers opportunity to see and enjoy live piano performances by local and international pianists performing piano works not only of ChopinfEST, but also of other well known composers, classical and contemporary ones.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="iVoyage/dam.jpg"width="300" height="300">
<figcaption>
<section>
<h1>DAM Fest</h1>
<p>DAM Festival is one of the most prominent cultural events in Kosovo,Prishtina. Founded in 2006, DAM is an annual classical and contemporary music festival which gathers young, emerging and distinguished musicians from all over the world. DAM Festival activities consists also special programs dedicated to children with Syndrome Down, Autism and children living in marginalized communities.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="iVoyage/kidsfest.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Pristina Kids Fest</h1>
<p>Is a festival where kids from different places compete. This is a singing competition that is being held in Pristina for the 5th year. This year's festival takes place in the American School of Kosovo on October 24 and then in 21 square on October 2.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="iVoyage/rugova.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Rugova Traditional Games</h1>
<p>Are among the most frequented cultural events in Peja, representing the values inherited throughout the years. Wrestling is the main activity in this program, accompanied by other types of sports, traditional food, and drinks. </p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>




<div class="ert">
<figure class="events">
<img src="iVoyage/anibar.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Anibar</h1>
<p>AniBar International Animation Festival is the only festival in terms of animated movies in Kosovo which takes place during August 9 to 14 in the city of Peja.Anibar Festival is organized by the NGO ' Anibar Group. The purpose of the festival is to show the latest global trends in the field of animated movies to the public Kosovo and the creation of environment for young writers who deal with the creativity of Animated movies.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="iVoyage/park.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Into the Park</h1>
<p>Is a cultural event  which is organized in the city of Peja during June.The festival program consists of musical concerts, training sessions, debates, artistic programs dedicated to the environment, and tourist expeditions.The music program of the festival INTO THE PARK consists of bands, DJs, and visual artists.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero"></a>
</figure>




<figure class="events">
<img src="iVoyage/shqipfilmfest.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Shqip Film Fest</h1>
<p>The project was successfully implemented during the two years in Municipality of Peja, and it was attended by artists, filmmakers and producers from 28 different countries of the world.Festival gives four awards:
Best Actor and Actress,
Best screenplay and animation festival
Price " Faruk Begolli "
and the main award for the best film.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>





<figure class="events">
<img src="iVoyage/accapello.png"width="300" height="300">
<figcaption>
<section>
<h1>Accapello</h1>
<p>Accapello is an international gathering of female choirs, organized by the music school Prenk Jakova. The first edition was held on 29–31 January 2014. <p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>





<div class="ert">
<figure class="events">
<img src="iVoyage/barkamp.jpg"width="300" height="300">
<figcaption>
<section>
<h1>BarCamp Gjakova</h1>
<p>BarCamp Gjakova is a recurrent event which attracts people to hear experts speak on a subject, the theme of which changes at each gathering.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>





<figure class="events">
<img src="iVoyage/digi.jpg"width="300" height="300">
<figcaption>
<section>
<h1>DigiGjakova</h1>
<p>DigiGjakova was a competition that aimed to create solutions that would solve some of the citizens' problems. Software developers gathered for an intense weekend of application development from 21 to 22 November 2015. Its goals were to improve the process of recruiting, the visualization of the budget, and the controlling of invoices. Participants were mentored by eight technology professionals. The three best projects were awarded €4,000 to continue development.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>






<figure class="events">
<img src="iVoyage/perralla1.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Përralla</h1>
<p>Përralla is a music festival which has been held annually in the park of Shkugëz in Gjakovë. The first edition was held during 9–10 May 2014. In 2015, Përralla was held from 7–10 May. The festival featured local singers, bands, DJs and prominent Kosovar musicians.</p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>




<figure class="events">
<img src="iVoyage/komedi.png"width="300" height="300">
<figcaption>
<section>
<h1>Komedia Fest</h1>
<p>Komedia Fest is a comedy festival which ran from 17 March to 23 September 2012, and has been held every year since then. The festival's main center of activity was the Old Bazaar in Gjakovë. Many different plays are put on stage by national theatrical troupes, mostly from the genre of comedy, with the addition of music concerts, handicraft fairs, and art exhibitions. </p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>




<div class="ert">
<figure class="events">
<img src="iVoyage/lyrafest.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Lyra Fest</h1>
<p>Lyra Fest is a traditional and national festival of children's song, hosting child participants from all areas where the Albanian language is spoken, allowing children between the ages 6 and 13 to compete. It has been held since November 2007, in cultural palace 'Asim Vokshi', in Gjakova.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>





<figure class="events">
<img src="iVoyage/poetry.jpg"width="300" height="300">
<figcaption>
<section>
<h1>International Poetry Meeting</h1>
<p>Poets from Gjakova led by Din Mehmeti (193
2–2010) organized the first Meeting of the Poetry in November 1964, on the City Park. The club organized a wider gathering to be held annually on 9 May. The Meeting still continues, and it is the only one of this kind in an Albanian-speaking territory.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>





<figure class="events">
<img src="iVoyage/doku.jpg"width="300" height="300">
<figcaption>
<section>
<h1>Dokufest</h1>
<p>Is an International Documentary and Short Film Festival held in the Kosovo town of Prizren. It is an annual festival held in August. Dokufest was founded in 2002 by a group of friends. It has since grown into a cultural event that attracts international and regional artists and audiences. Films are screened throughout the eight-day festival and accompanied by programs, activities and workshops.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>



<figure class="events">
<img src="iVoyage/ngomfest.jpg"width="300" height="300">
<figcaption>
<section>
<h1>NGOM Fest</h1>
<p>NGOM Fest is a music festival established in Prizren, Kosovo. The main objectives of this festival are to promote new bands and artists, build a new perspective for music festivals in Kosovo, and to connect different ethnic groups in Kosovo and in the region.<p>
</section>
</figcaption>
<a href="EventsAndFestivals.html" onclick="vero()"></a>
</figure>
</div>







<?php
include 'footer.php';
 ?>

<script>
  function vero(){
    alert("this page cannot be loaded");}
  </script>


</body>
</html>
