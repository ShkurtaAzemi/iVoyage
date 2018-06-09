<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'accounts';
$con = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
<!DOCTYPE html>
<html>
<head>
    <style>
         table {
            width: 100%;
            border-collapse: collapse;
        }

         table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

         th {
            text-align: left;
        }
    </style>
</head>
<body>

    <?php
    $q = strval($_GET['q']);

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM info I,users U WHERE I.id=U.id and City = '".$q."'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)){

            echo '<table >';

            echo

            '<tr><td rowspan="4"><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width=30% /></td><th colspan="3">'.$row['first_name']." ".$row['last_name'].'</th></tr>'.
            '<tr><td >Birthplace: '.$row['birthplace'].'</td><td >TourGuide of: '.$row['city'].'</td><td >Salary: '.$row['salary'].'</td></tr>'.
            '<tr><td >Birthday: '.$row['birthday'].'</td><td >Language: '.$row['languages'].'</td><td >Telephone: '.$row['telephone'].'</td></tr>'.
            '<tr><td >Gender: '.$row['gender'].'</td><td >Transport Icluded: '.$row['transport'].'</td><td >E-mail: '.$row['email'].'</td></tr>';

            echo '</table>';

        }
    }else{
        echo "There are no tour guide";
    }
    mysqli_close($con);
    ?>
</body>
</html>
