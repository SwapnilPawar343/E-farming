
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
.sp{
    width: 18rem;
    height: 200px;
    display: block;
    overflow: hidden;
}


       
    </style>
    <body>
    <?php
       include("head.php");
     ?>
 <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        
 <h1> <span class="label label-info"><i>Agro Products</span></h1>
 <?php
            include ("search.php");
            ?>
            <div class="form-group input-group col-md-offset-3 col-md-4" style="float:right;">
            
              <input type="search" name="search" id="search" class="form-control" placeholder="search Product" onkeyup="return search()"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span></div>

                
           
    <?php
                    require "../dbcon.php";
                    $sql="select *from product";
                   $res= mysqli_query($con,$sql);
                   while ($r=mysqli_fetch_array($res)) {
                  ?> <div class="card sp " style="">
                   <img src="../product/<?php   echo $r[2] ?>" class="card-img-top" alt="  ">
                   <div class="card-body">
                       <h5 class="card-title"><?php   echo $r[1] ?></h5>
                       <p class="card-text"><?php   echo $r[4] ?></p>
                      <a href="ord.php?action=remove&pname=<?php   echo $r[0] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"aria-hidden="true"><h2><i>Buy<br>now</h2></i></span></a>
                    </div>
                  </div>
                  <?php }?>
                <?php   mysqli_close($con);
                   ?>
                 
                                
             
      

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

