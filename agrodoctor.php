
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
        <![endif]-->  <script>
         function agro() 
            {
                
             var d=document.getElementById("ddescription").value;
             var e=document.getElementById("txtid").value;
           
           var f=document.getElementById("txtpas").value;
           var g=document.getElementById("txtpass").value;
           if (d.length<=50||d.length<30) {
            alert("Please Minimmun 50 words about You");
            return false;
           }
           if (f!=g)
           {
            alert("Enter  Same Password");
            return false;
           }
             }
            </script>
      
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

    <div class="container" id="div1">
            
        
        
            <div class="panel panel-default">
                <div class="panel-body">
                
                <form action="database/saveagrodoctor.php" method="GET"role="form"onsubmit="return agro()" >
                    <legend>Agro Doctor</legend>
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" id="dname"name="dname" placeholder="Enter Your Name"required >
                    </div>
                  
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="daddress" name="daddress" placeholder="Enter Your Current Address"required>
                    </div>
                    <div class="form-group">
                        <label for="">Eduction</label>
                        <input type="text" class="form-control" id="eduction" name="eduction" placeholder="Eduction"required>
                    </div>
                    <div class="form-group">
                        <label for="">SomeThing Your Self</label>
                        <textarea name="ddescription" id="ddescription" class="form-control" rows="10" required="required" maxlength="250" placeholder="Your Experience ,Your Working Field,etc "></textarea>
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

                
                    <button type="submit"class="btn btn-primary" onsubmit="return agro()" value="save" name="save" onsubmit="return agro()">Submit</button>
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
