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
    <!-- linking bootstarp👇 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- end of linking boostrap☝️ -->
        <title>Speed X</title>
        <style>
            body{
            /* background-color:#0a2f5b; */
            background-image: url("pic/b3.jpg");
            background-position: unset;
            background-size: 100%;
            background-size: 100% auto;
            font-family: century gothic;
            }
            .box1{
                margin-top: 4%;
                margin-left: -14.3%;
            }
            .box2{
                margin-left: 5%;
                margin-top: -5px;
                width:1162px;
                height:20px;
                background-color:#ffcc00;
                font-size: 1.00em;
            }
            .box4{
                width:690px;
                height:80px;
                margin-left:20%;
                background-color:whitesmoke;
            }
            .box5{
                width:48%;
                height:20px;
                margin-top:-3%;
                margin-left: 350px;
                background-color:whitesmoke;
                font-size: 0.90em;
            }
            .box6{
                width:100.1%;
                height:20px;
                background-color: #2284d5;
                margin-left:0%;
                margin-top:37%;
            }
            .glass{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height:530px;
                width:75.7%;
                font-size: 1.35em;
                margin-top:0%;
                margin-left: 5%;
            }
            .t1{
                width:100%;
                /* margin-top:-35%; */
                font-size: 0.75em;
                margin-top:-36%;
                color:black;
            }
            .box7{
                margin-top:28%;
                margin-left:98%;
            }
            a{
                color:black;
                font-size: 1.00em;
            }
            .cardn{
                width:14%;
                height:50%;
                margin-left:85%;
                margin-top:0;
                /* background-color:red; */
            }
        </style>
    </head>
    <body>
        <div class="box1">
          <!-- <center><img src="pic/track.jpg" width="1164px" height="100px"></center> -->
        </div>
        <div class="box2">
        <!-- <li><a href="logout.php">logout</a></li><br> -->
        </div>
        <div class="glass">
            <center><b> Track Your Courier</b> </center>
            <!-- <li><a href="logout.php">logout</a></li> -->
            <div class="box4">
            <!-- <center><p> Enter the Tracking Id <p> --><center>
                <form action="track2.php" method="POST">
                    <input type="text" name="a"/>
                    <input type="submit" name="id"/></center>
                    <?php 
                        if (!empty($_POST['id'])) 
                        {
                            $pass = $_POST["a"];
                        }
                        // else
                        //   {
                        //     echo "<script>alert('Incorrect Order ID..')</script>";
                        //   }
                    ?>
                </from>
                <div class="box7">
                    <img src="pic/box2.png" width="250px" height="250px"/>
                </div>
        </div>
        <div class="box5">
            <center>your courier details </center>
        </div>
        <div class="box6">
                    </div>
                        <div class="t1">
                            <table class="table table-bordered" >
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">From</th>
                                    <th scope="col">TO</th>
                                    <th scope="col">From Date</th>
                                    <th scope="col">Delivery Data</th>
                                    <th scope="col">Agent name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('Database\condatabase.php');

                                    $query = mysqli_query($con, "select *from courier where parcel_id='$pass'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr class="table-warning">
                                        <td> <?php echo $row['parcel_id']; ?></td>
                                        <td> <?php echo $row['parcel_from']; ?></td>
                                        <td> <?php echo $row['parcel_to']; ?></td>
                                        <td> <?php echo $row['from_date']; ?></td>
                                        <td> <?php echo $row['delivery_date']; ?></td>
                                        <td> <?php echo $row['parcel_whom']; ?></td>
                                        <td> <?php echo $row['parcel_amount']; ?></td>
                                        <td> <?php echo $row['coustmer_number']; ?></td>
                                        <td> <?php echo $row['email']; ?></td>
                                        <td> <?php echo $row['parcel_stauts']; ?></td>
                                    </tr>
                                   <?php } ?>     
                                </tbody>   </tabel>
                </div>
                <div class="cardn">
            <li><a href="landing.php">Back To Home</a></li>
                </div>
    </body>
 </html>




 <!-- we have used bootstrap here were we got inbulid attributes of tabel and a lot more -->