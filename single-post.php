<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Single Post</title>
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
    <?php 
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
$postid=intval($_GET['nid']);

    $sql = "SELECT viewCounter FROM tblposts WHERE id = '$postid'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["viewCounter"];
            $sql = "UPDATE tblposts SET viewCounter = $visits+1 WHERE id ='$postid'";
    $con->query($sql);

        }
    } else {
        echo "no results";
    }
    
?>
    <main id="main">
      <section class="single-post-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 post-content" data-aos="fade-up">
            <?php
            $pid=intval($_GET['nid']);
            $currenturl="http://".$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];;
            $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url,tblposts.postedBy,tblposts.lastUpdatedBy,tblposts.UpdationDate from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
            while ($row=mysqli_fetch_array($query)) {
            ?>
              <!-- ======= Single Post Content ======= -->
              <div class="single-post">
                <div class="post-meta">
                  <span class="text"><?php echo htmlentities($row['category']);?></span>
                  <span class="text">&bullet;</span>
                  <span class="mx-1"><b>Posted by </b> <?php echo htmlentities($row['postedBy']);?> on </b><?php echo htmlentities($row['postingdate']);?> |
          <?php if($row['lastUpdatedBy']!=''):?>
          <b>Last Updated by </b> <?php echo htmlentities($row['lastUpdatedBy']);?> on </b><?php echo htmlentities($row['UpdationDate']);?></p>
        <?php endif;?></span>
                </div>
                <h1 class="mb-5">
                <?php echo htmlentities($row['posttitle']);?>
                </h1>
                <figure class="my-4">
                  <img
                    src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>"
                    alt=""
                    class="img-fluid"
                  />
                </figure>
                <p>
                <?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?>
                </p>
                <!-- <figure class="my-4">
                  <img
                    src="assets/img/post-landscape-5.jpg"
                    alt=""
                    class="img-fluid"
                  />
                  <figcaption>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo, odit?
                  </figcaption>
                </figure> -->
              </div>
              <?php } ?>
              <!-- End Single Post Content -->

              <!-- ======= Comments ======= -->
              <div class="comments">
                <h5 class="comment-title py-4">2 Comments</h5>
                <div class="comment d-flex mb-4">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                      <img
                        class="avatar-img"
                        src="zenblog/assets/img/person-5.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                  <div class="flex-grow-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex align-items-baseline">
                      <h6 class="me-2">Jordan Singer</h6>
                      <span class="text-muted">2d</span>
                    </div>
                    <div class="comment-body">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Non minima ipsum at amet doloremque qui magni, placeat
                      deserunt pariatur itaque laudantium impedit aliquam
                      eligendi repellendus excepturi quibusdam nobis esse
                      accusantium.
                    </div>

                    <div class="comment-replies bg-light p-3 mt-3 rounded">
                      <h6
                        class="comment-replies-title mb-4 text-muted text-uppercase"
                      >
                        2 replies
                      </h6>

                      <div class="reply d-flex mb-4">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm rounded-circle">
                            <img
                              class="avatar-img"
                              src="zenblog/assets/img/person-4.jpg"
                              alt=""
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                          <div class="reply-meta d-flex align-items-baseline">
                            <h6 class="mb-0 me-2">Brandon Smith</h6>
                            <span class="text-muted">2d</span>
                          </div>
                          <div class="reply-body">
                            Lorem ipsum dolor sit, amet consectetur adipisicing
                            elit.
                          </div>
                        </div>
                      </div>
                      <div class="reply d-flex">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm rounded-circle">
                            <img
                              class="avatar-img"
                              src="zenblog/assets/img/person-3.jpg"
                              alt=""
                              class="img-fluid"
                            />
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-2 ms-sm-3">
                          <div class="reply-meta d-flex align-items-baseline">
                            <h6 class="mb-0 me-2">James Parsons</h6>
                            <span class="text-muted">1d</span>
                          </div>
                          <div class="reply-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Distinctio dolore sed eos sapiente,
                            praesentium.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="comment d-flex">
                  <div class="flex-shrink-0">
                    <div class="avatar avatar-sm rounded-circle">
                      <img
                        class="avatar-img"
                        src="zenblog/assets/img/person-2.jpg"
                        alt=""
                        class="img-fluid"
                      />
                    </div>
                  </div>
                  <div class="flex-shrink-1 ms-2 ms-sm-3">
                    <div class="comment-meta d-flex">
                      <h6 class="me-2">Santiago Roberts</h6>
                      <span class="text-muted">4d</span>
                    </div>
                    <div class="comment-body">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Iusto laborum in corrupti dolorum, quas delectus nobis
                      porro accusantium molestias sequi.
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Comments -->

              <!-- ======= Comments Form ======= -->
              <div class="row justify-content-center mt-5">
                <div class="col-lg-9">
                  <h5 class="comment-title">Leave a Comment</h5>
                  <div class="row">
                    <div class="col-lg-6 mb-3">
                      <label for="comment-name">Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="comment-name"
                        placeholder="Enter your name"
                      />
                    </div>
                    <div class="col-lg-6 mb-3">
                      <label for="comment-email">Email</label>
                      <input
                        type="text"
                        class="form-control"
                        id="comment-email"
                        placeholder="Enter your email"
                      />
                    </div>
                    <div class="col-12 mb-3">
                      <label for="comment-message">Message</label>

                      <textarea
                        class="form-control"
                        id="comment-message"
                        placeholder="Enter your name"
                        cols="30"
                        rows="10"
                      ></textarea>
                    </div>
                    <div class="col-12">
                      <input
                        type="submit"
                        class="btn btn-primary"
                        value="Post comment"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Comments Form -->
            </div>
            <div class="col-md-4">
              <!-- ======= Sidebar ======= -->
              <div class="col-lg-9">
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
                              <a href="#"
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
                              <a href="#"
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
                  <!-- End Categories -->>
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
