
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

  <div class="container" style=" width: 50%;
    height:100%;">
        <form action="database/savemarket.php" method="POST" role="form">
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
        </form>
        </div>
        

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
