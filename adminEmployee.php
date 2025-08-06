

<?php
include('Database\condatabase.php');
// include('admin\admin.php');
?>
<!DOCTYPE html>
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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                /* color:black; */
                /* color:floralwhite; */
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
            a:hover{
                color:black;
                text-decoration: none;
            }
            .tabel1{
                width:100%;
                /* margin-top:-35%; */
                font-size: 0.75em;
                /* margin-top:-36%; */
                color:black;
                /* background-color: white; */
            }
            .button {
                background-color: whitesmoke;
                border: none;
                color: black;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            .abc{
                color:whitesmoke;
            }
            a{
                color:black;
                text-decoration: none;
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
                                    <li><a href="adminorderdetails.php">Details</a></li><br>
                                    <li><a href="adminEmployee.php" class="active">Employess</a></li><br>
                                    <li><a href="admindeliverydetails.php">Deliveried Details</a></li><br>
                                    <li><a href="admincancled.php">Cancled Details</a></li><br>
                                    <li><a href="adminready.php">Ready to pickup details</a></li><br>
                                    <li><a href="adminpending.php">Pending Delivery details</a></li><br>
                                    <li><a href="logout.php">logout</a></li><br>
                                </ul>   
                        </div>
                            <div class="box2">
                                <table align="center" class="abc" cellpadding="6" width="80%"> 
                                    <tr>
                                            <td colspan="1"><b><font size="6">Hello Admin, Employess Details</font></b></td>
                                    </tr>
                                    </table><hr>
                                    <div class="tabel1">
                                            <table class="table table-bordered" >
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">NAME</th>
                                                    <th scope="col">MOBILE NUMBER</th>
                                                    <th scope="col">SALARY</th>
                                                    <th scope="col">EDIT</th>
                                                    <th scope="col">DELETE</th>
                                                    </tr>
                                                    <tbody>
                                                            <?php
                                                            include('Database\condatabase.php');

                                                            $query = mysqli_query($con, "select *from employee");
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?>
                                                            <tr class="table-light">
                                                                <td> <?php echo $row['id']; ?></td>
                                                                <td> <?php echo $row['name']; ?></td>
                                                                <td> <?php echo $row['mobile']; ?></td>
                                                                <td> <?php echo $row['salary']; ?></td>
                                                                <td><a href="editemployee.php?id=<?php echo$row['id']?>"><i class="fa fa-pencil-square-o"></i></a></td>
                                                                <td> <a href="deleteemployes.php?id=<?php echo$row['id'];?>"><i class="fa fa-trash"></i></a></td>
                                                                <!-- <td><i class="fa fa-trash"></i></td> -->
                                                            </tr>
                                                        <?php } ?>     
                                                        </tbody> 
                                                </thead>
                                                <form action="addemp.php" method="post">
                                                    <input type="submit" name="ADD_NEW" value="ADDNEW" class="btn"/>
                                                </form>
                                            </table>
                </div>        
            </body>