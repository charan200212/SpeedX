

<?php
    include('Database\condatabase.php');
     if (!empty($_POST['save'])) 
    {
        $id=$_POST['parcel_id'];
        $name=$_POST['coustmer_name'];
        $from=$_POST['parcel_from'];
        $to=$_POST['parcel_to'];
        $fdate=$_POST['from_date'];
        $ddate=$_POST['delivery_date'];
        $whom=$_POST['parcel_whom'];
        $amount=$_POST['parcel_amount'];
        $number=$_POST['coustmer_number'];
        $email=$_POST['email'];
        $status=$_POST['parcel_status'];
        if(preg_match("/^[a-zA-Z0-9,_-]+@[a-zA-Z0-9_]+\.[a-zA-z.]{2,5}$/",$email))
        {   
            // echo "<script>alert('valid ID ..👍')</script>";
            $sql="INSERT INTO `courier`(`parcel_id`, `coustmer_name`, `parcel_from`, `parcel_to`, `from_date`, `delivery_date`, `parcel_whom`, `parcel_amount`, `coustmer_number`, `email`, `parcel_stauts`) 
            VALUES
            ('$id','$name','$from','$to','$fdate','$ddate','$whom','$amount','$number','$email','$status')";
            $result=mysqli_query($con,$sql); 
        
            if($result)
            {
                echo "<script>alert('One row Added ..👍')</script>";
                echo "<script>window.open('adminorderdetails.php','_self')</script>";
            
            }
            else echo"failed"  .mysqli_error($con);
        }
        else{
            echo "<script>alert('please do proper validation👍')</script>";
            echo "<script>window.open('adminnewderdetails.php','_self')</script>";

        }
    }  
?>