
<?php
include('Database\condatabase.php');
if(isset($_POST['save']))
{
    $a=$_GET['id']; 
        // echo"$a";
        $id=$_POST['id'];
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $salary=$_POST['salary'];
        $sql="UPDATE `employee` SET `name`='$name',`mobile`='$mobile',`salary`='$salary' WHERE `id`='$id' ";

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('One row updated ..👍')</script>";
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
                color:black;
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
                color:black;
            }
            input[type="text"]
            {
                border:none;
                border-bottom:1px solid #fff;
                background:lightgray;
                outline:none;
                height:30px;
                width:50%;
                color:#fff;
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
                                    <li><a href="adminEmployee.php">Employess</a></li><br>
                                    <li><a href="admindeliverydetails.php">Deliveried Details</a></li><br>
                                    <li><a href="admincancled.php">Cancled Details</a></li><br>
                                    <li><a href="adminready.php">Ready to pickup details</a></li><br>
                                    <li><a href="adminpending.php" class="active">Pending Delivery details</a></li><br>
                                
                                </ul>   
                        </div>
                            <div class="box2">
                                <table align="center" cellpadding="6" width="80%"> 
                                    <tr>
                                            <td colspan="1"><b><font size="6">Hello Admin, Add new Empployee details</font></b></td>
                                    </tr>
                                    </table><hr>
                                        <form  method="POST">  
                                        <?php include( 'Database\condatabase.php');
                                            $a=$_GET['id'];
                                            $query = mysqli_query($con, "select *from employee where id='$a'");
                                            $row = mysqli_fetch_array($query) ?>
                                                <label class="abc">Enter the ID :</label><br>
                                                    <input type="text" name="id" class="abc" value="<?php echo $row['id'];?>"/><br>
                                                <label class="abc">Enter the name :</label><br>
                                                    <input type="text" name="name" class="abc" value="<?php echo $row['name'];?>"/><br>
                                                <label class="abc">Enter the mobile number :</label><br>
                                                    <input type="text" name="mobile" class="abc" value="<?php echo $row['mobile'];?>"/><br>
                                                <label class="abc">Enter the Salary :</label><br>
                                                    <input type="text" name="salary" class="abc" value="<?php echo $row['salary'];?>"/><br>
                                                <input type="submit" name="save" class="btn"/>    
                                        </form>
    
                                            
                </div>        
            </body>