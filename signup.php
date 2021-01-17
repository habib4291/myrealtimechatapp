<?php
include("connection.php");
error_reporting(0);
?>
<?php
if($_GET['submit'])
{
    $nm = $_GET['fname'];
    $mb = $_GET['mobile'];
    $em = $_GET['email'];
    $pw = $_GET['password'];
     if($nm!="" && $mb!="" && $em!="" && $pw!="")
     {
         $query = "INSERT INTO helloapp VALUES('$nm','$mb','$em','$pw')";
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