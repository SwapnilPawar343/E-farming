
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
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            
        </div>
        
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          
          <div class="panel panel-info">
              <div class="panel-heading">
                    <h3 class="panel-title">Trader</h3>
              </div>
              <div class="panel-body">
                    
                    <form action="savetrader.php" method="GET" role="form">
                        <legend></legend>
                    
                        <div class="form-group">
                            <label for="">trader name</label>
                            <input type="text" class="form-control" id="tname" name="tname" placeholder="trader name">
                        </div>
                        <div class="form-group">
                            <label for="">market name</label>
                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Market Name">
                        </div>
                        <div class="form-group">
                            <label for="">Address of Market</label>
                            <input type="text" class="form-control" id="taddress" name="taddress" placeholder="Enter market Address">
                        </div>
                        <div class="form-group">
                            <label for="">PinCode</label>
                            <input type="number" class="form-control" id="tpin" name="tpin" placeholder="Enter Number">
                        </div>
                    
                        
                    
                        <button type="submit" name="save" class="btn btn-primary">Submit</button>
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
