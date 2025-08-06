<?php
include('Database\condatabase.php');
?>
<?php
   $track=$_POST[$track];

    error_reporting(0);
   //   --> fetching total number of staff  
   $v1="SELECT * FROM courier Where parcel_id='$track'";
   //    selecting from the table empoloyee
      $r1=mysqli_query($con,$v1);
      $h1 = mysqli_num_rows($r1);
   //    this command is used show the total number counts

?>
<?php
echo "$r1";
?>