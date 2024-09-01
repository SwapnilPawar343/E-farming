
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
    body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    
  }
  
  html {
    box-sizing: border-box;
  }
  
  *, *:before, *:after {
    box-sizing: inherit;
  }
  
  .column {
    float: left;
    width: 24%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 2px;
    
  }
  
  .about-section {
    padding: 10px;
    text-align: center;
    color: white;
  }
  
  .container {
    padding: 0 16px;
  }
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .title {
    color:coral;
  }
  
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: coral;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
  
  h1 span{
    opacity: 0;
    display: inline-block;
    animation: animate 1s linear forwards;
    -webkit-animation: animate 1s linear forwards ;
  }
  #d1{
    background-color: coral;
    height: 70%;
  }
  #dr1{
    background-color: rgb(248, 0, 194);
    color: green;
    
  }
  #lo{
    background-color: rgb();
    height: px;
  }
  #ns{
    height:350px;
    width:100%;
  }
  .img{
    height:100%;
    width:100%;
   

  }
  
 
  </style>
  <body>
    
    
      
    
    
  <?php
       include("head.php");
     ?>
     
    
     
     
    
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
      
    
     
    <div id="d1" style="background-color:rgb(238,130,238)" class="about-section">
      <head>
        
        
          
      
        
      <i>
         <h1 id="a1"><i><br>
     About us....
     <h3 style="float: right;"> “Teamwork makes the dream work".</h3>
          </h1></i>
          </head><br>
        </div>
      <div id="ns" style="background-color:rgb(255,192,203)">
      
      
      <h2 style="float: left;">Introduction :-</h2><br> <i><br>
     <h3> <p><br>   <p>The purpose of E-farming system is to easy to buy or sell product of 
      farm. In this software gather all farmer requirement in own software. It 
      consist buy product module to purchase product directly to online 
      market and get varieties of product available many shopkeeper.it avoid 
      the brockrage and fraud of product .
       Farmer sell product directly to market, customer, Hotel,
      Food-industries, Farma-industries etc. Farmer can hire labour. Farmer 
      can communicate to the expert and give advice for problem and solve it. 
      This system help to understand the latest technology comes in global 
      market as well as show information about side business like goat rearing, cattle-breeding etc. Finally main purpose of this system are show 
      daily update of market and buying-selling price. </p></h3></i>
    </div>
</div>
    </div>
   
    
    <h2 style= "text-align:center"><i style=color:purpal;>**** Our Team ****</h2></i>
  
  
    <div class="row" id="dr1"> 
      <div class="column">
        <div class="card">
          <img src="dr.jpg" alt="din" style="width:80%">
          <div class="container" style="background-color:rgb(221,160,221)">
            <h2>Rathod Dinesh</h2>
            <p class="title"></p>
            <p>Mobile No:-8010544072
            </p>
            <p>Email:- dr7030243513@gmail.com</p>
           
          </div>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <img src="sw.jpg" alt="" style="width: 80%">
          <div class="container" style="background-color:rgb(221,160,221)">
            <h2>Swapnil Pawar</h2>
            <p class="title"></p>
            <p>Mobile No:-9022975787
            </p>
            <p>Email:- sp1880110@gmail.com</p>
          
          </div>
        </div>
      </div>
    
      <div class="column">
        <div class="card">
          <img src="n1.jpg" alt="" style="width:80%">
          <div class="container" style="background-color:rgb(221,160,221)">
            <h2>Narayan Sangale</h2>
            <p class="title"></p>
            <p>Mobile No:-9623327931
            </p>
            <p>Email:- narayanvs726@gmail.com</p>
           
          </div>
        </div>
      </div>
      
      <div class="column">
          <div class="card">
            <img src="kk1.jpg" alt="" style="width:80%">
            <div class="container" style="background-color:rgb(221,160,221)">
              <h2>khalate Krushna</h2>
              <p class="title"></p>
              <p>Mobile No:-9823074269
              </p>
              <p>Email:- khalatekrushna05@gmail.com</p>
            
            </div>
          </div>
        </div>
    </div></div>
</div>


<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
  
</div>



    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
        
         
                
            <div style="height:100px;">
    <footer>
        <?php
    require "../footer.php";
              ?>
    </footer>
    
    
  
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>




