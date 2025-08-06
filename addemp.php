
<?php
include('Database\condatabase.php');   
// $con=mysqli_connect("localhost","root","","project"); 
// if($con)
// {
//     echo"data base connected";
// }
// else
// {
//     echo"failed";
// } 
if(isset($_POST['save']))
{
    // $a=$_GET['id']; 
        // echo"$a";
        $id=$_POST['id'];
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $salary=$_POST['salary'];
        $sql="INSERT INTO `employee`(`id`, `name`, `mobile`, `salary`) VALUES ('$id','$name','$mobile','$salary')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('One row added ..👍')</script>";
            echo "<script>window.open('adminEmployee.php','_self')</script>";
            
        }
        else echo"failed"  .mysqli_error($con);
}        
?>
<!DOCTYPE html>
 <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- under is the link to add icon at side of the slide👇 -->
    <link rel="apple-touch-icon" sizes="180x180" href="headimage/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="headimage/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="headimage/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">
            <!-- end of linking the icon @ side☝️ -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <title>Speed X -Admin</title>
        <style>
            body{
                /* background-color:#0a2f5b; */
                background-image: url("pic/b&w.jpg");
                /* background-position: unset;
                background-size: 75%; */
                font-family: century gothic;
                /* background-image: url("pic/b4.jpg"); */
                background-repeat: no-repeat;
                background-size:100% auto;
            }
            .glass{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height:650px;
                width: 1030px;
                font-size: 1.40em;
                margin-top:3%;
                margin-left: 25%;
            }
            .box{
                width:19.5%;
                height:100%;
                background-color: grey;
                margin-left:-19.5%;
            }
            .box2{
                margin-top: -60%;
                margin-left: 0%;
                color:white;
                color:floralwhite;
            }
            ul {
                /* list-style-type: none; */
                margin:25px;
                padding: 0;
                font-size: 0.75em;
                width: 85%;
                /* font-family: "Times New Roman"; */
                font-family: Arial, Helvetica, sans-serif;

            }
            li a {
                display: block;
                width: auto;
                /* font-size: 0.75em; */
                list-style-type: none;
                /* background-color: #dddddd; */
                color:white;
                text-decoration:none;
                cursor: pointer;
            }
            li a.active{
                background-color: lightslategray;
                color:white;
            }
            li a:hover:not(.active){
                background-color:lightslategray;
                color:white;
            }
            .abc{
                margin:2%;
                color:white;
            }
            input[type="text"]
            {
                border:none;
                border-bottom:1px solid #fff;
                background:lightgray;
                outline:none;
                height:30px;
                width:50%;
                color:black;
                font-size:16px;
            }
            .btn{
                color:black;
                background:lightslategray;
                border: none;
                padding:15px 25px;
                margin-left:20%;
            }
            .btn:hover{
                cursor: pointer;
                color:black;
                background:white;
            }
            </style>
    </head>
            <body>
                <div class="glass">
                      <div class="box">
                                <img src="pic/log1.png" width="200px" height="150px"/>
                                 <ul>
                                    <li><a href="admindetails.php">Dashboard</a></li><br>
                                    <li><a href="adminorderdetails.php"> Details</a></li><br>
                                    <li><a href="adminEmployee.php" class="active">Employess</a></li><br>
                                    <li><a href="admindeliverydetails.php">Deliveried Details</a></li><br>
                                    <li><a href="admincancled.php">Cancled Details</a></li><br>
                                    <li><a href="adminready.php">Ready to pickup details</a></li><br>
                                    <li><a href="adminpending.php">Pending Delivery details</a></li><br>
                                </ul>   
                        </div>
                            <div class="box2">
                                <table align="center" cellpadding="6" width="80%"> 
                                    <tr>
                                            <td colspan="1"><b><font size="6">Hello Admin, Add new Empployee details</font></b></td>
                                    </tr>
                                    </table><hr>
                    <form  method="POST">  
                                        <label class="abc">Enter the ID number:</label><br>
                                          <input type="text" name="id" class="abc"/><br>
                                        <label class="abc">Enter the name :</label><br>
                                            <input type="text" name="name" class="abc"/><br>
                                        <label class="abc">Enter the mobile number :</label><br>
                                            <input type="text" name="mobile" class="abc"/><br>
                                        <label class="abc">Enter the Salary :</label><br>
                                            <input type="text" name="salary" class="abc"/><br>
                                        <input type="submit" name="save" class="btn"/>    
                                    </form>
    
                                            
                </div>        
            </body>