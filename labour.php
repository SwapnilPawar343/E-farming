
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
    <script>
        function labour() 
            {
              alert("hii");
             var a=document.getElementById("lname").value;
             alert(a);
             var b=document.getElementById("number").value;
             var c=document.getElementById("laddress").value;
           var d=document.getElementById("lwork").value;
           var f=document.getElementById("txtpas").value;
           var g=document.getElementById("txtpass").value;
           if (f!=g)
           {
            alert("Enter  Same Password");
            return false;
           }
          
           if (b.length!==10) {
            alert("Enter a Correct Mobile Number");
            return false;
           }
            }
        </script>
    <body>
    <div class="container">
        <?php
        include("h.php")
        ?>
    </div>

            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                
            </div>
            
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="container">
                <div class="panel panel-default">
                     <div class="panel-heading">
                    
                    <form action="database/savelabour.php" method="POST" role="form" onsubmit="return labour()"enctype="multipart/form-data">
                        <legend>Labour Regitration</legend>
                    
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Full Name" require>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="Enter Mobile Number" require>
                        </div>
                        <div class="form-group">
                            <label for="">Labour Image</label>
                            <input type="file" class="form-control" id="file" name="file" placeholder="Enter Image" require>
                        </div>

                        
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="laddress" name="laddress" placeholder="Enter Address" require>
                        </div>
                            <label for="s">Work</label>
                                <select name="lwork" id="lwork" class="form-control" required="required">
                                    <option value="Sowing or Planting"> Sowing or Planting</option>
                                    <option value="Cultivation Of Agricultural Land">Cultivation Of Agricultural Land</option>
                                    <option value="Threshing">Threshing</option>
                                    <option value="Spraying">Spraying</option>
                                    <option value="Seeding">Seeding</option>
                                </select>

                                <div class="form-group">
                            <label for="password">User Name</label>

                                <input type="text" class="form-control" id="txtid"name="txtid" placeholder="Enter User Name"required>
                            </div>
                            <div class="form-group">
                            <label for="password">Password</label>
                            
                            <input type="password" class="form-control" id="txtpas"name="txtpas" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Re Enter- Password</label>
                            
                            <input type="password" class="form-control" id="txtpass"name="txtpass" placeholder="Enter Password" required>
                        </div>

                        <br>
                    
                        <button type="submit" name="save" value="save"onsubmit="return labour()"class="btn btn-primary">Submit</button>
                    </form>
                    
                 </div>
            </div>
        </div></div>
            
           
            
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
