
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
       include("head.php");
     ?>

    <div class="container" style=" width:50% ;
    height: 750px;;">

                 
      <div class="panel panel-danger">
          <div class="panel-heading">
          <h1> <span class="label label-danger"><i>Agricultural Disease's.</span></h1>

                <h1 class="panel-title"style="color:green;">Infom Disease to Agro Doctor</h1>
          </div>
          <div class="panel-body">
                           
                     
                 
        
        <form action="../database/drqueries1.php" method="POST" role="form">
            
            <div class="form-group">
                <label for="">Disease Name:-</label>
                <input type="text" class="form-control" id="dname" name="dname" placeholder="Enter Disease Name">
            </div>
           
            <div class="form-group">
                <label for="">Disease Charectors:-</label>
                <textarea name="dchar" id="dchar"class="form-control" rows="10" required="required" maxlength="250" placeholder="Enter Disease Charector's"></textarea>
            </div>
            <div class="form-group">
                <label for="">Contact Number</label>
                <input type="text" class="form-control" id="cnumber" name="cnumber" placeholder="Input field">
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
        
            <button type="submit" class="btn btn-primary" value="save" name="save">Submit</button>
        </form>
        
        </div>
                 </div>
        </div>
              

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
        
         
                
            <div style="height:100px;">
    <footer>
        <?php
    require "../footer.php";
              ?>
    </footer>
    
            </div>
            </div>
        
    </body>
</html>
