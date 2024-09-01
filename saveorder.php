<?php
    require "dbcon.php"; 
    if (isset($_POST["save"])) echo""; {
    $pname=$_POST["pname"];
    $sname=$_POST["sname"];
    $name=$_POST["fname"]; 
    $number=$_POST["num"];
    $state=$_POST["state"];
    $distric=$_POST["dis"];
    $sdistric=$_POST["sdis"];
    $area=$_POST["area"];
    $pincode=$_POST["pcode"];
    $pay=$_POST["pm"];
    $sql="insert into orderproduct(pname,sid,fullname,contact,state,distric,subdistric,area,pincode,payment) value('$pname','$sname','$name','$number','$state','$distric','$sdistric','$area','$pincode','$pay')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "<script> alert('save');</script>";
    }
?>