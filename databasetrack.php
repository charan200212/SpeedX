
<?php
include('Database/condatabase.php');
$servername = "localhost";
$name = "root";
$password = "";
$database_name = "project";
$con = mysqli_connect("$servername", "$name", "$password", "$database_name" )or die("Connection Failed");

// $track=$_POST['$track'];
// if (isset($_POST['id'])) 
// {
//     $value=$_POST['id'];
//     $query = "select * from courie";
//     $result = mysqli_query($con, $query);
//     $count = mysqli_num_rows($result);
//     if ($coun > 0) {
//         if ($row = mysqli_fetch_assoc($result)) {
//             echo $row['parcel_id'] . "" . ['parcel_to'];
//         }
//     }
// }
?>
<?php

?>
<!-- where id='$track' -->