<?php
session_start();
include('php/database.php'); 

if (!isset($_SESSION["user"])) {
   //header("Location: login.php");
}
    $page_number = isset($_GET['page']) ? $_GET['page'] : 1;

    $records_per_page = 3;
    $start_record = ($page_number - 1) * $records_per_page;

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
        
        .page-link {
            .pagination .page-link {
    padding: 0.5rem 0.75rem; 
    margin: 0; 
    display: inline-block; 
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
            <li class="active">
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
            
    <div class="col-md-6 col-lg-3 mb-4 ml-auto"> 
    <div class="form-group">
        <label for="categoryFilter">Filter by Category:</label>
        <div >
            <select class="form-control form-control-sm" id="categoryFilter"> 
                <option value="">All Categories</option>
                <?php
                $category_query = mysqli_query($conn, "SELECT * FROM category");
                echo '<div class="category-options">';
                while ($category_row = mysqli_fetch_array($category_query)) {
                    echo '<option value="' . $category_row['category_name'] . '">' . $category_row['category_name'] . '</option>';
                }
                echo '</div>';
                ?>
            </select>
        </div>
    </div>
    <button id="submitFilter" class="btn btn-primary">Submit</button> 
</div>

<style>

    .category-options {
        max-height: 30px;
    }
</style>

<script>
    document.getElementById("submitFilter").addEventListener("click", function() {
        var selectedCategory = document.getElementById("categoryFilter").value;
        window.location.href = "news.php?category=" + selectedCategory;
    });
</script>




    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <?php
                $filterCategory = isset($_GET['category']) ? $_GET['category'] : '';
                
                $query = "SELECT * FROM news";
                if (!empty($filterCategory)) {
                    $query .= " WHERE category = '$filterCategory'";
                }
                $query .= " ORDER BY date DESC LIMIT $start_record, $records_per_page";
                
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="post-entry">
                                <div class="image">
                                    <img src="image/<?php echo $row['thumbnail']; ?>" alt="Image" class="img-fluid">
                                </div>
                                <div class="text p-4">
                                    <h2 class="h5 text-black"><a href="read_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
                                    <p class="mb-0"><?php echo substr($row['description'], 0, 100); ?>...</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
          <?php
          $total_records_query = "SELECT COUNT(*) AS total_records FROM news" . ($filterCategory != '' ? " WHERE category = '$filterCategory'" : "");
          $total_records_result = mysqli_query($conn, $total_records_query);
          $total_records_row = mysqli_fetch_assoc($total_records_result);
          $total_records = $total_records_row['total_records'];
          $total_pages = ceil($total_records / $records_per_page);

          $start_page = max(1, $page_number - 2);
          $end_page = min($total_pages, $start_page + 4);

          if ($end_page - $start_page < 4) {
              $start_page = max(1, $end_page - 4);
          }
          ?>
          <div class="row">
              <div class="col-md-12 text-center">
                  <div class="site-block-27">
                      <ul class="pagination">
                          <li class="page-item <?php echo ($page_number <= 1) ? 'disabled' : ''; ?>">
                              <a class="page-link" href="news.php?page=1<?php echo ($filterCategory != '') ? '&category=' . urlencode($filterCategory) : ''; ?>" aria-label="Previous">
                                  <<
                              </a>
                          </li>
                          <?php
                          for ($i = $start_page; $i <= $end_page; $i++) {
                              ?>
                              <li class="page-item <?php echo ($i == $page_number) ? 'active' : ''; ?>">
                                  <a class="page-link" href="news.php?page=<?php echo $i . ($filterCategory != '' ? '&category=' . urlencode($filterCategory) : ''); ?>"><?php echo $i; ?></a>
                              </li>
                              <?php
                          }
                          ?>
                          <li class="page-item <?php echo ($page_number >= $total_pages) ? 'disabled' : ''; ?>">
                              <a class="page-link" href="news.php?page=<?php echo $total_pages . ($filterCategory != '' ? '&category=' . urlencode($filterCategory) : ''); ?>" aria-label="Next">
                                  >>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>


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
