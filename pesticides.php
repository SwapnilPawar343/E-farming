
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

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" id="div1">
            
        
        
            <div class="panel panel-default">
                <div class="panel-body">
                
                <form action="savepesticides.php" method="GET" role="form">
                    <legend>Pesticides</legend>
                    <div class="form-group">
                        <label for="">Pesticides Disease </label>
                        <input type="text" class="form-control" id="pd" name="pd" placeholder="Pesticides Disease">
                    </div>
                    <div class="form-group">
                        <label for="">Pesticides Name</label>
                        <input type="text" class="form-control" id="pname" name="pname" placeholder="Enter Pesticides Name"required>
                    </div>
                <div>
                        <label for="">Pesticides Photo </label>
                        <input type="file" class="form-control" id="pp" name="pp" placeholder="Product Photo">
                    </div>
                   
                    <div class="form-group">
                        <label for="">Pesticides Company</label>
                        <input type="text" class="form-control" id="pcompany" name="pcompany" placeholder="Enter Pesticides Company"required>
                    </div>
                    <div class="form-group">
                        <label for="">Pesticides price</label>
                        <input type="number" class="form-control" id="pprice" name="pprice" placeholder="Pesticides Price"required>
                       </div>
                    <div class="form-group">
                        <label for="">Pesticides Description</label>
                        <textarea name="pdescription" id="pdescription"class="form-control" rows="10" required="required" maxlength="250" placeholder="Pesticides Information"></textarea>
                    </div>
                          
                    
                
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
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
