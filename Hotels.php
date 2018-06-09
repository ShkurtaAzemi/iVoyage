<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> Hotels </title>
    <link rel="stylesheet" type="text/css" href="finale.css">
    <link rel="stylesheet" type="text/css" href="mystyle1.css">
    <link rel="stylesheet" type="text/css" href="hotels.css">
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
<iframe src="https://www.google.com/maps/d/embed?mid=1LEHvOObHcv4KEOEsSS25qTzUo7cNEfQ2" width=100% height="280"></iframe>

<!--Prishtina-->
<fieldset id="Prishtina">
<img src="iVoyage/Hotels/swiss1.jpg"  width=50% alt="Hotel Swiss Diamond Prishtina" style="float:left;margin-right:10px;margin-left:20px;margin-top:20px"/ >
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;font-style:none;color:lightslategrey; text-transform: capitalize;"> swiss diamond prishtina</h1><hr/>
<img src="iVoyage/star5555.jpg"/>
<p><a class="shkurta" href="https://goo.gl/maps/hzuEJUaLoUy" style="font-size:20px;font-style:none;"> <u class="material-icons">&#9830;Prishtin&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic'; font-style:none;font-size:20px">
	Centrally located next to the National Theater and the Parliament Hall, the 5-star Swiss Diamond Hotel Prishtina offers lavishly decorated luxurious accommodation, 2 restaurants and 2 bars.
</p>

    <a href="http://sdhprishtina.com/" class="myButton">Website</a>
</fieldset>h

<fieldset>
<img src="iVoyage/Hotels/emerald.jpg" width=50% alt="Hotel Emerald Prishtina" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey;text-transform: capitalize;"> hotel emerald </h1><hr/>
 <img src="iVoyage/star5555.jpg"/>
<p><a class="shkurta" href="https://goo.gl/maps/ZTapoahzJFq" style="font-size:20px"> <u class="material-icons">&#9830; Prishtin&euml;-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	A 10-minute drive from the centre of Prishtina, this modern 5-star hotel offers 2 restaurants, free Wi-Fi, and 24-hour room service. The large spa area includes an indoor pool and a fitness centre.
</p>
<div class="box2">
<div class="spin">
<a href="http://www.emeraldhotel.info/" class="myButton">Website</a></div></div>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/sirius.jpeg" width=50% alt="Hotel Sirius Prishtina" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey;text-transform: capitalize;"> hotel sirius </h1><hr/>
 <img src="iVoyage/star444.jpg"/>
<p><a class="shkurta" href="https://goo.gl/maps/JMcDkmF4hWQ2" style="font-size:20px"> <u class="material-icons">&#9830;Prishtin&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Centrally located in Pristina and offering a luxurious top-floor restaurant providing unique city views, Hotel Sirius is an excellent place to hold business meetings or relax and enjoy the city.
</p>
<a href="http://www.hotelsirius.net/" class="myButton">Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/hprishtina.jpg" width=50% alt="Hotel Prishtina" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Prishtina</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/7NRS272Ze2v" style="font-size:20px"> <u class="material-icons">&#9830;Prishtin&euml;-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Situated 500 m from Newborn Monument in Pristina, Hotel Prishtina features an indoor swimming pool. Free WiFi is offered throughout the property. Guests can enjoy a meal at the on-site restaurant. Free private parking is available on site.
</p>
<a href="http://www.hotelprishtina.com/home.html" class="myButton">Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/goldenn.jpg" width=50% alt="Hotel Golden" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Golden</h1><hr/>
 <img src="iVoyage/star5555.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/uCKpXiMfXyS2" style="font-size:20px"> <u class="material-icons">&#9830; Prishtin&euml;-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:18px">
	Providing free parking and free Wi-Fi, the centrally located Golden Hotel is within a 5-minute drive from the most of Kosovo's government institutions, UN agencies, European Commission and the Council of Europe offices.
