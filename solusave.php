<?php
    require "dbcon.php";
    if (isset($_POST["save"])) {
    $name=$_POST["sname"];
    $char=$_POST["schar"]; 
    $des=$_POST["description"];

    $sql="insert into solu(dname,dchar,description)values('$name','$char','$des')";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "<script> alert('save');</script>";
    }
?>