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
                    <div class="container">
<table class="table table-hover" id="display">
            <thead>
                <tr>
                <div class="page-header">
                  <h1>Hire labour<small></small></h1>
                </div>
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
                    <td>Labour Name</td>
                    <td>Hireing Person Name</td>
                    <td>Name Of Work</td>
                    <td>Contact no</td>
                    <td>Name of Work Place</td>
                    
                </tr>
                <?php
                    require "dbcon.php";
                    $sql="select *from hirelabour";
                   $res= mysqli_query($con,$sql);
                   while ($r=mysqli_fetch_array($res)) {
                    echo "<tr id='t1'>";
                    echo "<td>".$r[0]."</td>";
                    echo "<td>".$r[1]."</td>";
                    echo "<td>".$r[2]."</td>";
                    echo "<td>".$r[3]."</td>";
                    echo "<td>".$r[4]."</td>";
                     echo "</tr>";
                
                   }
                   
                    ?>
          
            </tbody>
        </table>
                </tbody>
                
                        <!-- jQuery -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <!-- Bootstrap JavaScript -->
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    </body>
                </html>
                