</p>
<a href="http://www.goldenhotel.biz/" class="myButton">Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/nartel.jpg" width=50% alt="Hotel Nartel" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Nartel</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/UTVa8UPJ5Au" style="font-size:20px"> <u class="material-icons">&#9830;Prishtin&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Located in the town of Prishtina, this modern 4-star hotel is just a 10-minute walk from the Kosovo government buildings. It offers free Wi-Fi and air-conditioned rooms.v
</p>
<a href="http://www.hotelnartel.com/Default3.aspx" class="myButton">Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/semitronix.jpg" width=50% alt="Hotel Semitronix" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-size:32px;font-family='Bookman Old Style';color:lightslategrey"> Hotel Semitronix</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://www.google.com/maps/place/Semitronix+HOTEL+Prishtina/@42.6429239,21.1085413,17z/data=!3m1!4b1!4m5!3m4!1s0x13549e0eb19aa873:0xfe9cc227c3ae7062!8m2!3d42.64292!4d21.11073" style="font-size:20px"> <u class="material-icons">&#9830; Prishtin&euml; -View in map</u></a> </p>
<p style="font-family='Century Gothic'; font-size:20px">
Offering a rooftop terrace with an outdoor swimming pool, Semitronix Hotel Prishtina is set about 4 km from the city centre. Free airport shuttle is available. Guests can enjoy an onsite restaurant and a bar. A sauna and fitness centre are also provided.
</p>
<a href="http://www.hotel-semitronix.com/" class="myButton">Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/garden.jpg" width=50% alt="Hotel Garden" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Garden</h1><hr/>
 <img src="iVoyage/star5555.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/4VzMezMdUMH2" style="font-size:20px"> <u class="material-icons">&#9830; Prishtin&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:16px">
Featuring a rooftop restaurant serving international dishes and a panoramic lift, this 5-star hotel is 2 km from the centre of Pristina. Free WiFi access in public areas and free private parking are provided.
All rooms and suites are equipped with a flat-screen TV with an interactive system, air conditioning and a safety deposit box. An espresso machine and a minibar with a selection of drinks and snacks are as well provided. One Illy espresso is offered free of charge.
</p>
<a href="http://hotelgarden-ks.com/" class="myButton" >Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/amazona.jpg" width=50% alt="Hotel Amazona" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Amazona</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
<p><a class="shkurta" href="https://goo.gl/maps/6mFZMsmZiND2" style="font-size:20px"> <u class="material-icons">&#9830; Milloshev&euml;-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	With an ambient where green nature dominates around the building and specialized service in different vocations, especially in event organizing such as cocktails and businss meetings, this hotel in reality offers the feeling of an "amazon".

</p>
<a href="http://www.hotelamazona.com/" class="myButton">Website</a>
</fieldset>


<!--Mitrovica -->

<fieldset id="Mitrovica">
<img src="iVoyage/Hotels/uraegurit.png" width=50% alt="Hotel Ura e Gurit" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
    <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Ura e Gurit</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="http://www.bajraktari-ks.com/location.html" style="font-size:20px"> <u class="material-icons">&#9830; Vushtrri-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
Hotel “URA E GURIT” inaugurate at 2005 is antic and modern style mixture, and with elements of cultural-historical monument of the Stone's Bridge in Vushtrri (builder at XVI century). All these, make this hotel unique in Kosova.
</p>
<a href="http://www.bajraktari-ks.com/location.html" class="myButton" >Website </a>
</fieldset>




<!--Peja-->
<fieldset id="Peja">
<img src="iVoyage/Hotels/dukagjini.jpg" width=50% alt="Hotel Dukagjini" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Dukagjini</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/UwvoEa5WJty" style="font-size:20px"> <u class="material-icons">&#9830;Pej&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Centrally located in Pejë, Hotel Dukagjini features modern accommodation, an indoor pool, steam bath and a gym. Guests can enjoy dining in 3 on-site restaurants. Free Wi-Fi and a private parking are provided.
</p>
<a href="http://hoteldukagjini.com/?lang=en" class="myButton">Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/gold.jpg" width=50% alt="Hotel Gold" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Gold</h1><hr/>
 <img src="iVoyage/star333.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/6TDro3aCwsN2" style="font-size:20px"> <u class="material-icons">&#9830; Pej&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Set in Peje, 13 km from Visoki Dečani Monastery, Hotel Gold provides accommodation with a bar. Each accommodation at the 3-star hotel has mountain views and free WiFi. Rooms include a flat-screen TV with with satellite channels.Peja Old Bazaar is 100 metres from Hotel Gold.
