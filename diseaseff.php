
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
    <style>

            
        
img{
    width: 250px;
    height:200px;
    border-radius: 0% 20% 0% 20%;
    
}
#t1{
    background:rgb(247,240,300);

}
#p1{
    
  overflow-x: hidden; /* Hide horizontal scrollbar */

}


       
    </style>
    <body>
    <?php
       include("head.php");
     ?>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        
 <h1> <span class="label label-danger"><i>Agricultural Disease's.</span></h1>
 <?php
            include ("search.php");
            ?>
            <div class="form-group input-group col-md-offset-3 col-md-4" style="float:right;">
            
              <input type="search" name="search" id="search" class="form-control" placeholder="search Product" onkeyup="return search()"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span></div>

<table class="table table-bordered table-hover"id="display">
<thead style=" background:rgb(255, 30, 175, 0.4);">
    <th><h3>Disease Name.</h3></th>
    <th><h3>Disease Picture.</h3></th>
    <th><h3>Disease Charector's.</h3></th>
    <th><h3>Disease Description.</h3></th>
    <tbody>   
    <?php
                    require "../dbcon.php";
                    $sql="select *from disease";
                   $res= mysqli_query($con,$sql);
                   while ($r=mysqli_fetch_array($res)) {
                    echo "<tr id='t1'>";
                    echo "<td><a href='../ord.php'>".$r[0]."</a></td>";
                    echo "<td><a href='../ord.php'><img src=/E-Farming/des/".$r[1]."></a></td>";
                    echo "<td style='color:brown;'><b>".$r[2]."</td>";
                    echo "<td style='color:olive;'><b>".$r[3]."</td>";
                   }
                   mysqli_close($con);
                   ?>
                    </tbody>
                    </table>
                </div>
                </div>
                <div style="height:100px;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
        
         
                
            <div style="height:100px;">
    <footer>
        <?php
    require "../footer.php";
              ?>
    </footer>
    
            </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
