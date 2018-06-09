<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>

    <link rel="stylesheet" type="text/css" href="finale.css">
    <link rel="stylesheet" type="text/css" href="mystyle1.css">

</head>
    <style>


.cd-intro-block a {
  color: #000;
  text-decoration: none;
    font-size:1.5em;
}

.cd-intro-block img {
  max-width: 100%;
}

.cd-btn {
    font-family: "Source Sans Pro", sans-serif;
  display: inline-block;
  padding: 0.5em 1em;
  border-radius: 90em #000;
    border:1px #000;
    opacity: 0.6;
  box-shadow: 0 1px 20px rgba(238, 187, 0, 0.2), inset 0 1px 0 #3e305c;
  color: #ffffff;
  font-size: 0.5rem;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  -webkit-transition: box-shadow 0.2s slide;
  -moz-transition: box-shadow 0.2s;
  transition: box-shadow 0.2s ;
}
.no-touch .cd-btn:hover {
  box-shadow: 0 1px 30px rgba(238, 187, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.4);
}

.cd-img-replace {
  /* replace text with image */
  color: transparent;
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
}

.cd-intro-block {
  position: relative;
  z-index: 2;
  height: 100vh;
  width: 100%;
  background-image: url(coverblue.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
  display:table;
  -webkit-transition: -webkit-transform 0.5s;
  -moz-transition: -moz-transform 0.5s;
  transition: transform 0.5s ease;
  -webkit-transition-timing-function: cubic-bezier(0.67, 0.15, 0.83, 0.83);
  -moz-transition-timing-function: cubic-bezier(0.67, 0.15, 0.83, 0.83);
  transition-timing-function: cubic-bezier(0.67, 0.15, 0.83, 0.83);
}
.cd-intro-block::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  bottom: auto;
  right: auto;
  -webkit-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  -o-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  top: 95%;
  height: 24px;
  width: 24px;
  background: url(arrow-back.svg) no-repeat center center;
  opacity: 0;
  -webkit-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  transition: opacity 0.2s;
}
.cd-intro-block .content-wrapper {
  /* vertical align the .cd-intro-block content */
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.cd-intro-block h1 {
  width: 90%;
  margin: 0 auto .6em;
  font-size: 2.4rem;
  color: #ebebeb;
    opacity: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}




cd-intro-block.projects-visible {
  /* translate the .cd-intro-block element to reveal the projects slider */
  -webkit-transform: translateY(-90%);
  -moz-transform: translateY(-90%);
  -ms-transform: translateY(-90%);
  -o-transform: translateY(-90%);
  transform: translateY(-90%);
  box-shadow: 0 4px 40px rgba(0, 0, 0, 0.6);
  cursor: pointer;
}
.cd-intro-block.projects-visible:after {
  /* show arrow icon */
  opacity: 1;
}
@media only screen and (min-width: 900px) {
  .cd-intro-block::after {
    top: 97.5%;
  }
  .cd-intro-block h1 {
    font-size: 4.4rem;
    font-weight: 200;
  }
  .cd-intro-block.projects-visible {
    -webkit-transform: translateY(-95%);
    -moz-transform: translateY(-95%);
    -ms-transform: translateY(-95%);
    -o-transform: translateY(-95%);
    transform: translateY(-95%);
  }
}




    </style>

<body>


	<?php
	include 'header.php';
	 ?>

    <br/><br/>

   <div id="nalt" class="cd-intro-block">
		<div class="content-wrapper">
			<h1>Squeezebox Portfolio Template</h1>
            <br/> <br/><br/> <br/><br/> <br/><br/> <br/><br/> <br/><br/> <br/><br/><br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
			<a href="#ketu" class='cd-btn' data-action="show-projects" style="align: center; opacity: 1; color: #3e305c" title="Click for more">&#9660;</a>
		</div>

        </div>


        <div id="ketu" class="projects-invisible">

            <br/><br/>
            <br/><br/>
             <div class="monuments mid">
        <p>Monuments</p>
            <h2> <a href="Monument.php" style="text-decoration: none;color: inherit">View more</a></h2>

</div>



<div class="hotels mid">
    <p>Hotels</p>
  <h2><a href="Hotels.php" style="text-decoration: none;color: inherit">View More</a></h2>
</div>

<br style="clear: both;">

    <div class="tourguides mid">
        <p>Travel guide</p>
        <h2><a href="travelguide.php" style="text-decoration: none;color: inherit">View More</a></h2>
</div>

    <div class="festival mid">
        <p>Events</p>
        <h2><a href="EventsAndFestivals.php" style="text-decoration: none;color: inherit">View More</a></h2>
</div>
    <br style="clear: both;">



      <div class="activities mid">
          <p>activities</p>
        <h2><a href="activities.php" style="text-decoration: none;color: inherit">View More</a></h2>
</div>

    <div class="culture mid">
        <p>culture</p>
        <h2><a href="culture.php" style="text-decoration: none;color: inherit">View More</a></h2>
</div>
    </div>


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



	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


<?php include 'footer.php';?>
    </body>
</html>
