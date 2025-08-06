
<?php
include('Database\condatabase.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="DELETE FROM `employee` WHERE `id`='$id'";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<script>alert('One row deleted ..👍')</script>";
        echo "<script>window.open('adminemployee.php','_self')</script>";
    }
    else
    {
        echo"try again";
    }
}
?>
<?php

?>