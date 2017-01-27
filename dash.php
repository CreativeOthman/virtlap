
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HOME</title>
    <link href="Content/css/bootstrap.css" rel="stylesheet" />
    <link href="Content/css/pdsa-sidebar.css" rel="stylesheet" />
    <link href="Content/css/pdsa-summary-blocks.css" rel="stylesheet" />
    <link href="css/demo.css" rel="stylesheet" />
    <link href="css/animate.min.css" rel="stylesheet" />
    <style>
       
    </style>
</head>
<body>
<div class="container">
    <div class="row">
         <header class="">
       
        <?php include ("include/header.php") ?>            
    
        </header>

    </div>
  <nav id="SideNavParrent"class="pdsa-sn-wrapper">
      <ul>
          <li class="pdsa-sn-brand ">
              <a href="dash.php"
                 class="visible-lg visible-md visible-sm "> <i class="glyphicon glyphicon-briefcase"></i> Dashboard
                  <i class="glyphicon glyphicon-home visible-xs"></i>
              </a>           
          </li>
          <li>
              <a href="#"
                 data-toggle="collapse"
                 data-target="#store">
                 <span class="visible-lg visible-md visible-sm">Manage Items<b class="caret"></b></span>
                  <i class="glyphicon glyphicon-shopping-cart visible-xs"></i>
              </a>
              <div class="visible-lg visible-md visible-sm">
                  <ul id="store" class="collapse" data-parent="#SideNavParrent">
                      <li><a href="home.php">  <i class="glyphicon glyphicon-ok"></i> Add News Item</a></li>
                      <li><a href="report.php"> <i class="glyphicon glyphicon-print"></i>Track Items</a></li>
                  </ul>
              </div>
          </li>
          
  </nav>

</div>
    <div class="container body-content">
      <div class="row">
         
      </div>
       
       <div class="row">
            
          
             
        </div>
        <div class="row">
            

            </div>  
             
          </div>
             
            </div>
    <script src="js/demo.js"></script>
<script src="Content/js/jquery.min.js"></script>
<script src="Content/js/bootstrap.js"></script>
   
</body>
</html>
