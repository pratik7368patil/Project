<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" type="text/css"  href="css/index.css" >
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"  href="css/index.css" >
        <title>E-Commerce</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top drop-shadow" id="custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php" id="brand"><b>E-Commerce</b></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                      <li>


                        <a href="servies.php"class="dropdown-toggle" data-toggle="dropdown"><b>Services</b>
                         <span class="caret"></span></a>
                       <ul class="dropdown-menu">
                    <li><a href="mens.php"><b>Men's fashion</b></a></li>
                    <li><a href="womens.php"><b>Women's Fashion</b></a></li>
                    <li><a href="kids.php"><b>Kid's Fashion</b></a></li>
                    <li><a href="other.php"><b>Other Fashion</b></a></li>
                        </ul>

                      </li>

                        <li><a href="about.html"><b> About</b></a></li>
<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><b> Cart</b></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><b> Logout</b></a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span><b> Contach Us</b></a></li>
                    </ul>
                      </div>
                </div>

        </nav>
<div class="container">
  <form class="form" role="form" method="post" action="forgotpass.php" accept-charset="UTF-8" id="login-nav">
     <div class="form-group">
        <label class="sr-only" for="exampleInputEmail2">Email address or Mobile no.</label>
        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address or Mobile no." required>
     </div>

     <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Confirm</button>
     </div>
      <span></span>
  </form>

</div>

      </body>
      </html>
