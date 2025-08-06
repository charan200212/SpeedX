
<?php
if(isset($_POST['save']))
{
    $a=$_GET['parcel_id']; 
        // echo"$a";
        $name=$_POST['coustmer_name'];
        $from=$_POST['parcel_from'];
        $to=$_POST['parcel_to'];
        $fdate=$_POST['from_date'];
        $ddate=$_POST['delivery_date'];
        $whom=$_POST['parcel_whom'];
        $amount=$_POST['parcel_amount'];
        $number=$_POST['coustmer_name'];
        $email=$_POST['email'];
        $status=$_POST['parcel_status'];

        $sql="UPDATE `courier` 
        SET
        `coustmer_name`='$name',`parcel_from`='$from',`parcel_to`='$to',`from_date`='$fdate',`delivery_date`='$ddate',`parcel_whom`='$whom',`parcel_amount`='$amount',`coustmer_number`='$number',`email`='$email',`parcel_stauts`='$status' 
        WHERE`parcel_id`='$a' "; 

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('One row updated ..👍')</script>";
            // echo "<script>window.open('adminorderdetails.php','_self')</script>";
            
        }
        else echo"failed"  .mysqli_error($con);
    
} 
?>