</p>
<a href="https://www.booking.com/hotel/xk/gold-peje.en-gb.html?aid=356980;label=gog235jc-hotel-XX-xk-goldNpeje-unspec-al-com-L%3Aen-O%3AwindowsS10-B%3Achrome-N%3AXX-S%3Abo-U%3AXX-H%3As;sid=09fd8b2222510465412827be9aa4ad27;dist=0&group_adults=2&sb_price_type=total&type=total&" class="myButton" >Website</a>
</fieldset>




<!-- Prizren -->
<fieldset id="Prizren">
<img src="iVoyage/Hotels/theranda.jpg" width=50% alt="Hotel Theranda" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Theranda</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://www.google.com/maps/place/Hotel+Theranda/@42.2099407,20.7389232,17z/data=!3m1!4b1!4m5!3m4!1s0x1353950defb0737d:0xc9e662a77f7cb9ac!8m2!3d42.2099367!4d20.7411119" style="font-size:20px"> <u class="material-icons">&#9830; Prizren-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Featuring an à-la-carte restaurant, Theranda Hotel is located in the very centre of Prizren next to the Lumbardhi river promenade filled with bars and cafés. It offers elegant rooms with a flat-screen TV. The Mediaeval fortress of Kaljaja is 500 m away.
</p>
<a href="http://hoteltheranda.com/" class="myButton">Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/kacinari.jpg" width=50% alt="Hotel Ka&ccedil;inari" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Ka&ccedil;inari</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/qyW7g8GfGR52" style="font-size:20px"> <u class="material-icons">&#9830; Prizren-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Hotel Ka&ccedil;inari with a central location in Prizren, seeks to provide the highest quality of hospitality service. With a professional staff that provides full time care and affection, and a highly skilled kitchen that provides different sorts of specialities, Ka&ccedil;inari has your comfort as its highest concern and goes beyond the call of duty to make sure that no part of its service is found lacking
</p>
<a href="http://hotelkacinari.com/" class="myButton">Website</a>
</fieldset>


<fieldset>
<img src="iVoyage/Hotels/classic.jpg" width=50% alt="Hotel Classic" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Classic</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/ipXfjhE7VCR2" style="font-size:20px"> <u class="material-icons">&#9830; Prizren-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Enjoying a central position in Prizren, next to Bistrica River, Classic Hotel Prizren offers air-conditioned rooms fitted with free WiFi. Shadervan fountain and the Old Stone Bridge are just a short walk away.
</p>
<a href="http://classic-hotel-prizren.com/" class="myButton">Website</a>
</fieldset>

<!--Ferizaj -->

<fieldset id="Ferizaj">
<img src="iVoyage/Hotels/xxl.jpg" width=50% alt="Hotel XXL" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel XXL</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://www.booking.com/hotel/xk/xxl.en-gb.html?aid=356980;label=gog235jc-hotel-XX-xk-gershetaNresort-unspec-al-com-L%3Aen-O%3AwindowsS10-B%3Achrome-N%3AXX-S%3Abo-U%3Asalo-H%3As;sid=09fd8b2222510465412827be9aa4ad27;all_sr_blocks=283483302_107644534_3_1_0;bshb=2;checkin=2017-12-16;checkout=2017-12-17;dest_id=900053450;dest_type=city;dist=0;group_adults=2;hapos=2;highlighted_blocks=283483302_107644534_3_1_0;hpos=2;map=1;room1=A%2CA;sb_price_type=total;srepoch=1513331983;srfid=50cf61691a165569133cb2b908830306a2a3c918X2;srpvid=7a624647f5c401e2;type=total;ucfs=1&#map_opened" style="font-size:20px"> <u class="material-icons">&#9830;Ferizaj -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Set in Ferizaj, Hotel XXL offers air-conditioned rooms with free WiFi. Featuring a 24-hour front desk, this property also provides guests with a children's playground. Gadime Caves is 11 km from the property.
</p>
<a href="https://www.hotelxxl-ks.com/" class="myButton" >Website</a>
</fieldset>


