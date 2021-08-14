<?php session_start();
require_once('./vendor/autoload.php');
require_once('header.php');

use App\Controllers\Post;
use App\Controllers\Session;

?>
<?php
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
   $data = Post::detailPost($id);
   while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
?>
      <section class="section single-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                  <div class="page-wrapper">
                     <div class="blog-title-area text-center">
                        <ol class="breadcrumb hidden-xs-down">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item"><a href="#">Blog</a></li>
                           <li class="breadcrumb-item active"><?= $row['title'] ?></li>
                        </ol>

                        <span class="color-orange"><a href="tech-category-01.html" title="">Technology</a></span>

                        <h3><?= $row['title'] ?></h3>

                        <div class="blog-meta big-meta">
                           <small><a href="tech-single.html" title=""><?= $row['date'] ?></a></small>
                           <small><a href="tech-author.html" title="">by dinhop</a></small>
                           <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div>
                        <!-- end meta -->

                        <div class="post-sharing">
                           <ul class="list-inline">
                              <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                              <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                              <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                           </ul>
                        </div>
                        <!-- end post-sharing -->
                     </div>
                     <!-- end title -->

                     <div class="single-post-media">
                        <img src="uploads/<?= $row['image'] ?>" alt="" class="img-fluid">
                     </div>
                     <!-- end media -->

                     <div class="blog-content">
                        <div class="pp">
                           <?= html_entity_decode($row['content']); ?>
                        </div>
                        <!-- end pp -->

                        <!-- <img src="uploads/<?= $row['image'] ?>" alt="" class="img-fluid img-fullwidth"> -->

                        <!-- <div class="pp">
                           <p><img src="uploads/<?= $row['image'] ?>" class="float-right" width="380" alt="">Suspendisse ultrices placerat dolor sed efficitur. Morbi in laoreet diam. Pellentesque habitant morbi tristique senectus et netus et malesuada
                              fames ac turpis egestas. Mauris ut massa id lectus laoreet porta non in metus. Donec nibh justo, tincidunt non justo ut, tincidunt malesuada turpis. Cras pellentesque sollicitudin ex eget pharetra.rta non in metus.
                              Donec nibh justo, tincidunt non justo ut, tincidunt malesuada turpis. Cras pellentesque sollicitudin ex eget pharetra.</p>
                        </div> -->
                        <!-- end pp -->
                     </div>
                     <!-- end content -->
                     <!-- 
                  <div class="blog-title-area">
                     <div class="tag-cloud-single">
                        <span>Tags</span>
                        <small><a href="#" title="">lifestyle</a></small>
                        <small><a href="#" title="">colorful</a></small>
                        <small><a href="#" title="">trending</a></small>
                        <small><a href="#" title="">another tag</a></small>
                     </div> -->
                     <!-- end meta -->

                     <!-- <div class="post-sharing">
                     <ul class="list-inline">
                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                     </ul>
                  </div> -->
                     <!-- end post-sharing -->
                  </div>
                  <!-- end title -->

                  <hr class="invis1">

                  <div class="custombox clearfix">
                     <h4 class="small-title">You may also like</h4>
                     <div class="row">
                        <?php
                        $result = Post::getTopOT();
                        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                           <div class="col-lg-6">
                              <div class="blog-box">
                                 <div class="post-media">
                                    <a href="singlepage.php?id=<?= $row['id'] ?>" title="">
                                       <img src="uploads/<?= $row['image'] ?>" alt="" class="img-fluid">
                                       <div class="hovereffect">
                                          <span class=""></span>
                                       </div>
                                       <!-- end hover -->
                                    </a>
                                 </div>
                                 <!-- end media -->
                                 <div class="blog-meta">
                                    <h4><a href="singlepage.php?id=<?= $row['id'] ?>" title=""><?= $row['title'] ?></a></h4>
                                    <small><a href="blog-category-01.html" title="">Trends</a></small>
                                    <small><a href="blog-category-01.html" title=""><?= $row['date'] ?></a></small>
                                 </div>
                                 <!-- end meta -->
                              </div>
                              <!-- end blog-box -->
                           </div>
                        <?php } ?>
                        <!-- end col -->
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end custom-box -->

                  <hr class="invis1">

                  <div class="custombox clearfix">
                     <h4 class="small-title"><?= Post::postComment($id)->rowCount() ?>&ensp;<?= (Post::postComment($id)->rowCount() > 1 ? 'Comments' : 'Comment') ?></h4>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="comments-list">
                              <?php
                              $data = Post::postComment($id);
                              // echo "<pre>";
                              // print_r($data);
                              // $result = [];
                              while ($result1 = $data->fetchAll(PDO::FETCH_ASSOC)) {
                                 // echo "<pre>";
                                 $keys = array_keys($result1);
                                 $last = end($keys);
                                 foreach ($result1 as $key => $result) {
                              ?>
                                    <div class="media <?= ($last == $key) ? 'last-child' : '' ?>">
                                       <a class="media-left" href="#">
                                          <img src="assets/upload/author.jpg" alt="" class="rounded-circle">
                                       </a>
                                       <div class="media-body">
                                          <h4 class="media-heading user_name"><?= $result['name'] ?><small><?= $result['date'] ?></small></h4>
                                          <p><?= $result['content'] ?></p>
                                          <!-- <a href="#" class="btn btn-primary btn-sm">Reply</a> -->
                                       </div>
                                    </div>
                              <?php }
                              } ?>
                           </div>
                        </div>
                        <!-- end col -->
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- end custom-box -->

                  <hr class="invis1">

                  <div class="custombox clearfix">
                     <h4 class="small-title">Leave a Reply</h4>
                     <div class="row">
                        <div class="col-lg-12">
                           <form action="insert.php?id=<?= $id ?>" method="POST" class="form-wrapper">
                              <input type="text" name="name" class="form-control" placeholder="Your name">
                              <input type="email" name="email" class="form-control" placeholder="Email address">
                              <textarea name="content" class="form-control" placeholder="Your comment"></textarea>
                              <button type="submit" name="comment_submit" class="btn btn-primary">Submit Comment</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
               require_once('./sidebar.php');
               ?>
               <!-- end page-wrapper -->
            </div>
            <!-- end col -->

            <!-- end col -->
         </div>
         <!-- end row -->
         </div>
         <!-- end container -->
      </section>
   <?php }
} else { ?>

   <div class="row">
      <div class="col-md-12">
         <h2 class="mt-5 pt-5 mb-5 text-center">Not found</h2>
      </div>
   </div>
<?php }
echo isset($_SESSION['succComment']) ? $_SESSION['succComment'] : '';
echo isset($_SESSION['errComment']) ? $_SESSION['errComment'] : '';
Session::unsetSession('succComment');
Session::unsetSession('errComment');
require_once('footer.php');
?>