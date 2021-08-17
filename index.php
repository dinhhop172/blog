<?php


use App\Controllers\Database;
use App\Controllers\Post;

require_once('./vendor/autoload.php');
require_once('./header.php');

$con = Database::getConnect();
?>
<section class="section first-section">
   <div class="container-fluid">
      <div class="masonry-blog clearfix">
         <!-- <div class="first-slot">
            <div class="masonry-box post-media">
               <img src="assets/upload/tech_01.jpg" alt="" class="img-fluid">
               <div class="shadoweffect">
                  <div class="shadow-desc">
                     <div class="blog-meta">
                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                        <h4><a href="singlepage.php" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                        <small><a href="singlepage.php" title="">24 July, 2017</a></small>
                        <small><a href="#" title="">by Amanda</a></small>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end first-side -->

         <!-- <div class="second-slot">
            <div class="masonry-box post-media">
               <img src="assets/upload/tech_02.jpg" alt="" class="img-fluid">
               <div class="shadoweffect">
                  <div class="shadow-desc">
                     <div class="blog-meta">
                        <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                        <h4><a href="singlepage.php" title="">Do not make mistakes when choosing web hosting</a></h4>
                        <small><a href="singlepage.php" title="">03 July, 2017</a></small>
                        <small><a href="#" title="">by Jessica</a></small>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end second-side -->

         <!-- <div class="last-slot">
            <div class="masonry-box post-media">
               <img src="assets/upload/tech_03.jpg" alt="" class="img-fluid">
               <div class="shadoweffect">
                  <div class="shadow-desc">
                     <div class="blog-meta">
                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                        <h4><a href="singlepage.php" title="">The most reliable Galaxy Note 8 assets/images leaked</a></h4>
                        <small><a href="singlepage.php" title="">01 July, 2017</a></small>
                        <small><a href="#" title="">by Jessica</a></small>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end second-side -->
      </div>
      <!-- end masonry -->
   </div>
</section>

<section class="section">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrapper">
               <div class="blog-top clearfix">
                  <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
               </div>
               <!-- end blog-top -->

               <?php
               $data = Post::showAllPost();
               if ($data->rowCount() >= 1) {
                  // echo "<pre>";
                  // print_r($data->rowCount());
                  while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
               ?>
                     <div class="blog-list clearfix">
                        <div class="blog-box row">
                           <div class="col-md-4">
                              <div class="post-media">
                                 <a href="singlepage.php?id=<?= $row['id'] ?>" title="">
                                    <img src="uploads/<?= $row['image'] ?>" alt="" class="img-fluid">
                                    <div class="hovereffect"></div>
                                 </a>
                              </div>
                              <!-- end media -->
                           </div>
                           <!-- end col -->
                           <div class="blog-meta big-meta col-md-8">
                              <h4><a href="singlepage.php?id=<?= $row['id'] ?>" title=""><?= $row['title'] ?></a></h4>
                              <p><?= html_entity_decode(mb_strimwidth($row['content'], 0, 290, "...")); ?></p>
                              <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title="">Gadgets</a></small>
                              <small><a href="#" title=""><?= $row['date'] ?></a></small>
                              <small><a href="#" title="">by DinhHop</a></small>
                              <small><a href="#" title=""><i class="fa fa-eye"></i> 1114</a></small>
                           </div>
                           <!-- end meta -->
                        </div>
                        <!-- end blog-box -->

                        <hr class="invis">
                     </div>
                  <?php } ?>
                  <hr class="invis">
                  <div class="row">
                     <div class="col-md-12">
                        <nav aria-label="Page navigation">
                           <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                 <a class="page-link" href="#">Next</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                     <!-- end col -->
                  </div>
               <?php
               } else {
               ?>
                  <div class="blog-list clearfix">
                     <div class="blog-box row">
                        <div class="col-md-12">
                           <div class="post-media">
                              <h2 class="text-center mt-5 mb-5">Not Avilable Post</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
               <!-- end blog-list -->
            </div>
            <!-- end page-wrapper -->

            <!-- end row -->
         </div>
         <!-- end col -->

         <?php
         require_once('./sidebar.php');
         ?>
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<?php
require_once './footer.php';
?>