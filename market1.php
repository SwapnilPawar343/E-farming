
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
        <?php
        include("h.php")
        ?>
    </div>
    <div class="panel" id="pan">
                  <div class="panel-heading" style="text-align: center;">
                     <marquee behavior="" direction="right"> <h1 style="color:Green">Market Updation</h1></marquee>
                  </div>
                  <div class="panel-body">
                        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#principal" aria-controls="home" role="tab" data-toggle="tab"><h5 style="color:black">Add Updation</h5></a>
                </li>
                <li role="presentation">
                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab"><h5 style="color:black">See Market Update</h5></a>
                </li>
            </ul>
        
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="principal">
                <div class="panel panel-default">
                <div class="panel-body">
                <div class="container" style=" width: 50%; height:100%;">
        <form action="../database/savemarket.php" method="POST" role="form">
            <legend>Add Market</legend>
            <div class="form-group">
                <label for="">Date:-</label>
                <input type="date" name="date" id="input" class="form-control" value="date" required="required" title="">
                
            </div>
        
            <div class="form-group">
                <label for="">Market Yard</label>
                <input type="text" class="form-control" id="mark" name="mark" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Dist:-</label>
                <input type="text" class="form-control" id="dist" name="dist" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Minimum Rate:-</label>
                <input type="text" class="form-control" id="min" name="min" placeholder="Input field">
            </div>
            <div class="form-group">
                <label for="">Maximum Rate:-</label>
                <input type="text" class="form-control" id="max" name="max" placeholder="Input field">
            </div>
            <div class="form-group">
            <label for="">Market Product</label>
                                
                                <input type="text" class="form-control" id="mp" name="mp" placeholder="Enter Product Name">
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
        </form></div></div></div></div>
 <div role="tabpanel" class="tab-pane" id="tab">

  <!--<div class="panel panel-default">
    <div class="panel-body">-->
        <table class="table table-hover:red" style="margin-left: 30px;">
           <thead>
                <tr>
                    <th><h1>Market update</h1></th>
                </tr>
            </thead>
            <tbody>
            <?php
                    require "dbcon.php";
                    $sql="select *from market";
                   $res= mysqli_query($con,$sql);
                   while ($r=mysqli_fetch_array($res)) {
                    echo "<tr id='t1'>";
                    echo "<td>".$r[0]."</td>";
                    echo "<td>".$r[1]."</td>";
                    echo "<td>".$r[2]."</td>";
                    echo "<td>".$r[3]."</td>";
                    echo "<td>".$r[4]."</td>";
                    echo "<td>".$r[5]."</td>";
                    echo "<td>".$r[6]."</td>";
                    echo "<td><a href='../database/savemarket.php?action=remove&tname=".$r[4]."'role='button'class='btn btn-danger'><span class='glyphicon glyphicon-trash'aria-hidden='true'></span></button></td>";
                    echo "</tr>";
                
                   }
                   
                    ?>
          
                </tbody>
        </table></div>
       
            </tbody>
        </table>
        </div>
       
                     </div>
            </div>
        


        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
