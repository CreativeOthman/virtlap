 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Register</title>
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
         <header>
        <?php include("include/header.php");?>
        </header>

    </div>
  
</div>
    <div class="container body-content" style="margin-left: 6em;">
      <div class="row">
          <div class="col-xs-12 col-sm-4">
             
          </div> 
          <div class="col-xs-12 col-sm-4">
            <div class="modal-body">
              <form method="post">
                   <div class="form-group">
                  <label for="name">Full  Name:</label>
                  <input type="text" id="name" class="form-control" name="name" placeholder="Input Your Full Name">
                  </div>
                  <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" id="email"class="form-control" name="email" placeholder="Input Your Email address">
                  </div>
                  <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password"class="form-control" name="password" placeholder="*********">
                  </div>
                  <div class="form-group">
                  <label for="repassword">Re-Type Password</label>
                  <input type="password" id="repassword" class="form-control" name="repassword"placeholder="**********">
                  </div>
                  <div class="checkbox">
                  <label>
                  <input type="checkbox"> Yes I'm Human
                  </label>
                  </div>
                  <button type="submit" class="btn btn-default">Register</button>
              </form>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4"> 
           
          </div>
      </div>
    </div>
         <script src="js/demo.js"></script>
<script src="Content/js/jquery.min.js"></script>
<script src="Content/js/bootstrap.js"></script>
   
</body>
</html>
