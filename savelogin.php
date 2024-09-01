

<?php
require 'dbcon.php';
session_start();
if(isset($_POST["save"]))
{
 //$utype=$_POST["utype"];
    $uname=$_POST["uname"];
    $password=$_POST["pass"];
    $uname="select * from login where username='$uname'";
    $query=mysqli_query($con,$uname);
    $num_count=mysqli_num_rows($query);
    if ($num_count) {
$pass=mysqli_fetch_assoc($query);
$db_pass =$pass['password'];
//echo $db_pass;
//echo $password;
$_SESSION['uid']=$pass['uid'];
echo $_SESSION['uid'];
$utype=$pass['utype'];
if ($db_pass==$password){
    echo "<script>alert('Login Successful');</script>";
}
 else{
    echo "<script>alert('password is Incorrect');</script>";
    $extra="login.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','self')</script>";
    
    }}
else{
    // echo "Invalid User name";
     echo "<script>alert('Invalid User Name');</script>";
     $extra="login.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','self')</script>";
    
}
if ($utype=="Admine" && $db_pass==$password) {

    $extra="admine/h.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','self')</script>";
    
}
elseif ($utype=="Shop" && $db_pass==$password) {
    $extra="product.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','self')</script>";
  
}
elseif ($utype=="AgroDoctor" && $db_pass==$password) {
    $extra="disease.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','self')</script>";
  
}
elseif ($utype=="Labour" && $db_pass==$password) {
    $extra="hireldata.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','self')</script>";
  
}
elseif ($utype=="trader" && $db_pass==$password) {
    $extra="traderr.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','self')</script>";
  
}
}?>
   