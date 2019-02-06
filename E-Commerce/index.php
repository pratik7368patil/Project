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
                        <li class="dropdown">
                       <a href="http://www.jquery2dotnet.com" class="dropdown-toggle" data-toggle="dropdown"><b>Login </b><b class="caret"></b></a>
                       <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                          <li>
                             <div class="row">
                                <div class="col-md-12">
                                   <form class="form" role="form" method="post" action="existing_users.php" accept-charset="UTF-8" id="login-nav">
                                      <div class="form-group">
                                         <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                      </div>
                                      <div class="form-group">
                                         <label class="sr-only" for="exampleInputPassword2">Password</label>
                                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                      </div>

                                      <div class="form-group">
                                         <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                      </div>
                                       <span></span>
                                   </form>
                                </div>
                             </div>
                          </li>
                          <li class="divider"></li>
                          <p><a href="forgot.php">Forgot Password?</a></p>
                        </ul>
                    </li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span><b> SignUp</b></a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span><b> Contach Us</b></a></li>
                    </ul>
                      </div>
                </div>

        </nav>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <a href="#" class="thumbnail"><img src="img/fashion1.jpg" alt="Chania" class="imgstyle1"></a>
      <div class="carousel-caption">
        <h3>Men's Fashion</h3>
        <p>Welcome to mens fashion</p>
      </div>
    </div>

    <div class="item">
      <a href="#" class="thumbnail"><img src="img/fashion1.jpg" alt="Chicago" class="imgstyle1"></a>
      <div class="carousel-caption">
        <h3>Women's Fashion</h3>
        <p>Welcome to womens fashion</p>
      </div>
    </div>

    <div class="item">
      <a href="#" class="thumbnail"><img src="img/fashion1.jpg" alt="Chicago" class="imgstyle1"></a>
      <div class="carousel-caption">
        <h3>Kid's Fashion</h3>
        <p>Welcome to kids fashion</p>
      </div>
    </div>

    <div class="item">
      <a href="#" class="thumbnail"><img src="img/fashion1.jpg" alt="New York" class="imgstyle1"></a>
      <div class="carousel-caption">
        <h3>Other Fashion Accesaries</h3>
        <p>Welcome here!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" style="margin-top: 120px;margin-bottom: 120px;opacity: 0;" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" style="margin-top: 120px; margin-bottom: 120px;opacity: 0;" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="container">
<div class="#">
<center><p><h2>All Fashion are available here. Check our website daily for updates.</h2>
<h3>100% Secure & Trustful.<h3>
</p></center>
</div>
</div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-2">
          <div class="panel panel-default" style="box-shadow: 5px 5px 5px rgba(0,0,0,.05);">
            <div class="panel-heading">
            <a href="mens.php" target="_blank"><b><h3>Men's</h3></b></a>
            </div>
            <div class="panel-body">
          <a href="mens.php" class="thumbnail" target="_blank"><img src="img/fashion.jpg"></a>
        </div>
        <div class="panel-footer">
          <a href="mens.php" target="_blank"><button class="btn btn-primary btn-block">Access</button></a>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-2">
          <div class="panel panel-default" style="box-shadow: 5px 5px 5px rgba(0,0,0,.05);">
            <div class="panel-heading">
              <a href="#" style=" cursor: not-allowed; pointer-events: none;"><b><h3>Women's</h3></b></a>
            </div>
            <div class="panel-body">
          <a href="#" class="thumbnail" style="pointer-events: none; cursor: not-allowed;"><img src="img/fashion.jpg"></a>
        </div>
        <div class="panel-footer">
          <button class="btn btn-primary btn-block" disabled>Access</button>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-2">
          <div class="panel panel-default" style="box-shadow: 5px 5px 5px rgba(0,0,0,.05);">
            <div class="panel-heading">
            <a href="#" style="pointer-events: none; cursor: not-allowed;"><b><h3>Kid's</h3></b></a>
            </div>
            <div class="panel-body">
          <a href="#" class="thumbnail" style="pointer-events: none; cursor: not-allowed;"><img src="img/fashion"></a>
        </div>
        <div class="panel-footer">
          <button class="btn btn-primary btn-block" disabled>Access</button>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-2">
          <div class="panel panel-default" style="box-shadow: 5px 5px 5px rgba(0,0,0,.05);">
            <div class="panel-heading">
              <a href="#" style="pointer-events: none; cursor: not-allowed;"><b><h3>Other</h3></b></a>
            </div>
            <div class="panel-body">
          <a href="#" class="thumbnail" style="pointer-events: none; cursor: not-allowed;"><img src="img/fashion.jpg"></a>
        </div>
        <div class="panel-footer">
          <button class="btn btn-primary btn-block" disabled>Access</button>
        </div>
        </div>
        </div>
     </div>
   </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <a href="about.php">About</a></br>
            <a href="#">Fashion</a>
          </div>
          <div class="col-lg-4">
            <a href="login.php">Login</a></br>
            <a href="signup.php">SignUp</a>
          </div>
          <div class="col-lg-4">
            C
          </div>
        </div>
      </div>
      <center>
      <hr>
<p>Copyright © E-Commerce. All Rights Reserved ​and ​Contact Us: <a href="tel:+918805100927">+91 8805100927</a></p>
</center>
    </footer>

<script>
function fun1()
{
  alert("Access Denied.");
}
</script>


      </body>
      </html>
