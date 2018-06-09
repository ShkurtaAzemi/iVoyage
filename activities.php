<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Activities</title>

    <link rel="stylesheet" type="text/css" href="hoveractivities.css">
    <link rel="stylesheet" type="text/css" href="mystyle1.css">
    <link rel="stylesheet" type="text/css" href="finale.css">
		<link rel="stylesheet" href="guideStyle.css"/>
</head>
    <style>


        body{
             margin: 0;
  background:url(iVoyage/mali.jpg) ;
        }


    </style>
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

        <br/><br/><br/><br/>
          <br/>
        <br/>
        <div>
<a class="btn-draw" href="Hiking.html" style="float:right;margin-right:683px;margin-top:10;"><span>Do you want to see the upcoming events on <i> hiking </i>beautiful mountains and be rewarded with stunning landscapes?  Here is a guide to outdoor adventures in Kosova.</span></a>


        <a class="btn-draw" href="night.html" style="float:left;margin-left:683px"  ><span >Spend the night camping under the velvet skies filled with <i>constellations</i>.Here are the places you can stargaze the night sky in Kosova.</span></a>
        </div>





        <br/>        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <br/>        <br/>


        <br/>        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/> <br/>
        <br/>
        <br/> <br/>
        <br/>
        <br/>


				<p style="float: center; font-size: 12pt; text-align: center;  "><a href="game.php" class="myButton">Play a game</a></p>

				<?php
				include 'footer.php';
				 ?>

    </body>
</html>
