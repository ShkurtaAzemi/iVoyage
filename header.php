<link rel="stylesheet" type="text/css" href="finale.css">
<link rel="stylesheet" type="text/css" href="mystyle1.css">
<style>
.sign {




background-color: #b7b7b7;
height: 30px;
width:40px;
border-radius: 10px;
text-decoration: none;
color: #000;

}
.sign a:hover{
  color:#786a93;
}
</style>
<header>

  <nav>
    <div>
      <li  class="logo"><img   src="image/ogoll.png" href="index.php" <?php if ($page == 'index.php') { echo ' class="active"'; } ?>></a></li>
      <ul class="menu">
      <li ><a  href="index.php" <?php if ($page == 'index.php') { echo ' class="active"'; } ?>>Home</a></li> <?php //class="active" ?>
      <li ><a href="Monument.php" <?php if ($page == 'Monument.php') { echo ' class="active"'; } ?>>monuments</a></li>
      <li ><a  href="Hotels.php" <?php if ($page == 'Hotels.php') { echo ' class="active"'; } ?>>Hotels </a></li>
      <li> <a href="travelguide.php" <?php if ($page == 'travelguide.php' || $page == 'find.php' || $page == 'appy.php') { echo ' class="active"'; } ?>> Tour Guides</a> </li>
      <li><a href="EventsAndFestivals.php" <?php if ($page == 'EventsAndFestivals.php') { echo ' class="active"'; } ?>>Events</a></li>
      <li><a href="activities.php" <?php if ($page == 'activities.php') { echo ' class="active"'; } ?>>Activities</a></li>
      <li><a href="culture.php" <?php if ($page == 'culture.php') { echo ' class="active"'; } ?>>Culture</a></li>
      <?php
       /*<li><a href="iVoyage/index.php" class="sign" <?php if ($page == 'iVoyage/index.php') { echo ' class="active"'; } ?>><b>Guide SignUp/SignIn</b></a></li>
       */
      ?>
      </ul>

    </div>

  </nav>

</header>
