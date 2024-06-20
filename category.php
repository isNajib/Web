<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Category</title>
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
    <link href="zenblog/assets/css/variables.css" rel="stylesheet" />
    <link href="zenblog/assets/css/main.css" rel="stylesheet" />

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
     include ("header.php");
     ?>
    <!-- End Header -->

    <main id="main">
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-9" data-aos="fade-up">
            <?php 
              if($_GET['catid']!=''){
              $_SESSION['catid']=intval($_GET['catid']);
              }
                  if (isset($_GET['pageno'])) {
                          $pageno = $_GET['pageno'];
                      } else {
                          $pageno = 1;
                      }
                      $no_of_records_per_page = 8;
                      $offset = ($pageno-1) * $no_of_records_per_page;


                      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                      $result = mysqli_query($con,$total_pages_sql);
                      $total_rows = mysqli_fetch_array($result)[0];
                      $total_pages = ceil($total_rows / $no_of_records_per_page);


              $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId='".$_SESSION['catid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

              $rowcount=mysqli_num_rows($query);
              if($rowcount==0)
              {
              echo "No record found";
              }
              else {
              while ($row=mysqli_fetch_array($query)) {
              ?>
              <h3 class="category-title">Category: <?php echo htmlentities($row['category']);?></h3>

              <div class="d-md-flex post-entry-2 half">
                <a href="single-post.html" class="me-4 thumbnail">
                  <img
                    src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>"
                    alt=""
                    class="img-fluid"
                  />
                </a>
                <div>
                  <div class="post-meta">
                    <span class="mx-1">&bullet;</span> <span>Posted on <?php echo htmlentities($row['postingdate']);?></span>
                  </div>
                  <h3>
                    <a href="single-post.php"
                      ><?php echo htmlentities($row['posttitle']);?></a
                    >
                  </h3>
                  <div class="d-flex align-items-center author">
                    <div class="photo">
                      <img
                        src="zenblog/assets/img/person-2.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                    <div class="name">
                      <h3 class="m-0 p-0">Wade Warren</h3>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
              
              <div class="text-start py-4">
                <div class="custom-pagination">
                  <a href="#" class="prev">Prevous</a>
                  <a href="#" class="active">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                  <a href="#" class="next">Next</a>
                </div>
              </div>
              <?php }?>
            </div>

            <div class="col-lg-3">
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
                        $query1=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId  order by viewCounter desc limit 5");
                        while ($result=mysqli_fetch_array($query1)) {

                        ?>
                        <div
                          class="tab-pane fade show active"
                          id="pills-popular"
                          role="tabpanel"
                          aria-labelledby="pills-popular-tab"
                          >
                          <div class="post-entry-1 border-bottom">
                            <div class="post-meta">
                              <!-- <span class="date">Sport</span>
                              <span class="mx-1">&bullet;</span>
                              <span>Jul 5th '22</span> -->
                            </div>
                            <h2 class="mb-2">
                              <a href="single-post.php"
                                ><?php echo htmlentities($result['posttitle']);?></a
                              >
                            </h2>
                            <!-- <span class="author mb-3 d-block">Jenny Wilson</span> -->
                          </div>
                        </div> 
                        <?php } ?>
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
          </div>
        </div>
      </section>
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
