<?php
require "dbcon.php";

if(isset($_POST["save"]))  {
    
    $dname=$_POST["dname"];
    $dchar=$_POST["dchar"];
    $description=$_POST["description"];
    $files=$_FILES['file'];
    $filename =$files['name'];
    $fileerror=$files['error'];
    $filetemp =$files['tmp_name'];
    $fileext=explode('.',$filename);
    $filecheck =strtolower(end($fileext));
    $fileextstored=array('png','jpg','jpeg');
    if (in_array($filecheck,$fileextstored)) {
        $destinationfile='des/'.$filename;
        move_uploaded_file($filetemp,$destinationfile);
    $sql="insert into disease(dname,dimg,dchar,description)values('$dname','$filename','$dchar','$description')";
    mysqli_query($con,$sql);
    //echo "save";
    mysqli_close($con);
   echo "<script>alert('save');</script>";
    }
}
if(isset($_GET["action"]))
    {
    //require "dbcon.php";
    $dname=$_GET["dname"];
    $sql="delete from disease where dname='$dname'";
    echo "record delete";
       $extra="admine/diseaserecord.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";
mysqli_query($con,$sql);

    mysqli_close($con);

}

    ?>
    
