
<!DOCTYPE html>
<html lang="en">
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
        <script>

          function shop() 
            {
         var b=document.getElementById("txtid").value
           var a=document.getElementById("ownumber").value;
           var gst=document.getElementById("gst").value;
           if (a.length!=10) {
            alert("enter correct mobile number");
            return false;
            
           }
           if (gst.length!=16)
           {
            alert("Enter correct Gst number");
            return false;
           }
           else{
            echo("Register Successfully");
           }
             }
            </script>
            <style>
                #div1{
                    margin-left: 15%;
                }
            </style>
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
            
            <form action="database/shopsave.php" method="GET" role="form" onsubmit="return shop()">
                <legend>Add Shop</legend>
                <div class="form-group">
                    <label for="">Shopkeeper Name</label>
                    <input type="text" class="form-control" id="owner"name="owner" placeholder="Enter Shopkeeper Name"required>
                </div>
                <div class="form-group">
                    <label for="">Shop Name</label>
                    <input type="text" class="form-control" id="sname" name="sname" placeholder="Shop Name"required>
                </div>
                <div class="form-group">
                    <label for="">Shop Addresss</label>
                    <input type="text" class="form-control" id="saddress" name="saddress"placeholder="Shop Address"required>
                </div>
                <div class="form-group">
                    <label for="">Shopkeeper Phone No. </label>
                    <input type="number" class="form-control" id="ownumber" name="ownumber" placeholder="Shopkeeper Phone No"required>
                </div>
                <div class="form-group">
                    <label for="">Shop Gst No</label>
                    <input type="text" class="form-control" id="gst" name="gst" placeholder="Gst no"required>
                </div>
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

            
                <button type="submit" class="btn btn-primary" onsubmit="return shop()" value="save" name="save">Submit</button>
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
