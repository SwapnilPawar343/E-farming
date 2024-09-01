
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
                     <marquee behavior="" direction="right"> <h1 style="color:blue">Agro Doctor Desk</h1></marquee>
                  </div>
                  <div class="panel-body">
        
      
            
            
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Add Disease</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">Queryes</a>
                    </li>
                    <li role="presentation">
                        <a href="#tab1" aria-controls="tab1" role="tab1" data-toggle="tab">Solution</a>
                    </li>
                </ul>
            
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">     
                            <div class="panel panel-default">
                            <div class="panel-body">
                            <form action="diseasesave.php" method="POST"role="form"enctype="multipart/form-data">
                                <legend>Add Disease</legend>
                                <div class="form-group">
                                    <label for="">Disease Name</label>
                                    <input type="text" class="form-control" id="dname"name="dname" placeholder="Enter Product Name"required>
                                        </div>
                                <div class="form-group">
                                    <label for="">Disease Character</label>
                                    <input type="text" class="form-control" id="dchar" name="dchar" placeholder="Enter Product Company"required>
                                </div>
                                <div class="form-group">
                                    <label for="">Disease Images</label>
                                    <input type="file" class="form-control" id="file" name="file" placeholder="Enter Product Company"required>
                                </div>
                            
                            <div class="form-group">
                                    <label for="">More About Disease </label>
                                    <textarea name="description" id="description"  class="form-control" rows="10" required="required" maxlength="250" placeholder="Product description"></textarea>
                                </div>
                                    
                                
                            
                                <button type="submit" class="btn btn-primary" name="save" value="save">Submit</button>
                            </form>
                    </div>
                            </div>
            </div>
            

                    <div role="tabpanel" class="tab-pane" id="tab">
                    <div class="container">
                    <div class="panel panel-default">
                    <div class="panel-body">
        
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Disease</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Disease Name</td>
                                        <td>Disease Character</td>
                                        <td>Mobile No:</td>
                                        <td>State</td>
                                        <td>Distric</td>
                                        <td>SubDistric</td>
                                        <td>Area</td>
                                        <td>Pincode</td>
                                    </tr>
                                    <?php
                                        require "dbcon.php";
                                        $sql="select *from dr";
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
                                        echo "<td>".$r[7]."</td>";
                                        echo "</tr>";
                                    
                                    }
                                    
                                        ?>
                            
                                </tbody>
                            </table></div>
                                </div></div>
                                </div>
                    <div role="tabpanel" class="tab-pane" id="tab1">
                                <div class="panel panel-default">
                                <div class="panel-body">
                                <form action="solusave.php" method="POST" role="form"enctype="multipart/form-data">
                                <legend>Solution Of Disease</legend>
                                <div class="form-group">
                                    <label for="">Disease Name</label>
                                    <input type="text" class="form-control" id="sname"name="sname" placeholder="Enter Product Name"required>
                                        </div>
                                <div class="form-group">
                                    <label for="">Disease Character</label>
                                    <input type="text" class="form-control" id="schar" name="schar" placeholder="Enter Product Company"required>
                                </div>
                                                
                            <div class="form-group">
                                    <label for="">Solution About Disease </label>
                                    <textarea name="description" id="description"  class="form-control" rows="30" required="required" maxlength="5000" placeholder="Product description"></textarea>
                                </div>
                                    
                                
                            
                                <button type="submit" class="btn btn-primary" name="save">Submit</button>
                            </form></div></div></div>

                    </div>
                </div>
            </div>
            
        
            
        
            
        </form>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
