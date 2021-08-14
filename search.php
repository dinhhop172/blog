<?php
require_once('./vendor/autoload.php');
require_once('./header.php');

use App\Controllers\Post;

?>
<section class="section mt-5">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="page-wrapper">
               <div class="blog-top clearfix">
                  <h4 class="pull-left">Search results <a href="#"><i class="fa fa-rss"></i></a></h4>
               </div>
               <!-- end blog-top -->
               <?php
               if (isset($_GET['search-btn'])) {
                  $search = isset($_GET['search']) ? Post::check_character($_GET['search']) : '';
                  $dataSearch = Post::searchPost($search);
                  while ($row = $dataSearch->fetch(PDO::FETCH_ASSOC)) {
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
                  <?php }
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