<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html>
<head>

    <title>TravelNetwork</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="finale.css" />
    <link rel="stylesheet" href="guideStyle.css" />
    <link rel="stylesheet" href="mystyle1.css" />

    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "script1.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>

</head>

<body>
    <?php
        include 'header.php'
    ?>

<br/><br/><br/><br/><br/>
    <div>
        <p style="float: right; font-size: 12pt; text-align: center; width: 30%; margin-right: 15%; margin-bottom: 1em;"><a href="appy.php" class="myButton">Tour Guide SignUp/SignIn</a></p>
        <p style="float: right; font-size: 12pt; text-align: center; width:30%;  margin-right: 13%; margin-bottom: 1em;"> <a href="find.php" class="myButton">Find Your Tour Guide</a></p>
    </div>
    <br />
    <br />
    <br />
    <br />
    <fieldset style="padding:20px; margin:20px;   ">
	    <p class="vesyll" style="width:100%; text-align:center; font-family:Bookman Old Style;">Select the city of Kosovo that you wanna visit :

        <form style="width:100%; text-align:center; font-family:Bookman Old Style float="center";">
            <select name="users" onchange="showUser(this.value)">
                <option value="">--Select the City--</option>
                <option value="Pristina">Prishtine</option>
                <option value="Mitrovica">Mitrovice</option>
                <option value="Peja">Peje</option>
                <option value="Prizereni">Prizeren</option>
                <option value="Ferizaji">Ferizaj</option>
                <option value="Gjilani">Gjilan</option>
                <option value="Gjakova">Gjakove</option>
            </select>
        </form>
    </fieldset>
        
        <br>
        <div id="txtHint"></div>
        <br />
        
        <br />
        <!-- butoni per leximin e te dhenave nga fajlli-->
        <form action="find.php" method="post">
          <input type="submit" name="reveal" value="Show" class="myButton" style="float: center; font-size: 12pt; text-align: center; width:10%; margin-left:46% "/>
        </form>
         <?php //leximi i te dhenave nga fajlli
          if(isset($_POST['reveal']))
          {
            echo"<table border='1' style='border-collapse:separate; border-spacing:2; width:40%;'>";
            $registered=fopen("registerFile/registeredGuides.txt","r");
            while(!feof($registered))
            {
              echo"<tr><td>".fgets($registered)."</tr></td>"; //Shtojme rresht ne tabele per qdo te dhene te re
            }
            echo"</table>";
            fclose($registered);
          }
        ?>
    <br/>
    <br/>
<?php include 'footer.php' ?>
</body>
</html>
