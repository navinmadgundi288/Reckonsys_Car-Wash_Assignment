<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style> 
    .som{
    display: flex;
    border: 2px solid black;
    padding: 20px;
    margin:10px;
}
.child {
    position: relative;
    width: 30%;
    left :10%
    height: auto;
    
}
  </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="#">Car Wash</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Dashboard.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
    <a class="nav-link" href="Shops.html">Shops <span class="sr-only">(current)</span></a>
  </li>
      <li class="nav-item">
        <a class="nav-link" href="Orders.html">My Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="check.php">Log Out</a>
      </li>
      
    </ul>
  </div>
        <!-- Navbar content -->
      </nav>

      <div class="courasel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="car.jpg" alt="First slide" height="500vh" width="100%">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="car.jpg" alt="Second slide" height="500vh" width="100%">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="car.jpg" alt="Third slide" height="500vh" width="100%">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>

      <br>
      <?php 
        include 'connect.php';
        $query1 = "SELECT * FROM `admin`";
            echo "</br>";
            $q =mysqli_query($conn, $query1);
            $x = 0;
            foreach($q as $row1)
            {
                $x++;
                if($x%3==0){
                  echo '</br>';
                }
                

                echo '
                <div class="som">
                    <div class="child"><img src="car.jpg" width="100%" alt="img"></div>
                    <div class="child " ><div class="card-body">
                    <h5 class="card-title"> Shop Name : <b>',$row1['username'],'</b></h5>
                    <p class=""> Location : <b>',$row1['location'],'</b></p>
                    <a href="" class="btn btn-primary">Book</a>
                  </div></div>
                </div>
                ';

                
            }
      ?>
      
      </div>
    
</body>
</html>