<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-content">
  <div class="container">

    <div class="row g-5">
      <div class="col-lg-4">
        <h3 class="footer-heading">About MyBlog</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
        <p><a href="about.php" class="footer-link-more">Learn More</a></p>
      </div>
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading">Navigation</h3>
        <ul class="footer-links list-unstyled">
          <li><a href="index.php"><i class="bi bi-chevron-right"></i> Home</a></li>
          <li><a href="index.php"><i class="bi bi-chevron-right"></i> Blog</a></li>
          <li><a href="category.php"><i class="bi bi-chevron-right"></i> Categories</a></li>
          <li><a href="about.php"><i class="bi bi-chevron-right"></i> About us</a></li>
          <li><a href="contact.php"><i class="bi bi-chevron-right"></i> Contact</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2">
        <h3 class="footer-heading">Categories</h3>
        <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                while($row=mysqli_fetch_array($query))
                {
                ?>
        <ul class="footer-links list-unstyled">
          <li><a href="zenblog/category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?>
          </a></li>
        </ul>
        <?php } ?> 
      </div>

      <div class="col-lg-4">
        <h3 class="footer-heading">Recent Posts</h3>

        <ul class="footer-links footer-blog-entry list-unstyled">
          <li>
          <?php
                        $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle, tblposts.PostImage as postimage, tblcategory.CategoryName as category from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
                        while ($row=mysqli_fetch_array($query)) {

                        ?>
            <a href="single-post.html" class="d-flex align-items-center">
              <img src="admin/postimages/<?php echo htmlentities($row['postimage']);?>" alt="" class="img-fluid me-3">
              <div>
                <div class="post-meta d-block"><span class="date"><?php echo htmlentities($row['category']);?></span> <span class="mx-1">&bullet;</span></div>
                <span><?php echo htmlentities($row['posttitle']);?></span>
              </div>
            </a>
            <?php } ?>
          </li>

          

        </ul>

      </div>
    </div>
  </div>
</div>

<div class="footer-legal">
  <div class="container">

    <div class="row justify-content-between">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <div class="copyright">
          © Copyright <strong><span>MyBlog</span></strong>. All Rights Reserved
        </div>

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
          Designed by <a>Annisa Adenanty Palupi</a>
        </div>

      </div>

      <div class="col-md-6">
        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>

    </div>

  </div>
</div>

</footer>