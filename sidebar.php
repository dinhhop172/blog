<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
   <div class="sidebar">
      <div class="widget">
         <!-- <div class="banner-spot clearfix">
            <div class="banner-img">
               <img src="assets/upload/banner_07.jpg" alt="" class="img-fluid">
            </div>
         </div> -->
         <!-- end banner -->
      </div>
      <!-- end widget -->
      <!-- end widget -->

      <div class="widget">
         <h2 class="widget-title">Popular Posts</h2>
         <div class="blog-list-widget">
            <div class="list-group">
               <?php

               use App\Controllers\Post;

               $data = Post::popularPost();
               while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
                  // echo "<pre>";
                  // print_r($row);
               ?>
                  <a href="singlepage.php?id=<?= $row['id'] ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                     <div class="w-100 justify-content-between">
                        <img src="uploads/<?= $row['image'] ?>" alt="" class="img-fluid float-left">
                        <h5 class="mb-1"><?= $row['title'] ?></h5>
                        <small><?= $row['date'] ?></small>
                     </div>
                  </a>
               <?php } ?>
            </div>
         </div>
         <!-- end blog-list -->
      </div>
      <!-- end widget -->
      <!-- <div class="widget">
         <h2 class="widget-title">Recent Reviews</h2>
         <div class="blog-list-widget">
            <div class="list-group">
               <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 justify-content-between">
                     <img src="assets/upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                     <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                     <span class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                     </span>
                  </div>
               </a>

               <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 justify-content-between">
                     <img src="assets/upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                     <h5 class="mb-1">10 practical ways to choose organic..</h5>
                     <span class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                     </span>
                  </div>
               </a>

               <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                  <div class="w-100 last-item justify-content-between">
                     <img src="assets/upload/tech_blog_07.jpg" alt="" class="img-fluid float-left">
                     <h5 class="mb-1">We are making homemade ravioli..</h5>
                     <span class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                     </span>
                  </div>
               </a>
            </div>
         </div>
      </div> -->

      <!-- end widget -->

      <div class="widget">
         <h2 class="widget-title">Follow Us</h2>

         <div class="row text-center">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
               <a href="#" class="social-button facebook-button">
                  <i class="fa fa-facebook"></i>
                  <p>27k</p>
               </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
               <a href="#" class="social-button twitter-button">
                  <i class="fa fa-twitter"></i>
                  <p>98k</p>
               </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
               <a href="#" class="social-button google-button">
                  <i class="fa fa-google-plus"></i>
                  <p>17k</p>
               </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
               <a href="#" class="social-button youtube-button">
                  <i class="fa fa-youtube"></i>
                  <p>22k</p>
               </a>
            </div>
         </div>
      </div>
      <!-- end widget -->

   </div>
   <!-- end sidebar -->
</div>
<!-- end col -->