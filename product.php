
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
        <![endif]--><script>
        function product() 
            {
              alert("hii");
             var a=document.getElementById("dname").value;
             alert(a);
             var b=document.getElementById("daddress").value;
             var c=document.getElementById("education").value;
           var d=document.getElementById("ddescription").value;
           var e=document.getElementById("txtid").value;
           alert("by");
           var f=document.getElementById("txtpas").value;
           var g=document.getElementById("txtpass").value;
            }</script> <style>
            body{
                background-color: rgb(247, 242, 242);
            }
        </style>
    </head>
    <body>
    <?php
session_start();
$sid=$_SESSION['uid'];
?>
<div class="container">
        <?php
        include("h.php")
        ?>
    </div>

    <div class="panel" id="pan">
                  <div class="panel-heading" style="text-align: center;">
                     <marquee behavior="" direction="right"> <h1 style="color:blue">Shop Keeper Desk</h1></marquee>
                  </div>
                  <div class="panel-body">
                        
                       
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#principal" aria-controls="home" role="tab" data-toggle="tab"><h5 style="color:black">Add Product</h5></a>
                </li>
                <li role="presentation">
                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab"><h5 style="color:black"> MyOrders</h5></a>
                </li>
                <li role="presentation">
                    <a href="#myproduct" aria-controls="tab" role="tab" data-toggle="tab"><h5 style="color:black">My Product</h5></a>
                </li>
              
                <li role="presentation">
                    <a href="newtech.php" aria-controls="tab" role="" data-toggle=""><h5 style="color:black">newtech</h5></a>
                </li>
            </ul>
        
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="principal">
                <div class="container" id="div1">
            
        
        
            <div class="panel panel-default">
                <div class="panel-body">
                
                <form action="database/productsave.php" method="post" role="form" enctype="multipart/form-data"onsubmit="return product()">
                    <legend>Add Product</legend>
                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" id="pname"name="pname" placeholder="Enter Product Name"required>
                             </div>
                    <div class="form-group">
                        <label for="">Product Company</label>
                        <input type="text" class="form-control" id="pcompany" name="pcompany" placeholder="Enter Product Company"required>
                    </div>
                    <div class="form-group">
                        <label for="">Product price</label>
                        <input type="number" class="form-control" id="pprice" name="pprice" placeholder="Product Price"required>
                    </div>
                    <div class="form-group">
                        <label for="">Product Photo </label>
                        <input type="file" class="form-control" id="file" name="file" placeholder="Product Photo">
                    </div>
                   
                    <div class="form-group">
                        <label for="">Product Description</label>
                        <textarea name="description" id="description" name="description" class="form-control" rows="30" required="required" maxlength="5000" placeholder="Product description"></textarea>
                    </div>
                          
                    
                
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </form>
                
                </div>
            </div>
            </div>
                </div>
    
                <div role="tabpanel" class="tab-pane" id="tab">
                     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                     <div class="container" id="div1">
                    
    


        
    <table class="table table-hover"id="display">
        <thead>
            <tr>
                <th><h2>Product Order</h2></th>
                <th><?php
            include ("search.php");
            ?>
            <div class="form-group input-group col-md-offset-3 col-md-4" style="float:right;">
            
              <input type="search" name="search" id="search" class="form-control" placeholder="search Product" onkeyup="return search()"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span></div>
</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Product Name</td>
            <td>Shop Name</td>
            <td>Name </td>
            <td>contact No</td>
            <td> state</td>
            <td>distric</td>
            <td>subdistric</td>
            <td>area</td>
            <td>pincode</td>
            <td>payment</td>
            </tr>
        </tbody>
        <?php
                require "dbcon.php";
                $sql="select * from orderproduct where sid='$sid'";
               $res= mysqli_query($con,$sql);
               while ($r=mysqli_fetch_array($res)) {
                echo "<tr id='t1'>";
                echo "<td>".$r[0]."</td>";
                echo "<td>".$r[1]."</td>";
                echo "<td>".$r[2]."</td>";
                echo"<td>".$r[3]."</td>";
                echo"<td>".$r[4]."</td>";
                echo"<td>".$r[5]."</td>";
                echo"<td>".$r[6]."</td>";
                echo"<td>".$r[7]."</td>";
                echo"<td>".$r[8]."</td>";
                echo"<td>".$r[9]."</td>";
                //echo "<td><a href='../database/saveagrodoctor.php?action=remove&dname=".$r[0]."'role='button'class='btn btn-danger'><span class='glyphicon glyphicon-trash'aria-hidden='true'></span></button></td>";
                echo "</tr>";
            
               }
               
                ?>
          
    </table></div></div>
</div>
<div role="tabpanel" class="tab-pane" id="myproduct">
                     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                     <div class="container" id="div1">
                    
    


        
    <table class="table table-hover" id="display">
        <thead>
            <tr>
                <th><h2>Product Order</h2></th>
                <th><?php
            include ("search.php");
            ?>
            <div class="form-group input-group col-md-offset-3 col-md-4" style="float:right;">
            
              <input type="search" name="search" id="search" class="form-control" placeholder="search Product" onkeyup="return search()"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span></div>
</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Product Name</td>
            <td>Shop Name</td>
            <td>Name </td>
            <td>contact No</td>
            <td> state</td>
            <td>distric</td>
            <td>subdistric</td>
            <td>area</td>
            <td>pincode</td>
            <td>payment</td>
            </tr>
        </tbody>
        <?php
                require "dbcon.php";
                $sql="select * from product where sid='$sid'";
               $res= mysqli_query($con,$sql);
               while ($r=mysqli_fetch_array($res)) {
                echo "<tr id='t1'>";
               // echo "<td>".$r[0]."</td>";
                echo "<td>".$r[1]."</td>";
                echo "<td>".$r[2]."</td>";
                echo"<td>".$r[3]."</td>";
                echo"<td>".$r[4]."</td>";
                echo"<td>".$r[5]."</td>";
                echo "<td><a href='../database/saveagrodoctor.php?action=remove&dname=".$r[0]."'role='button'class='btn btn-danger'><span class='glyphicon glyphicon-trash'aria-hidden='true'></span></button></td>";
                echo "</tr>";
            
               }
               
                ?>
          
    </table></div></div></div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
