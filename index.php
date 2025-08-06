
<!DOCTYPE html>
 <html>
    <head>
            <!-- under is the link to add icon at side of the slide👇 -->
            <link rel="apple-touch-icon" sizes="180x180" href="headimage/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="headimage/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="headimage/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">
            <!-- end of linking the icon @ side☝️ -->
        <title>
            Speed X  
        </title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
                background-image: url("pic/box.jpg");
                background-repeat: no-repeat;
                background-size:100% auto;
                /* font-family: 'Courier New', monospace; */
                /* font-family: 'Times New Roman'; */
                font-family: sans-serif;
            }     
            .topnav{
                overflow: hidden;
                background-color: grey;
                border: 2px soild black;
            }
            .topnav a{
                float:left;
                margin-top: 0%;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 14px;
                text-decoration: none;
                font-size: 17px;
                transition: color 0.4s linear;
                margin: 6px;
                position: relative;
            }
            .topnav a:hover{
                background-color:grey;
                /* color:	#707070; */
                color:wheat;
                cursor: pointer;
            }
            /* .topnav a::before{
                content:"";
                position: absolute;
                left:0;
                top:0;
                width:100%;
                height: 100%;
                background: #000;
                z-index: -1;
                transition: 0.5s;
                transform-origin: 0 0;
                transition-timing-function:cubic-bezier(0.5,1.6,0.4,0.7) ;
                transform: scaleY(0);
            }
            .topnav a:hover::before
            {
                transform: scaleY(1);

            } */
            /*IF NEED TO ADD GLASS LIKE BACKGROPUND*/
            .glass{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius:20px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height:20%;
                font-size: 1.35em;
                width:18%;
                margin-top:13%;
                float: right;
                /* justify-content:center;
                aligin-item:cenetr; */
            }
            .box1{
                width:25%;
                margin-top: 10%;
                height:auto;
                background:transparent;
                
            }
            h1{
                font-size: 2.50em;
            }
            .box2{
                width:50%;
                height:auto;
                margin-top: 5%;
                background:transparent;
                /* color:#214778; */
            }
            h3{
                font-size: 2.00em;
            }
            a:visited{
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="topnav">
            <img src="" width="" height=""/>
            <a href="login.php">Log In</a>
            <a href="track.php">Track Parcel</a>
            <!-- <a href="sender.php">Make Shipment</a> -->
            <a href="us.php">About Us</a>
            <!-- <a href="">About SpeedX</a> -->
        </div>
        <!-- <div class="glass">
            <p>hello</p> -->
            <div class="box1"><h1>
                <p style="color: burlywood;">Making you move
                    <br>Quick & Eazy</p></h1>    
            </div>
            <div class="box2">
            <h3><p>Courier Management System is the simplest solution for Courier  Business</p></h3>
            </div>
            <div class="glass">
               <a href=""><i class="fa fa-facebook-square" style="font-size:45px"></i></a>
               <a href=""><i class="fa fa-twitter-square" style="font-size:45px"></i></a>
               <a href=""><i class="fa fa-instagram" style="font-size:45px"></i></a>
               <a href=""><i class="fa fa-youtube-square" style="font-size:45px"></i></a>
               <a href=""><i class="fa fa-whatsapp" style="font-size:45px"></i></a>
               <a href=""><i class="fa fa-pinterest-square" style="font-size:45px"></i></a>
            </div>
    </body>
 </html>