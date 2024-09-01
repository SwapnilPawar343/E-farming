
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
    background:rgb(153, 204,255);

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
        
 <h1> <span class="label label-success"><i style="color:black;">Solution's of Disease...</i></span></h1><i><br>

<table class="table table-bordered table-hover"
id="search">
<thead style=" background:rgb(177, 174, 145);">
    <th style="color:black;"><h3>Disease Name.</h3></th>
    <th style="color:white;"><h3>Disease Charector.</h3></th>
    <th style="color:green;"><h3>Solution Of Disease.</h3></th>
    
    
    
   
    

    <tbody>
                
           
    <?php
                    require "../dbcon.php";
                    $sql="select *from solu";
                   $res= mysqli_query($con,$sql);
                   while ($r=mysqli_fetch_array($res)) {
                    echo "<tr id='t1'>";
                    echo "<td style='color:indigo;'><b>".$r[0]."</a></td>";
                    echo "<td style='color:bold;'><b>".$r[1]."</td>";
                    echo "<td style='color:olive;'><b>".$r[2]."</td>";
                    
                    
                   }
                   mysqli_close($con);
                   ?>
                    </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
        
         
                
        <div style="height:170px;">
<footer>
    <?php
require "../footer.php";
          ?>
</footer>

        </div>
        </div>
     


    

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
