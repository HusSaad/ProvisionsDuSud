<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>Provisions Du Sud</title>
    <link rel="stylesheet" href="main.css">
    <link href="Products.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="AboutUs.css">
    <link rel="stylesheet" href="forms.css">
   
     <!--fav-icon-------------->
    <link rel="shortcut icon" href="images/fav-icon.png"/>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   
    <!--using FontAwesome------------------->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    
    <?php session_start(); ?>
  </head>
  <body>
    <!--Nav-->
    <nav class="navbar navbar-expand-sm navbar-light bg-success">
        <div class="container">
          <a href="Home.php" class="navbar-Company">Provisions Du Sud  </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
             
              
             
              <li class="nav-item">
                <a href="Products.php" class="nav-link">Products</a>
              </li>
              <li class="nav-item">
                <a href="AboutUs.php" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="Home.php#contactpy" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                <a href="shopping-cart.php" class="nav-link">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                     <span class="cart-basket d-flex align-items-center justify-content-center">
                        <?php if(!empty($_SESSION['total_quantity'])) {
                            echo $_SESSION['total_quantity']; }
                            else{ echo "0";}
                         ?>
                     </span>
                  </a>
              </li>
                <?php
                  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<li class='nav-item'><a href='LogOut.php' class='btn btn-outline-light my-2 my-sm-0'>Log Out</a></li>";
                  } else {
                    echo "<li class='nav-item'><a href='SignUp.php' class='btn btn-outline-light my-2 my-sm-0'>Sign Up Now</a></li>";
                    echo "<li class='nav-item'>&nbsp; &nbsp;</li>";  
                    echo "<li class='nav-item'><a href='LogIn.php' class='btn btn-outline-light my-2 my-sm-0'>Log In</a></li>";
                  }
                ?>
            </ul>

            </div> 
        </div>
      </nav>
    <!--End of NAv-->