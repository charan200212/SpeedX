
<?php
session_start();
$servername = "localhost"; // server name
$name = "root";
$password = "";  //no password 
$database_name = "project"; //data_base name->project
$con = mysqli_connect("$servername", "$name", "$password", "$database_name" )or die("Connection Failed");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["id"];   //accessing the inputed id from user from input type where input name=id
        // username=id

    $pass = $_POST["pass"]; //accessing the inputed pass from the user from inpu type where input name=pass
    // pass=pass Lhs<-Rhs
    
    $query="select * from login where id='$username' and pass='$pass' ";//select * from tabel_name where condition
    $result = mysqli_query($con, $query);
    $row=mysqli_fetch_array($result);
    $count=mysqli_num_rows($result);
    if ($count > 0) {
    if($row["usertype"]=="admin")
    {
        echo "<script>alert('ADMIN logged In ..👍')</script>";//this is used to display the pop-up window 
        // echo"user";
        // now we need to redirect to our main so wee neet to add window.open()command 
        echo "<script>window.open('admindetails.php','_self')</script>";
        
    }
    else
    if($row["usertype"]=="user")//this differe user_type b/w the ADMIN & The normal user  
    {
        // echo"user";

        echo "<script>alert('EMPLOYEE logged In ..👍')</script>";
        echo "<script>window.open('userdetails.php','_self')</script>";
    }}
    else
    {
        echo "<script>alert('enter proper details please..... :)👍')</script>";
        echo "<script>window.open('login.php','_self')</script>";

    }
}
?>