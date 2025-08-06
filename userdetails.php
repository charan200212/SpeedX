
<?php
include('Database\condatabase.php');
// include('admin\admin.php');
?>
  <?php
            // fetching the data from data base

        //   --> fetching total number of staff  
           $v1="SELECT * FROM employee ";
        //    selecting from the table empoloyee
           $r1=mysqli_query($con,$v1);
           $h1 = mysqli_num_rows($r1);
        //    this command is used show the total number counts

       //   --> fetching total number of delivered parcel 
       $v2="SELECT * FROM courier WHERE parcel_stauts='delivered' ";
       //    selecting from the table courier
          $r2=mysqli_query($con,$v2);
          $h2 = mysqli_num_rows($r2);
       //    this command is used show the total number counts    

       //   --> fetching total number of courier  
       $v3="SELECT * FROM courier ";
       //    selecting from the table courier
          $r3=mysqli_query($con,$v3);
          $h3 = mysqli_num_rows($r3);
       //    this command is used show the total number counts

       //   --> fetching total number of courier  
       $v4="SELECT * FROM courier WHERE parcel_stauts='Damaged' ";
       //    selecting from the table courier
          $r4=mysqli_query($con,$v4);
          $h4 = mysqli_num_rows($r4);
       //    this command is used show the total number counts  \

              //   --> fetching total number of courier  
       $v5="SELECT * FROM courier WHERE parcel_stauts='Ready to pickup' ";
       //    selecting from the table courier
          $r5=mysqli_query($con,$v5);
          $h5 = mysqli_num_rows($r5);
       //    this command is used show the total number counts  
      
         //   --> fetching total number of courier  
         $v6="SELECT * FROM courier WHERE parcel_stauts='Cancelled' ";
         //    selecting from the table courier
            $r6=mysqli_query($con,$v6);
            $h6 = mysqli_num_rows($r6);
         //    this command is used show the total number counts      
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
        <title>Speed X -Employe</title>
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
            .card1{
                width:19.5%;
                height:100%;
                background-color: grey;
                margin-left:-19.5%;
            }
            .card2{
                margin-top: -60%;
                margin-left: 0%;
                color:black;
            }
            .glass1{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(0px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height: 135px;
                width: 300px;
                font-size: 1.25em;
                margin-top:3%;
                margin-left: 2%;
            }
            .glass2{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(0px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height: 135px;
                width: 300px;
                font-size: 1.25em;
                margin-top:3%;
                margin-left: 2%;
            }
            .glass3{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(0px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height: 135px;
                width: 300px;
                font-size: 1.25em;
                margin-top:-29.5%;
                margin-left: 35%;
            }
            .glass4{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(0px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height: 135px;
                width: 300px;
                font-size: 1.25em;
                margin-top:3%;
                margin-left: 35%;
            }
            .glass5{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(0px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height: 135px;
                width: 300px;
                font-size: 1.25em;
                margin-top:-29.5%;
                margin-left:68%;
            }
            .glass6{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(0px);
                border-radius:0px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height: 135px;
                width: 300px;
                font-size: 1.25em;
                margin-top:3%;
                margin-left: 68%;
            }
            p.p1{
                margin: 15px;
            }
            p.p2{
                margin: 20px;
            }
            .glass1:hover{
                border:1px solid white;
                cursor: pointer;
            }
            .glass2:hover{
                border:1px solid white;
                cursor: pointer;
            }
            .glass3:hover{
                border:1px solid white;
                cursor: pointer;
            }
            .glass4:hover{
                border:1px solid white;
                cursor: pointer;
            }
            .glass5:hover{
                border:1px solid white;
                cursor: pointer;
            }
            .glass6:hover{
                border:1px solid white;
                cursor: pointer;
            }
            ul {
                /* list-style-type: none; */
                margin:25px;
                padding: 0;
                width:85%;
                /* align-items: center; */
                /* font-family: "Times New Roman"; */
                font-family: Arial, Helvetica, sans-serif;

            }
            li a {
                display: block;
                width: auto;
                font-size: 0.75em;
                padding: 8px,16px;
                list-style-type:none;
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
            </style>
    </head>
    <body>
        <div class="glass">
            <div class="card1">
                <img src="pic/log1.png" width="200px" height="150px"/>
            <ul>
                <li><a href="details.php" class="active">Dashboard</a></li><br>
                <li><a href="usercourierdetails.php"> Delivery Details</a></li><br>
                <li><a href="useremployee.php">Employess</a></li><br>
                <li><a href="logout.php">logout</a></li><br>

            </ul>    
            </div><!--log added-->
                <div class="card2">
                    <table align="center" cellpadding="6" width="80%"> 
                        <tr>
                                <td colspan="1"><b><font size="6">Hello Employee,Dashboard</font></b></td>
                        </tr>
                        </table><hr>
                            <div class="glass1">
                                 <p class="p1"><b><?php echo $h1 ?></b></p>
                                 <p class="p2" style='color:black'>Totall Staf      
                                 <i class="fa fa-users" style='font-size:30px;color:black'></i></p>
                            </div>
                                <div class="glass2">
                                    <p class="p1"><b><?php echo $h2 ?></b></p>
                                    <p class="p2" style='color:white'>Delivered
                                    <i class="fa fa-dropbox" style='font-size:30px;color:white'></i></p>
                                </div>
                                    <div class="glass3">
                                    <a href="usercourierdetails.php"></a>
                                        <p class="p1"><b><?php echo $h3 ?></b></p>
                                        <p class="p2" style='color:white'>Totall Parcel
                                        <i class="fa fa-dropbox" style='font-size:30px;color:white'></i></p>
                                    </div>
                                        <div class="glass4">
                                            <p class="p1"><b><?php echo $h4 ?></b></p>
                                            <p class="p2" style='color:black'>Damaged     
                                            <i class="fa fa-users" style='font-size:30px;color:black'></i></p>
                                        </div>
                                            <div class="glass5">
                                                <p class="p1"><b><?php echo $h5 ?></b></p>
                                                <p class="p2" style='color:black'>Ready to pickup   
                                                <i class="fa fa-users" style='font-size:30px;color:black'></i></p>
                                            </div>
                                                <div class="glass6">
                                                    <p class="p1"><b><?php echo $h6 ?></b></p>
                                                    <p class="p2" style='color:white'>Unsucessfull     
                                                    <i class="fa fa-users" style='font-size:30px;color:white'></i></p>
                                                </div>
        </div>        
    </body>
</html>