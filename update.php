
<?php
    include('Database\condatabase.php');
    // echo"$a";
if(isset($_POST['save']))
{
    $a=$_GET['id']; 
        // echo"$a";
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

        $sql="UPDATE `courier` 
        SET
        `coustmer_name`='$name',`parcel_from`='$from',`parcel_to`='$to',`from_date`='$fdate',`delivery_date`='$ddate',`parcel_whom`='$whom',`parcel_amount`='$amount',`coustmer_number`='$number',`email`='$email',`parcel_stauts`='$status' 
        WHERE`parcel_id`='$a' "; 

        $result=mysqli_query($con,$sql);
        if($result)
        {
            echo "<script>alert('One row updated ..👍')</script>";
            echo "<script>window.open('adminorderdetails.php','_self')</script>";
            
        }
        else echo"failed"  .mysqli_error($con);
    
} 
?>
 <html>
    <head>
        <!-- under is the link to add icon at side of the slide👇 -->
        <link rel="apple-touch-icon" sizes="180x180" href="headimage/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="headimage/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="headimage/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <!-- end of linking the icon @ side☝️ -->

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        <!-- linking bootstarp👇 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- end of linking boostrap☝️ -->
    </head>
            <title>
                Speed X -Admin
            </title>    
                <style>
                    body{
                        /* background-color:#0a2f5b; */
                        background-image: url("pic/b&w.jpg");
                        /* background-position: unset;
                        background-size: 75%; */
                        font-family: century gothic;
                        /* background-image: url("pic/b4.jpg"); */
                        background-repeat: no-repeat;
                        overflow: hidden;
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
                        font-size:1.15em;
                        margin-left: 0%;
                        /* overflow: scroll; */
                    }
                    ul {
                        /* list-style-type: none; */
                        margin:25px;
                        padding: 0;
                        width:85%;
                        font-size: 0.75em;
                        /* font-family: "Times New Roman"; */
                        font-family: Arial, Helvetica, sans-serif;

                    }
                    li a {
                        display: block;
                        width: auto;
                        list-style-type: none;
                        /* font-size: 0.75em; */
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
                    a{
                        Color:black;
                        text-decoration: none;
                    }
                    a:hover{
                        color:grey;
                        text-decoration: none;
                    }
                    .tabel1{
                        width:100%;
                        /* margin-top:-35%; */
                        font-size: 0.75em;
                        /* margin-top:-36%; */
                        color:whitesmoke;
                        /* background-color: white; */
                    }
                    .abc{
                        color:white;
                    }
                    /* tabel,th,td{
                        border:1px solid black;
                    } */
                    label{
                        display: inline-block;
                        width: 25%;
                        text-align: right;
                    }
                    .btn{
                        color:black;
                        background:lightslategray;
                        border: none;
                        padding:15px 25px;
                        margin-left:2%;
                    }
                    .btn:hover{
                        cursor: pointer;
                        color:black;
                        background:white;
                    }
                </style>            
            <body>
                <div class="glass">
                      <div class="box">
                                <img src="pic/log1.png" width="200px" height="150px"/>
                                 <ul>
                                    <li><a href="admindetails.php" >Dashboard</a></li><br>
                                    <li><a href="adminorderdetails.php" class="active"> Delivery Details</a></li><br>
                                    <li><a href="adminEmployee.php" >Employess</a></li><br>
                                    <li><a href="admindeliverydetails.php">Deliveried Details</a></li><br>
                                    <li><a href="admincancled.php">Cancled Details</a></li><br>
                                    <li><a href="adminready.php">Ready to pickup details</a></li><br>
                                    <li><a href="adminpending.php">Pending Delivery details</a></li><br>
                                </ul>   
                        </div>
                            <div class="box2">
                                <table align="center" class="abc" cellpadding="6" width="80%"> 
                                    <tr>
                                            <td colspan="1"><b><font size="6">Hello Admin, Deliveried Details</font></b></td>
                                    </tr>
                                    </table><hr>
                                        <div class="tabel1">  
                                        <form action="" method="POST">
                                        <?php include( 'Database\condatabase.php');
                                            $a=$_GET['id'];
                                            $query = mysqli_query($con, "select *from courier where parcel_id='$a'");
                                            $row = mysqli_fetch_array($query) ?>
                                            <label>ID</label>
                                            <input type="text" value="<?php echo$a; ?>" name="parcel_id" disabled/><br>
                                            <label>NAME</label>
                                             <input type="text" name="coustmer_name" value="<?php echo $row['coustmer_name'];?>"/><br>
                                            <label>FROM</label>
                                             <input type="text" name="parcel_from" value="<?php echo$row['parcel_from'];?>"/><br>
                                             <label>TO</label>
                                             <input type="text" name="parcel_to" value="<?php echo$row['parcel_to'];?>"/><br>
                                            <label>FROM-DATE</label>
                                             <input type="date" name="from_date" value="<?php echo$row['from_date'];?>"/><br>
                                            <label>DELIVERY-DATE</label>
                                             <input type="date" name="delivery_date" value="<?php echo$row['delivery_date'];?>"/><br>
                                            <label>WHOM</label>
                                             <input type="text" name="parcel_whom" value="<?php echo$row['parcel_whom'];?>"/><br>
                                            <label>PARCEL-AMOUNT</label>
                                             <input type="text" name="parcel_amount"value="<?php echo$row['parcel_amount'];?>"/><br>
                                            <label>COUSTOMER-NUMBER</label>
                                             <input type="text" name="coustmer_number" value="<?php echo$row['coustmer_number'];?>"/><br>
                                            <label>EAMIL</label>
                                             <input type="text" name="email"value="<?php echo$row['email'];?>"/><br>
                                            <label>PARCEL-STATUS</label>
                                             <input type="text" name="parcel_status" value="<?php echo $row['parcel_stauts'];?>"/><br><br>
                                
                                                            <input type="submit" name="save" class="btn"/>
                                        </form>
                                        </div>        
            </body>



