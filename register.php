<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="register.css" type="text/css">
    <script src="jq.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <title></title>
</head>

<body>

    <div class="container" id="cont">
            <button onclick="slide()" id="btnlog">Sign In</button>
            <button onclick="slidej()" id="btnlog2">Join Us</button>
        <div class="contactus">
            <h3>Join Us</h3>
        </div>
        <div id="join">
        <form action="" method="get">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Your name..">

            <label for="phone">Mobile</label>
            <input type="text" id="mobile" name="mobile" placeholder="Your Mobile No..">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your last Email..">

            <label for="Pass">Password</label>
            <input type="password" id="password" name="password" placeholder="Password..">

            <input type="submit" value="Submit" name="submit">
        </form>
        <!--PHP FOR SIGN UP-->
        <?php
        if($_GET['submit'])
        {
            $nm = $_GET['fname'];
            $mb = $_GET['mobile'];
            $em = $_GET['email'];
            $pw = $_GET['password'];
             if($nm!="" || $mb!="" || $em!="" || $pw!="")
             {
                 $query = "INSERT INTO JOIN VALUES ('$nm','$mb','$em','$pw')";
                 $data = mysqli_query($conn,$query);
                   if($data)
                   {
                    echo "Data inserted!!";
                   }
             }
             else
             {
              echo "All field is required!!";
             }
        }
        ?>
    <!--PHP FOR SIGN UP END-->
        </div>
        
        <form action="login.php" method="post" id="log">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your last Email..">

            <label for="Pass">Password</label>
            <input type="password" id="password" name="password" placeholder="Password..">


            <input type="submit" value="Submit">

        </form>
        <script>
        $(document).ready(function(){
            $('#btnlog').click(function(){
            $('#log').slideToggle();
            });
            });
            $(document).ready(function(){
            $('#btnlog2').click(function(){
            $('#join').slideToggle();
            });
            });
            </script>
    </div>


</body>

</html>