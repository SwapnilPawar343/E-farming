
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php
         
    if (isset($_GET["action"]))
{
    require "dbcon.php";
    $dname= $_GET['pname'];
   // $sql="delete from doctor where dname='$dname'";

}
                    $sql="select * from product";
                   $res= mysqli_query($con,$sql);
                   while ($r=mysqli_fetch_array($res)) {
                   // echo "<tr id='t1'>";
                        $ns=$r[1];
                   // echo "<td><a href='../ord.php'><img src=/E-Farming/product/".$r[0]."></a></td>";
                   // echo "<td><b>".$r[2]."</td>";
                   // echo "<td><b>".$r[3]."</td>";
                   // echo "<td><b>".$r[4]."</td>";
                
               
                }
                mysqli_close($con);
                ?>
        
  <div class="container" style=" width: 50%;
    height:100%;">

                 
      <div class="panel panel-success">
          <div class="panel-heading">
                <h2 class="panel-title">Assign Labour:-</h2>
          </div>
          <div class="panel-body">
                           
        <form action="database/savehirelabour.php"method="GET" role="form">
            
            <div class="form-group">
                <label for="">Name of Worker:-</label>
                <input type="text" class="form-control" id="now" name="now" readonly="readonly" value="<?php echo $dname;?>"placeholder="Input field">
            </div>
            
            <div class="form-group">
                <label for="">Name of Owner:-</label>
                <input type="text" class="form-control" id="nw" name="nw" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Name of Work:-</label>
                <input type="text" class="form-control" id="nw"name="wn" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Contact Number of Owner:-</label>
                <input type="text" class="form-control" id="cno"name="cno" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Working Place:-</label>
                <input type="text" class="form-control" id="wp" name="wp" placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary"value="save" name="save">Submit</button>
        </form>
        
        </div>
                 </div>
                 </div>
       

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
