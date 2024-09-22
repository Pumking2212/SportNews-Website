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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
<div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="image/logo.png" alt="Image"></a>
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
            <li class="">
              <a href="index.php">Home</a>
              <ul class="dropdown arrow-top">
                
                
                </li>
              </ul>
            </li>
            <li>
              <a href="news.php">News</a>
              
            </li>
            <li><a href="matches.php">Matches</a></li>
            <li><a href="about.php">About</a></li>
            <li class = "active"><a href="contact.php">Contact</a></li>
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
  
    <div class="site-blocks-cover overlay" style="background-image: url(image/contact_img.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Contact Us</h1>
            <p class="mt-4">Feel free to reach out to us using the form below. Please specify your topic and any requests you may have, and we will promptly respond to you via the Gmail address you provide.<br> We look forward to hearing from you!</p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-first">
          <div class="col-md-7">
          <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include('php/database.php');
                
                $first_name = $_POST["c_fname"];
                $last_name = $_POST["c_lname"];
                $email = $_POST["c_email"];
                $subject = $_POST["c_subject"];
                $message = $_POST["c_message"];
                
                $email_pattern = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
                
                if (!preg_match($email_pattern, $email)) {
                    echo "<div class='alert alert-danger'>Invalid email format.</div>";
                    exit; 
                }
                
                if (strlen($subject) < 10 || strlen($message) < 10) {
                    echo "<div class='alert alert-danger'>Subject and message must be at least 10 characters long.</div>";
                    exit; 
                }
                
                $sql = "INSERT INTO `comment` (`first_name`, `last_name`, `email`, `subject`, `message`) 
                        VALUES ('$first_name', '$last_name', '$email', '$subject', '$message')";
                
                if (mysqli_query($conn, $sql)) {
                    echo "<div class='alert alert-success'>Your comment has been saved successfully.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
                }
                
                mysqli_close($conn);
            }
            ?>



            <form action="contact.php" method="post" class="bg-white">
              
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Subject </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Message </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-5">
            <div class="p-4 border mb-3 bg-white">
              <p class="mb-0">Address</p>
              <p class="mb-0">148-150 & 167 Old Kent Rd, London SE1 5TY, United Kingdom</p>
              <p class="mb-4">The Bridge SEN School - Center for teaching disabled children</p>


              <p class="mb-0">Phone</p>
              <p class="mb-4"><a href="trash_linking.php">+1 234 567 8910</a></p>

              <p class="mb-0">Email Address</p>
              <p class="mb-4"><a href="trash_linking.php">adminwebsite@gmail.com</a></p>

            </div>
            
          </div>
         
        </div>
      </div>
    </div>

   

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

                $query = "SELECT * FROM news ORDER BY RAND() LIMIT 3";
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

                // Đóng kết nối CSDL
                mysqli_close($conn);
                ?>
            </div>
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