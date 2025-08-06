
<?php
include('Database\condatabase.php');
?>
<html>
    <head>
            <!-- under is the link to add icon at side of the slide👇 -->
            <link rel="apple-touch-icon" sizes="180x180" href="headimage/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="headimage/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="headimage/favicon-16x16.png">
            <link rel="manifest" href="/site.webmanifest">
            <!-- end of linking the icon @ side☝️ -->
        <title>Speed X</title>
        <style>
        body{
            /* background-color:#0a2f5b; */
            background-image: url("pic/bg2.jpg");
            background-size:100% 100%;
            background-repeat: no-repeat;
            background-position: unset;
            /* background-size: 75%; */
            font-family: century gothic;
        }
        .box2{
            position: absolute;
            margin-top:-20%;
            left:calc(35% - 30px);
            /* box-sizing: border-box;
            border: 6px solid #ffffff;
            border-radius: 50%; */
        }
        input[type="text"]
        {
            border:none;
            border-bottom:1px solid #fff;
            background:transparent;
            outline:none;
            height:30px;
            width:120%;
            color:#fff;
            font-size:16px;
        }
        input[type="password"]
        {
            border:none;
            border-bottom:1px solid #fff;
            background:transparent;
            outline:none;
            height:30px;
            width:120%;
            color:#fff;
            font-size:16px;
        }
        .glass{
                background: linear-gradient(135deg, rgba(225,225,225,0.1),rgba(225,225,225,0));
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
                border-radius:20px;
                border:1px solid rgba(225, 225, 255, 0.18);
                box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
                height:20%;
                font-size: 1.35em;
                width:30%;
                height:65%;
                margin-top:10%;
                margin-left:50%;
                justify-content:left;
                color:white;
                /* background-color: #b1b1b14f; */
        }
        </style>
    </head>
    <body>
    <div class="glass">
            <div class="box2">
                <img src="pic/admin.png" width="200px" height="200px">
                    <center><p>    Login </p><br></center>
                    <form action="logindatabase.php" method="post">
                        <label> User Name</label><br>
                                      <input type="text"  name="id" required/><br><br><br>
                                    <label> Password</label><br>
                                      <input type="password"  name="pass" required /><br><br><br>
                                      <input type="submit"  name="save">
                        </form>
            </div>
        </div>
    </body>
</html>
