
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
                    require "../dbcon.php";
                    session_start();
    if (isset($_GET["action"]))
{
    require "../dbcon.php";
    $dname=$_GET["pname"];
    $sql="select * from product where sid='$dname'";
   $res= mysqli_query($con,$sql);
   while ($r=mysqli_fetch_array($res)) {
    echo "<tr id='t1'>";
  $sid= "$r[0]";
    //echo "<td>".$r[1]."</td>";
    $pname="$r[2]";
    $pcompany="$r[3]";
    

   }
  
   
    }
   // $sql="delete from doctor where dname='$dname'";
    


?>
  
  <div class="container" style=" width: 50%;
    height:100%;">

                 
      <div class="panel panel-success">
          <div class="panel-heading">
                <h2 class="panel-title">Order Product</h2>
          </div>
          <div class="panel-body">
                           
                     
                 
        
        <form action="../saveorder.php" method="POST" role="form" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" id="pname" name="pname" readonly="readonly" value="<?php echo $pname;?>"placeholder="Input field">
            </div>
            <div class="form-group" style="visibility: hidden;">
                <label for="">shop Name</label>
                <input type="text" class="form-control" id="sname" name="sname" readonly="readonly" value="<?php echo $sid;?>"placeholder="Input field">
            </div> 
           
            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Contact Number</label>
                <input type="text" class="form-control" id="num" name="num" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Distric</label>
                <input type="text" class="form-control" id="dis" name="dis" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Sub Distric</label>
                <input type="text" class="form-control" id="sdis" name="sdis" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Area</label>
                <input type="text" class="form-control" id="area" name="area" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">PIN Code</label>
                <input type="text" class="form-control" id="pcode" name="pcode" placeholder="Input field">
            </div>
            <label for="s">Payment Method</label>
                                <select name="pm" id="pm" class="form-control" required="required">
                                    <option value="Creadit Card">Creadit Card</option>
                                    <option value="Debit Card">Debit Card</option>
                                    <option value="UPI">UPI</option>
                                    <option value="CASH ON DELIVERY">CASH ON DELIVERY</option>
                                </select><br>
                                
            <button type="submit" class="btn btn-primary" value="save" name="save">Buy Now</button>
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
