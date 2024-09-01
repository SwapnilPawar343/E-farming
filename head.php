
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
        <?php 
        //session_start();
         //$sid=$_SESSION['uid'];
                    require "../dbcon.php";
                  //  $uname="select * from login where uid='$sid'";
   // $query=mysqli_query($con,$uname);
   // $num_count=mysqli_num_rows($query);
   // if ($num_count) {
 //$pass=mysqli_fetch_assoc($query);
//$db_pass =$pass['username'];}
                 ?>
                   <script>
                    var a=$sid;
                  if (a==null) {
                    document.getElementById("log").style.visibility="visible";
                    
                  }else{
                    document.getElementById("log").style.visibility="visible"
                  }
            </script>
            
                
    </head>
    <style>
     
        body {
            background-color: rgb(247, 242, 242);

            background-size:100% 100%; 
           
        }
        #c1 img{

        }
        h1,h2,h3,h4{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }
        #n1{
            color: #000;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        #n1:hover{
            
            background-color: rgb(102, 233, 107);
        }
        #l1{
            background-color: rgb(128, 171, 138);
            background-size:100% 100%; 
        }
        #h3{
            margin: 2px;
            height: 270px;
            width: 100%;
        }
        #h2{
            margin: 2px;
            height: 155px;
            width: 100%;
           
        }
         #h1{
            margin: 2px;
            height:30%;
            width: 100%;
        }
        #h1{
            text-align: center;
            
            background-color: rgb(231, 234, 221);
        }
        #h1 a{
            
            text-align: center;
            display: inline-block; 
             
        }
        #h2{
            background-color: rgb(211, 247, 208);
            padding-top: 0.1%;
        }
        #h3{
            background-color: rgb(247, 242, 242);
            padding-top: 20px;
            
        }
        #h1 a img{
            text-align: center;
            display: inline-block;
            border-radius: 0% 30% 0% 30%;
            margin-left: 10%;
            margin-top: 5%;
            padding: 5px 15px;
           height: 60px;
           width: 120px;
           box-shadow: 0px 7px 2px 4px rgb(229, 164, 231);
           margin: 15px;
           
        }
       #h1 p{
        
        margin-top: 0%;
        margin-left: 10%;

       }
       #h2 img{
        height: 150px;
        width: 120px;
        border-radius: 100%;
        float: inline-end;
       }
       #h1 #h2 #h3 {
        position: fixed;
       }
       
     
    </style>
    <body>
        <div id="h2">
            
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                <img src="img/kisan.jpeg" alt="kisan">
            </div>
            
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="">
                <h1 style="text-align: center;"><i><b style="color: rgb(110, 50, 12);">E-Farming.</b></i></h1>
                
                <marquee><h3 style="color: brown;"><i> Heart of Perfect Farming....</i></h3></marqee>
                    
                </marquee>
            
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="log">
            <a class="btn btn-success" href="../login.php" role="button">Login</a>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="out"style="visibility:hidden">
            <a class="btn btn-success" href="../login.php" role="button">LogOut</a>
            </div>
            
        </div>
        
        <div id="h1">
            
                       

            <a href="soluff.php" ><img src="img/ds.jpg" height="50px" width="95px"><p style="color:blue;">Disease solution's</p></a>
            <a href="drqueries.php" ><img src="img/ag.jpeg" height="50px" width="95px"><p style="color:blue;">Agrodoctor</p></a>
            <a href="techff.php" ><img src="img/tec.jpeg" height="50px" width="95px"><p style="color:blue;">New technology</p></a>
            <a href="labourff.php" ><img src="img/l1.jpeg" height="50px" width="95px"><p style="color:blue;">Labour</p></a>
            <a href="index.php" ><img src="img/pr.jpeg" height="50px" width="95px"><p style="color:blue;">Product</p></a>
            <a href="diseaseff.php" ><img src="img/di.jpg" height="50px" width="95px"><p style="color:blue;">Agro Disease</p></a>
            <a href="marketff.php" ><img src="img/mr.png" height="50px" width="95px"><p style="color:blue;">Market Updation</p></a>
            <a href="about us.php" ><img src="../img/nssp.jpeg" height="50px" width="95px"><p style="color:blue;">About us...</p></a>
            


            

        </div>
        
        <div id="h3">
            
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="list-group-hover" id="l1">
                    <label> <h4><b>Farmer Notis</b></h4></label>
                    <a id="n1" href="marketff.php" class="list-group-item">
                    Today Agro Market</a>
                    <a id="n1" href="drqueries.php" class="list-group-item">Find Solution Of Disease </a>
                    <a id="n1" href="labourff.php" class="list-group-item">Assign Labour here...</a>
                    <a id="n1" href="soluff.php" class="list-group-item">Solutions of Disease </a>
                    <a id="n1" href="techff.php" class="list-group-item">New Agro Technologies in Market</a>
                    <a id="n1" href="#" class="list-group-item">Agricultur Advice.</a>
                    <a id="n1" href="about us.php" class="list-group-item">about us...</a></marquee>
                  </div>
            </div>
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                
            

        </div>
    
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
