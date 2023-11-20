<?php
require 'partials/_dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>iDiscuss</title>
    <link rel="icon" href="images/logo.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>
</html>

<body>

    <!-- Navbar is in the header -->
    <?php require 'partials/_header.php' ?>
    <!-- These are the picture slides -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1.jpg" height="600" width="200" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/2.jpg" height="600" width="200" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" height="600" width="200" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

   <!-- Cards of the categories -->
   <div class="container">
    <h2 class='text-center my-4'>iDiscuss - browse categories</h2>
    <div class="row">

<!-- fetch all the categories -->
<?php $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while ($catRow = mysqli_fetch_assoc($result)) {
        $sno = $catRow['sno'];
        $name = $catRow['name'];
        $desc = $catRow["description"];
        echo
        '<div class="col-md-4">
            <!-- using cards from bootstrap -->
            <div class="card my-5" style="width: 18rem";>
              <img src="images/' . $name . '-cat.jpg" class="card-img-top" width="300" height="180">
              <div class="card-body">
                <h5 class="card-title">' . $name . '</h5>
                <p class="/card-text">' . substr($desc, 0, 100) . '...</p>
                <a href="threads.php?sno=' . $sno . '" class="btn btn-success btn-primary">View threads</a>
              </div>
            </div>
          </div>';
      }
      ?>

    </div>
  </div>
