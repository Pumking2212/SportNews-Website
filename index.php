<?php
session_start();
if (!isset($_SESSION["user"])) {
   //header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Pumking Sports News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
      .feature-block-1 img {
    width: 100%; 
    height: 100%; 
    }
    .feature-block-1 {
        background-size: cover; 
    }

    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="image/logonew.png" alt="Image"></a> 
        </div>
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
      <div class="py-3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3">
              <a href="trash_linking.php" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="trash_linking.php" class="text-secondary px-2"><span class="icon-instagram"></span></a>
              <a href="trash_linking.php" class="text-secondary px-2"><span class="icon-twitter"></span></a>
              <a href="trash_linking.php" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="trash_linking.php" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">youremail@domain.com</span></a></div>
              <div class="d-inline-block"><a href="trash_linking.php" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+1 232 3532 321</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
        <div class="container position-relative">
          <div class="site-logo">
            <a href="index.php"><img src="image/logonew.png" alt=""></a>
          </div>

          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="nav-link">
                  <form action="search.php" method="GET" class="search-form">
                    <input type="text" name="query" placeholder="Search....">
                    <button type="submit"><i class="icon-search"></i></button>
                  </form>
            </li>
            <li class="active">
              <a href="index.php">Home</a>
              
            </li>
            <li class=>
              <a href="news.php">News</a>
              
            </li>
            <li><a href="matches.php">Matches</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
            
              if (isset($_SESSION["user"])) {
                echo '<li><a href="logout.php" class="btn btn-warning">Logout</a></li>';
              } else {
                echo '<li><a href="register.php">Register</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
              }
            ?>
          </ul>
        </div>
      </nav>
    </header>
    


    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(image/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">The World Cup Top Goal Scorer</h1>
              <p><a href="read_post.php?id=18" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(image/hero_bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">World Cup Dream</h1>
              <p><a href="read_post.php?id=19" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(image/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">The World Cup 2022 Champion</h1>
              <p><a href="read_post.php?id=17" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>
    

    <div class="site-section pt-0 feature-blocks-1 post-entry" data-aos="fade" data-aos-delay="100">
    <div class="container">
        <div class="row">
            <?php
            include('php/database.php');

            $query = "SELECT title, description, thumbnail FROM news WHERE id = 24";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $title = $row['title'];
                $description = substr($row['description'], 0, 50); 
                if (strlen($row['description']) >= 50) {
                  $description .= '...'; 
                }
                $thumbnail = $row['thumbnail'];

                echo '<div class="col-md-6 col-lg-4">';
                echo '<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(\'image/' . $thumbnail . '\');" >';
                echo '<div class="text">';
                echo '<h2 class="h5 text-white">' . $title . '</h2>';
                echo '<p>' . $description . '</p>';
                echo '<p class="mb-0"><a href="read_post.php?id=23" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>';
                echo '</div></div></div>';
            } else {
                echo "No news article found with ID 22.";
            }

            $query1 = "SELECT title, description, thumbnail FROM news WHERE id = 21";
            $result1 = mysqli_query($conn, $query1);

            if ($result1 && mysqli_num_rows($result1) > 0) {
                $row = mysqli_fetch_assoc($result1);
                $title1 = $row['title'];
                $description1 = substr($row['description'], 0, 50); 
                if (strlen($row['description']) >= 50) {
                  $description1 .= '...'; 
                }
                $thumbnail1 = $row['thumbnail'];

                echo '<div class="col-md-6 col-lg-4">';
                echo '<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(\'image/' . $thumbnail1 . '\');">';
                echo '<div class="text">';
                echo '<h2 class="h5 text-white">' . $title1 . '</h2>';
                echo '<p>' . $description1 . '</p>';
                echo '<p class="mb-0"><a href="read_post.php?id=21" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>';
                echo '</div></div></div>';
            } else {
                echo "No news article found with ID 21.";
            }

            $query2 = "SELECT title, description, thumbnail FROM news WHERE id = 22";
            $result2 = mysqli_query($conn, $query2);

            if ($result2 && mysqli_num_rows($result2) > 0) {
                $row = mysqli_fetch_assoc($result2);
                $title2 = $row['title'];
                $description2 = substr($row['description'], 0, 50);
                if (strlen($row['description']) >= 50) {
                  $description2 .= '...'; 
                }
                $thumbnail2 = $row['thumbnail'];

                echo '<div class="col-md-6 col-lg-4">';
                echo '<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(\'image/' . $thumbnail2 . '\');">';
                echo '<div class="text">';
                echo '<h2 class="h5 text-white">' . $title2 . '</h2>';
                echo '<p>' . $description2 . '</p>';
                echo '<p class="mb-0"><a href="read_post.php?id=22" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>';
                echo '</div></div></div>';
            } else {
                echo "No news article found with ID 22.";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>




    <div class="site-blocks-vs site-section bg-light">
      <div class="container">

        <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">
          
          
        <div>
    <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
        Next World Cup Championship 
        <p id="demo" style="font-size: 40px;"></p> 
        <script>
            var countDownDate = <?php echo strtotime('Sep 5, 2026 15:37:25') ?> * 1000;
            var now = <?php echo time() ?> * 1000;

            var x = setInterval(function() {

                now = now + 1000;

                var distance = countDownDate - now;


                var weeks = Math.floor(distance / (1000 * 60 * 60 * 24 * 7));
                var remainingDistance = distance % (1000 * 60 * 60 * 24 * 7);

                var days = Math.floor(remainingDistance / (1000 * 60 * 60 * 24));
                var remainingDistance = remainingDistance % (1000 * 60 * 60 * 24);

                var hours = Math.floor(remainingDistance / (1000 * 60 * 60));
                var remainingDistance = remainingDistance % (1000 * 60 * 60);

                var minutes = Math.floor(remainingDistance / (1000 * 60));
                var remainingDistance = remainingDistance % (1000 * 60);

                var seconds = Math.floor(remainingDistance / 1000);

                document.getElementById("demo").innerHTML = weeks +"w" + days + "d " + hours + "h " +
                    minutes + "m " + seconds + "s ";

                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
    </div>
</div>


          
          
          
        </div>

        

          </div>
        </div>

        
      </div>
    </div>
    <div id="ls-widget" data-w="w_default" class="livescore-widget" style="height: 400px;"></div>
<script type="text/javascript" src="https://ls.soccersapi.com/widget/res/w_default/widget.js"></script>


<div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('image/hero_bg_3.jpg');" data-stellar-background-ratio="0.5">

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="text-white">More Game Highlights</h2>
            </div>
        </div>

        <div class="row">
            <div class="nonloop-block-13 owl-carousel">
                <?php
                include('php/database.php');

                $query = "SELECT * FROM news ORDER BY RAND() LIMIT 10";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<div class="item">';
                      echo '<div class="block-12">';
                      echo '<figure style="margin-bottom: 0;min-height: 120px">';
                      echo '<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(\'image/' . $row['thumbnail'] . '\'); min-height: 300px;"></div>';
                      echo '</figure>';
                      echo '<div class="text">';
                      echo '<span class="meta">' . date('M d, Y', strtotime($row['date'])) . '</span>';
                      echo '<div class="text-inner">';
                      $title = strlen($row['title']) > 100 ? substr($row['title'], 0, 100) . '...' : $row['title'];
                      echo '<h2 class="heading mb-3" style="font-family: \'Roboto\', sans-serif; min-height: 120px;"><a href="read_post.php?id=' . $row['id'] . '" class="text-black">' . $row['title'] . '</a></h2>';
                      $description = strlen($row['description']) > 100 ? substr($row['description'], 0, 100) . '...' : $row['description'];
                      echo '<p style="min-height: 120px; font-family: \'Roboto\', sans-serif;">' . $description . '</p>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                      echo '</div>';
                      
                    }
                } else {
                    echo "No news articles found.";
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>



    <div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h2 class="text-black" style="font-family: 'Roboto', sans-serif;">Latest News</h2>
            </div>
        </div>
        <div class="row">
            <?php
            include('php/database.php');

            $query = "SELECT * FROM news ORDER BY date DESC LIMIT 3";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  echo '<div class="col-md-6 col-lg-4">';
                  echo '<div class="post-entry">';
                  echo '<div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url(\'image/' . $row['thumbnail'] . '\'); min-height: 300px;">';
                  echo '</div>';
                  echo '<div class="text p-4">';
                  echo '<h2 class="h5 text-black" style="min-height: 60px;"><a href="read_post.php?id=' . $row['id'] . '" style="font-family: \'Roboto\', sans-serif;">' . $row['title'] . '</a></h2>';
                  echo '<span class="text-uppercase date d-block mb-3"><small> ' . date('M d, Y', strtotime($row['date'])) . '</small></span>';
                  $description = strlen($row['description']) > 100 ? substr($row['description'], 0, 100) . '...' : $row['description'];
                  echo '<p class="mb-0" style="min-height: 60px;font-family: \'Roboto\', sans-serif;">' . $description . '</p>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  
                }
            } else {
              
                echo "No news articles found.";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</div>




    
    
    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About The Pumking Sports News</h3>
              <p style="text-align: justify;">The Pumking Sports News is your go-to destination for the latest updates across a wide spectrum of sports. From thrilling football matches to exciting tournaments in various disciplines, we keep you informed with up-to-the-minute news and captivating insights. Stay ahead of the game with our comprehensive coverage and immerse yourself in the world of sports like never before.</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quick Menu</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="matches.php">Matches</a></li>
                  <li><a href="news.php">News</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="trash_linking.php" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="trash_linking.php" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="trash_linking.php" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="trash_linking.php" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Watch Video</h3>

              <div class="block-16">
                <figure>
                  <img src="image/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                  <a href="https://vimeo.com/773912018" class="play-button popup-vimeo"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>

          

          </div>
          
        </div>
        
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>