<fieldset>
<img src="iVoyage/Hotels/bolero.jpg" width=50% alt="Hotel Bolero" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Bolero</h1><hr/>
 <img src="iVoyage/star333.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/gZtseKBgzom" style="font-size:20px"> <u class="material-icons">&#9830; Ferizaj-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
Set in Ferizaj, 13 km from Gadime Caves, Bolero Hotel has a number of amenities, including a terrace, a bar and free WiFi. This hotel offers on-site dining. The property provides a 24-hour front desk.
</p>
<a href="http://www.hotel-bolero.com/" class="myButton" >Website </a>
</fieldset>


<fieldset>
<img src="iVoyage/Hotels/lybeten.jpg" width=50% alt="Hotel Lybeten" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Lybeten </h1><hr/>
 <img src="iVoyage/star333.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/Pe2k7PBpEYP2" style="font-size:20px"> <u class="material-icons">&#9830;Ferizaj-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
Offering a terrace and views of the city, Hotel Lybeten is located centrally in Ferizaj. Guests can enjoy the on-site bar.
Every room at this hotel is air conditioned and has a TV. Some units feature a seating area for your convenience. Every room comes with a private bathroom. Hotel Lybeten features free WiFi
</p>
<a href="https://www.facebook.com/Hotel.Lybeten/" class="myButton" >Facebook page</a>
</fieldset>




<!-- Gjilan -->
<fieldset id="Gjilan">
<img src="iVoyage/Hotels/planet.jpg" width=50% alt="Hotel Planet" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Planet</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/5ecA2zwLuXD2" style="font-size:20px"> <u class="material-icons">&#9830; Gjilan-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Set in Gjilan, Hotel PLANET features a bar. This 4-star hotel offers room service. Free WiFi and luggage storage space are featured.
</p>
<a href="http://planet-gjilan.com/" class="myButton">Website</a>
</fieldset>


<fieldset>
<img src="iVoyage/Hotels/vali.jpg" width=50% alt="Hotel Queen Vali Palace " style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Queen Vali Palace</h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/tvY4bWotNbt" style="font-size:20px"> <u class="material-icons">&#9830; Gjilan -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
Queen Vali Palace features a garden, terrace and shared lounge in Prilepnica. This hotel offers a concierge service and free WiFi. Guests can enjoy pizza dishes at the restaurant or have a cocktail at the bar.

The units in the hotel are equipped with a kettle. Queen Vali Palace features some units with mountain views, and rooms come with a private bathroom. At the accommodation, the rooms are fitted with a seating area.
</p>
<a href="http://vali-ranch.com/?id=13&L=2" class="myButton" >Website </a>
</fieldset>


<fieldset>
<img src="iVoyage/Hotels/kalaja.jpg" width=50% alt="Apartments Kalaja" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Apartments Kalaja</h1><hr/>
 <p><a class="shkurta" href="https://www.booking.com/hotel/xk/apartments-kalaja.en-gb.html#map_opened" style="font-size:20px"> <u class="material-icons">&#9830; Novob&euml;rd&euml;-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Located in Novo Brdo near Gracanica, Apartments Kalaja offers log cabins surrounded by nature. Guests can enjoy a restaurant on site and an outdoor dining area. Free WiFi is available in some areas.
