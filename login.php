
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
        <style>
            #log{
                margin-left:35%;
                margin-top:10%;
                background-image: url(logb.jpeg);
            }
            body{
                background-image:url(g4.jpeg);
                background-size: 100% 150%;
                background-repeat:no-repeat;
            }
            #pan{
                background-image: url(g5.jpeg);
                width: 30%;
                background-size: 100% 500px;
                background-repeat: no-repeat;
                margin-left:35%;
                margin-top:15%;
                color:white;
            }
            #f1 input:hover{
        background-color: red;


    }
            </style>
    </head>
    <body >
     
         
       
         
        
         
         <div class="panel" id="pan">
                  <div class="panel-heading" style="text-align: center;">
                     <marquee behavior="" direction="right"> <h1 style="color:blue">Log In</h1></marquee>
                  </div>
                  <div class="panel-body">
                        
                        <form action="savelogin.php" method="POST" role="form"id="f1">
                        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#principal" aria-controls="home" role="tab" data-toggle="tab"><h5 style="color:black">Log In</h5></a>
                </li>
                <li role="presentation">
                    <a href="#tab" aria-controls="tab" role="tab" data-toggle="tab"><h5 style="color:black">Register As</h5></a>
                </li>
            </ul>
        
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="principal">
                <div class="form-group">
                            <label for="password">User Name</label>

                                <input type="text" class="form-control" id="uname"name="uname" placeholder="Enter User Name"required>
                            </div>
                            <div class="form-group">
                            <label for="password">Password</label>
                            
                            <input type="password" class="form-control" id="pass"name="pass" placeholder="Enter Password" required>
                        </div>
                            <button type="submit"value="save"name="save" class="btn btn-danger">Log In</button>
                    </div>
                <div role="tabpanel" class="tab-pane" id="tab">
                     <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        
        
        <table class="table table-hover:red" style="margin-left: 30px;">
            <thead>
                <tr>
                    <th>Register  AS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <a class="btn btn-danger" href="shop.php" role="button">Shop </a></td>
                    <td> <a class="btn btn-danger" href="user.php" role="button">User</a></td>
                </tr>
                <tr>
                    <td> <a class="btn btn-danger" href="agrodoctor.php" role="button">AgroDoctor</a></td></tr>
                    <tr>
                    <td> <a class="btn btn-danger" href="labour.php" role="button">Labour</a></td>
                    <td> <a class="btn btn-danger" href="trader.php" role="button">Trader </a></td></tr>

            </tbody>
        </table>
        </div>
       
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
