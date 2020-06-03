<?php
$server="localhost";
$sername="root";
$pass="";
$dbname="techahideas.in";
$con=mysqli_connect($server,$sername,$pass,$dbname);
if(isset($_POST['login']))
{
    $userName=$_POST['username'];
    $password=$_POST['password'];
    $select="select password from login where name='$userName'";
    $queryRun=mysqli_query($con,$select);
       if(mysqli_num_rows($queryRun)>0)
      {
          $essoc=mysqli_fetch_assoc($queryRun);
          if($essoc['password']===$password)
          {
              echo "login has sucess fully";
          }
      }
      else{
          header("Location:index.html");
      }
}
?>