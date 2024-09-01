
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
        function newtech() 
            {
              
             var a=document.getElementById("dname").value;
            
             var b=document.getElementById("daddress").value;
             var c=document.getElementById("education").value;
           var d=document.getElementById("ddescription").value;
           var e=document.getElementById("txtid").value;
           
           var f=document.getElementById("txtpas").value;
           var g=document.getElementById("txtpass").value;
            }</script>
        <style>
            body{
                background-color: rgb(247, 242, 242);
            }
        </style>
    </head>
    <body>
    <div class="container">
        <?php
        include("h.php")
        ?>
    </div>

    <div class="container">
        
   
    
        
        <div class="panel panel-primary">
              <div class="panel-heading">
                    <h3 class="panel-title">Add New Technology:-</h3>
              </div>
              <div class="panel-body">
                    
                    <form action="database/savenewtech.php" method="POST" role="form"enctype="multipart/form-data"onsubmit="return newtech()">
                        
                    
                        <div class="form-group">
                            <label for="">Technologyy Name:-</label>
                            <input type="text" class="form-control" id="ntc"name="ntc" placeholder="Enter Company Name">
                        </div>
                        <div class="form-group">
                            <label for="">Image Of Technology:-</label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="Enter Address">
                        </div>
    
                        <div class="form-group">
                            <label for="">Contact no:-</label>
                            <input type="number" class="form-control" id="num" name="num" placeholder="Enter contact no">
                        </div>
    
                       
                        <div class="form-group">
                        <label for="">Technology Info:-</label>
                        <textarea name="info" id="info" class="form-control" rows="10" required="required" maxlength="2500" placeholder="technology Information"></textarea>

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
    </body>
</html>
