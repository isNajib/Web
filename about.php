=<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="zenblog/assets/img/favicon.png" rel="icon">
  <link href="zenblog/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="zenblog/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="zenblog/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="zenblog/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="zenblog/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="zenblog/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="zenblog/assets/css/variables.css" rel="stylesheet">
  <link href="zenblog/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
   <?php
   include("header.php");
   ?>
  <!-- End Header -->

  <main id="main">
  <?php 
$pagetype='aboutus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
    <section>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">About us</h1>
          </div>
        </div>
      
        <div class="row mb-5">

          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src="zenblog/assets/img/post-landscape-2.jpg" alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">
              <div class="post-meta mt-4">About us</div>
              <h2 class="mb-4 display-4">Company History</h2>
              
              <p><?php echo $row['Description'];?></p>
              <!-- <p>Fugit eaque illum blanditiis, quo exercitationem maiores autem laudantium unde excepturi dolores quasi eos vero harum ipsa quam laborum illo aut facere voluptates aliquam adipisci sapiente beatae ullam. Tempora culpa iusto illum accusantium cum hic quisquam dolor placeat officiis eligendi.</p> -->
            </div>
          </div>

        </div>

      </div>
    </section>
    <?php } ?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include ("footer.php");
  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="zenblog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="zenblog/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="zenblog/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="zenblog/assets/vendor/aos/aos.js"></script>
  <script src="zenblog/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="zenblog/assets/js/main.js"></script>

</body>

</html>