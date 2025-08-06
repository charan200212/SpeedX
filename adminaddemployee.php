
<?php
if(isset($_POST['add']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $mobile=$_POST['number'];
    $salary=$_POST['salary'];
    $sql="INSERT INTO `employee`(`id`, `name`, `mobile`, `salary`) VALUES ('$id','$name','$mobile','$salary')";
    // $sql="insert into employee('id','name','mobile','salary') values( '$id','$name','$mobile','$salary')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<script>alert(Employee details added)</script>";
        echo "<script>window.open('addemp.php','_self')</script>";

    }
    else
    {
        die(mysqli_error($con));
    }
}
?>
