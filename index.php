<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>MyBlog</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="zenblog/assets/img/favicon.png" rel="icon" />
    <link href="zenblog/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="zenblog/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="zenblog/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="zenblog/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="zenblog/assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="zenblog/assets/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS Files -->
    <link href="zenblog/assets/css/main.css" rel="stylesheet" />
    <link href="zenblog/assets/css/variables.css" rel="stylesheet" />

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
      <!-- ======= Hero Slider Section ======= -->
      <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
          <div class="row">
            <div class="col-12">
              <div class="swiper sliderFeaturedPosts">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a
                      href="single-post.html"
                      class="img-bg d-flex align-items-end"
                      style="
                        background-image: url('zenblog/assets/img/post-slide-1.jpg');
                      "
                    >
                      <div class="img-bg-inner">
                        <h2>
                          The Best Homemade Masks for Face (keep the Pimples
                          Away)
                        </h2>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Quidem neque est mollitia! Beatae minima
                          assumenda repellat harum vero, officiis ipsam magnam
                          obcaecati cumque maxime inventore repudiandae quidem
                          necessitatibus rem atque.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="swiper-slide">
                    <a
                      href="single-post.html"
                      class="img-bg d-flex align-items-end"
                      style="
                        background-image: url('zenblog/assets/img/post-slide-2.jpg');
                      "
                    >
                      <div class="img-bg-inner">
                        <h2>
                          17 Pictures of Medium Length Hair in Layers That Will
                          Inspire Your New Haircut
                        </h2>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Quidem neque est mollitia! Beatae minima
                          assumenda repellat harum vero, officiis ipsam magnam
                          obcaecati cumque maxime inventore repudiandae quidem
                          necessitatibus rem atque.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="swiper-slide">
                    <a
                      href="single-post.html"
                      class="img-bg d-flex align-items-end"
                      style="
                        background-image: url('zenblog/assets/img/post-slide-3.jpg');
                      "
                    >
                      <div class="img-bg-inner">
                        <h2>
                          13 Amazing Poems from Shel Silverstein with Valuable
                          Life Lessons
                        </h2>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Quidem neque est mollitia! Beatae minima
                          assumenda repellat harum vero, officiis ipsam magnam
                          obcaecati cumque maxime inventore repudiandae quidem
                          necessitatibus rem atque.
                        </p>
                      </div>
                    </a>
                  </div>

                  <div class="swiper-slide">
                    <a
                      href="single-post.html"
                      class="img-bg d-flex align-items-end"
                      style="
                        background-image: url('zenblog/assets/img/post-slide-4.jpg');
                      "
                    >
                      <div class="img-bg-inner">
                        <h2>
                          9 Half-up/half-down Hairstyles for Long and Medium
                          Hair
                        </h2>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit. Quidem neque est mollitia! Beatae minima
                          assumenda repellat harum vero, officiis ipsam magnam
                          obcaecati cumque maxime inventore repudiandae quidem
                          necessitatibus rem atque.
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="custom-swiper-button-next">
                  <span class="bi-chevron-right"></span>
                </div>
                <div class="custom-swiper-button-prev">
                  <span class="bi-chevron-left"></span>
                </div>

                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Hero Slider Section -->
     
      <!-- ======= Post Grid Section ======= -->
      <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
          <div class="row g-5"> 
            <div class="col-lg-4">
              <?php
              if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 1;
                $offset = ($pageno-1) * $no_of_records_per_page;


                $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                $result = mysqli_query($con,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

              $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
              while ($row=mysqli_fetch_array($query)) {
              ?>
                <div class="post-entry-1 lg">
                  <a href="single-post.php?nid=<?php echo htmlentities($row['pid'])?>"
                    ><img
                      src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>"
                      alt=""
                      class="img-fluid"
                  /></a>
                  <div class="post-meta">
                    <span class="date"><?php echo htmlentities($row['category']);?></span>
                    <span class="mx-1">&bullet;</span> <span>Posted on <?php echo htmlentities($row['postingdate']);?></span>
                  </div>
                  <h2>
                    <a href="single-post.php?nid=<?php echo htmlentities($row['pid'])?>"
                      >
                      <?php echo htmlentities($row['posttitle']);?>
                      </a
                    >
                  </h2>
                  <!-- <p class="mb-4 d-block">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                    temporibus repudiandae, inventore pariatur numquam cumque
                    possimus exercitationem? Nihil tempore odit ab minus eveniet
                    praesentium, similique blanditiis molestiae ut saepe
                    perspiciatis officia nemo, eos quae cumque. Accusamus fugiat
                    architecto rerum animi atque eveniet, quo, praesentium
                    dignissimos
                  </p> -->

                </div>
                <?php }?>
              </div>
              <div class="col-lg-8">
                <div class="row g-5">
                  <div class="col-lg-4 border-start custom-border">
                    <?php
                    if (isset($_GET['pageno'])) {
                      $pageno = $_GET['pageno'];
                      } else {
                          $pageno = 1;
                      }
                      $no_of_records_per_page = 2;

                      if ($pageno == 1) {
                        $offset = 1; // Mulai dari rekaman kedua pada halaman pertama
                    } else {
                        $offset = ($pageno - 1) * $no_of_records_per_page + 1;
                    }
                      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                      $result = mysqli_query($con,$total_pages_sql);
                      $total_rows = mysqli_fetch_array($result)[0];
                      $total_pages = ceil($total_rows / $no_of_records_per_page);

                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <div class="post-entry-1">
                      <a href="single-post.php?nid=<?php echo htmlentities($row['pid'])?>"
                        ><img
                          src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>"
                          alt=""
                          class="img-fluid"
                      /></a>
                      <div class="post-meta">
                        <span class="date"><?php echo htmlentities($row['category']);?></span>
                        <span class="mx-1">&bullet;</span>
                        <span>Posted on <?php echo htmlentities($row['postingdate']);?></span>
                      </div>
                      <h2>
                        <a href="single-post.php?nid=<?php echo htmlentities($row['pid'])?>"
                          ><?php echo htmlentities($row['posttitle']);?></a
                        >
                      </h2>
                    </div>
                    <?php }?>
                  </div>
                  <div class="col-lg-4 border-start custom-border">
                  <?php
                    if (isset($_GET['pageno'])) {
                      $pageno = $_GET['pageno'];
                      } else {
                          $pageno = 1;
                      }
                      $no_of_records_per_page = 2;

                      if ($pageno == 1) {
                        $offset = 3; // Mulai dari rekaman kelima pada halaman pertama
                    } else {
                        $offset = 3 + ($pageno - 1) * $no_of_records_per_page;
                    }
                      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                      $result = mysqli_query($con,$total_pages_sql);
                      $total_rows = mysqli_fetch_array($result)[0];
                      $total_pages = ceil($total_rows / $no_of_records_per_page);

                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <div class="post-entry-1">
                      <a href="single-post.php?nid=<?php echo htmlentities($row['pid'])?>"
                        ><img
                          src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>"
                          alt=""
                          class="img-fluid"
                      /></a>
                      <div class="post-meta">
                        <span class="date"><?php echo htmlentities($row['category']);?></span>
                        <span class="mx-1">&bullet;</span>
                        <span>Posted on <?php echo htmlentities($row['postingdate']);?></span>
                      </div>
                      <h2>
                        <a href="single-post.php?nid=<?php echo htmlentities($row['pid'])?>"
                          ><?php echo htmlentities($row['posttitle']);?></a
                        >
                      </h2>
                    </div>
                    <?php }?>
                  </div>

                  <!-- Trending Section -->
                  <div class="col-lg-4">
                    <div class="aside-block ms-3">
                      <ul
                        class="nav nav-pills custom-tab-nav mb-4"
                        id="pills-tab"
                        role="tablist"
                        >
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link active"
                            id="pills-popular-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-popular"
                            type="button"
                            role="tab"
                            aria-controls="pills-popular"
                            aria-selected="true"
                          >
                            Popular
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="pills-latest-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-latest"
                            type="button"
                            role="tab"
                            aria-controls="pills-latest"
                            aria-selected="false"
                          >
                            Latest
                          </button>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <!-- Popular -->
                        <?php
                        $query1 = mysqli_query($con, "SELECT tblposts.id as pid, tblposts.PostTitle as posttitle FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId ORDER BY viewCounter DESC LIMIT 5");
                        ?>

                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                          <?php while ($result = mysqli_fetch_array($query1)) { ?>
                            <div class="post-entry-1 border-bottom">
                              <div class="post-meta">
                                <!-- Meta info can go here -->
                              </div>
                              <h2 class="mb-2">
                                <a href="single-post.php?nid=<?php echo htmlentities($result['pid']) ?>">
                                  <?php echo htmlentities($result['posttitle']); ?>
                                </a>
                              </h2>
                              <!-- Author info can go here -->
                            </div>
                          <?php } ?>
                        </div>

                        <!-- End Popular -->

                        <!-- Latest -->
                        <?php
                        $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
                        while ($row=mysqli_fetch_array($query)) {

                        ?>
                        <div
                          class="tab-pane fade"
                          id="pills-latest"
                          role="tabpanel"
                          aria-labelledby="pills-latest-tab"
                          >
                          <div class="post-entry-1 border-bottom">
                            <div class="post-meta">
                              <!-- <span class="date">Lifestyle</span>
                              <span class="mx-1">&bullet;</span>
                              <span>Jul 5th '22</span> -->
                            </div>
                            <h2 class="mb-2">
                              <a href="single-post.php?nid=<?php echo htmlentities($row['pid'])?>"
                                ><?php echo htmlentities($row['posttitle']);?></a
                              >
                            </h2>
                            <!-- <span class="author mb-3 d-block">Jenny Wilson</span> -->
                          </div>
                        </div>
                        <?php } ?>
                        <!-- End Latest-->
                      </div>
                    </div>
                  </div>
                  <!-- End Trending Section -->
                </div>
              </div>
            </div>
          </div>
          <!-- End .row -->
        </div>
      </section>
      <!-- End Post Grid Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
     <?php
     include ("footer.php");
     ?>
    <!-- ======= End Footer ======= -->
    

    <a
      href="#"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

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