</p>
<a href="https://www.booking.com/hotel/xk/apartments-kalaja.en-gb.html" class="myButton">Website </a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/gersheta.jpg" width=50% alt=" G&euml;rsheta Holiday Park" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> G&euml;rsheta Holiday Park</h1><hr/>
 <p><a class="shkurta" href="https://www.booking.com/hotel/xk/gersheta-resort.en-gb.html?aid=356980;label=gog235jc-hotel-XX-xk-gershetaNresort-unspec-al-com-L%3Aen-O%3AwindowsS10-B%3Achrome-N%3AXX-S%3Abo-U%3AXX-H%3As;sid=09fd8b2222510465412827be9aa4ad27;dist=0&group_adults=2&sb_price_type=total&type=total&#map_opened" style="font-size:20px"> <u class="material-icons">&#9830; Novob&euml;rd&euml;-View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
	Located in Novoberdo, G&euml;rsheta Holiday Park is a chalet with free WiFi and units fitted with a kitchenette and terrace.
    Some units include a balcony and/or a patio with mountain views.
</p>
<a href="https://www.booking.com/hotel/xk/gersheta-resort.en-gb.html?aid=356980;label=gog235jc-hotel-XX-xk-gershetaNresort-unspec-al-com-L%3Aen-O%3AwindowsS10-B%3Achrome-N%3AXX-S%3Abo-U%3AXX-H%3As;sid=09fd8b2222510465412827be9aa4ad27;dist=0&group_adults=2&sb_price_type=total&type=total&" class="myButton">Website </a>
</fieldset>
<!-- Gjakova -->
<fieldset id="Gjakova">
<img src="iVoyage/Hotels/jakova.jpg" width=50% alt="Hotel Jakova" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel Jakova </h1><hr/>
 <img src="iVoyage/star333.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/Q573w4rmGGB2" style="font-size:20px"> <u class="material-icons">&#9830; Gjakov&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
Situated in Gjakova, 21 km from Mirusha Waterfalls, Hotel Jakova features a shared lounge. This 2-star hotel offers free WiFi. The property provides a 24-hour front desk.
</p>
<a href="http://www.hoteljakova.com/" class="myButton" >Website</a>
</fieldset>


<fieldset>
<img src="iVoyage/Hotels/jupave.jpg" width=50% alt="Hotel &ccedil;arshia e Jupave" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel &Ccedil;arshia e Jupave</h1><hr/>
 <img src="iVoyage/star333.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/LBSwyMJy6ev" style="font-size:20px"> <u class="material-icons">&#9830; Gjakov&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
Located in Gjakova, 21 km from Mirusha Waterfalls, Hotel Çarshia e Jupave features a bar and rooms with free WiFi access. All rooms boast a flat-screen TV with satellite channels and a private bathroom. The accommodation offers a 24-hour front desk, and luggage storage for guests.
</p>
<a href="http://www.qarshiaejupave.com/" class="myButton" >Website</a>
</fieldset>

<fieldset>
<img src="iVoyage/Hotels/lavilla.jpg" width=50% alt="Hotel La Villa" style="float:left;margin-right:50px;margin-left:20px;margin-top:20px" />
 <h1 style="float:center;font-family='Bookman Old Style';font-size:32px;color:lightslategrey"> Hotel La Villa </h1><hr/>
 <img src="iVoyage/star444.jpg"/>
 <p><a class="shkurta" href="https://goo.gl/maps/hX6iSvTCNUw" style="font-size:20px"> <u class="material-icons">&#9830; Gjakov&euml; -View in map</u></a> </p>
<p style=" font-family='Century Gothic';font-size:20px">
Offering a garden, Hotel La Villa is located in Gjakova, at the entrance of the woods. Free WiFi access is available throughout and you can relax on the terrace with a drink from the bar
</p>
<a href="https://www.facebook.com/pages/Hotel-La-Villa/149766441884988" class="myButton" >Facebook page</a>
</fieldset>

<p align="right" ><a href="#top" > &#8625;Go on top of the page</a></p>

<?php
include 'footer.php';
 ?>

</body>
</html>
