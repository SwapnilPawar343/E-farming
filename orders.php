
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
                                $sql="select * from orderproduct";
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
