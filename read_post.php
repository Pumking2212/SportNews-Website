<?php
session_start();
include('php/database.php');

$id = isset($_GET["id"]) ? $_GET["id"] : null;
if (!$id) {
    exit("No news ID provided.");
}

$read_news_query = "SELECT * FROM news WHERE id = ?";
$stmt = $conn->prepare($read_news_query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row["title"];
    $description = $row["description"];
    $content = $row["content"];
    $date = $row["date"];
    $category = $row["category"];
    $thumbnail = $row["thumbnail"];
} else {
    exit("No news found with the provided ID.");
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
    <link rel="stylesheet" href="css/pagination.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Custom CSS for pagination buttons */
        .page-link {
            .pagination .page-link {
    padding: 0.5rem 0.75rem; /* Adjust padding */
    margin: 0; /* Remove default margin */
    display: inline-block; /* Ensure proper alignment */
            }

        }
        .post-entry {
        font-family: 'Roboto', sans-serif;
    }
    </style>
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
            <li  class ="active">
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
    <div class="site-blocks-cover overlay" style="background-image: url(image/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">News</h1>
            <p class="mt-4 post-entry">Danh mục các tin tức thể thao mới nhất được cập nhật ở nhiều các lĩnh vực khác nhau.</p>
          </div>
        </div>
      </div>
    </div>
    
    <main>
        <section id="contentSection">
            <div class="container post-entry">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="left_content">
                            <div class="single_page">
                                <h1><?php echo $title; ?></h1>
                                <div class="post_commentbox">
                                    <span><i class="fa fa-calendar"></i> <?php echo date('d-M-Y', strtotime($date)); ?></span>
                                    <a href="news.php?category=<?php echo $category; ?>"><i class="fa fa-tags"></i><?php echo $category; ?></a>
                                </div>
                                <div class="single_page_content">
    <div class="image">
        <img src="image/<?php echo $row['thumbnail']; ?>" alt="Thumbnail" class="img-fluid">
    </div>
    <p><b><?php echo $description; ?></b></p>
    <p><?php echo $content; ?></p> <!-- Hiển thị nội dung bài viết -->

    <!-- Hiển thị các hình ảnh bổ sung -->
    <?php
    $news_id = $row['id'];
    $news_images_query = "SELECT * FROM news_images WHERE news_id = ?";
    $stmt_images = $conn->prepare($news_images_query);
    $stmt_images->bind_param("i", $news_id);
    $stmt_images->execute();
    $result_images = $stmt_images->get_result();

    if ($result_images->num_rows > 0) {
        echo '<div class="additional-images">';
        while ($row_image = $result_images->fetch_assoc()) {
            echo '<img src="image/' . $row_image['image'] . '" alt="Additional Image" class="img-fluid">';
        }
        echo '</div>';
    }
    ?>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>          
    
    <!-- Footer Section -->
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

<!-- Your JavaScript links -->
<!-- Include your JavaScript links here -->
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
