<?php
include('partials/connection.php');
include('partials/header.php');
?>

  <body>  
    <header class="fixed-top">
    <?php include('partials/navbar.php'); ?>
    </header>
    <main class="container mt-5">
      <div class="row" style="margin-top: 65px;">
        <div class="col-md-8">
        
          <div class="card shadow-sm mb-4 mt-2" id="events">
            <img src="assets/img/carousel-img-1.jpg" width="100%" height="350px" alt="...">
            <div class="card-body">
              <h1>News title or headline displayed here. News title or headline displayed here.</h1>
              <p class="card-text"><strong>December 23, 2020 by <a href="#">Jacob</strong></a></p>
              <div class="row d-flex justify-content-between align-items-right">
                <p class="col-md-6"></p>
                <div class="btn-group col-md-4">
                  <button type="button" class="btn btn-sm btn-primary col-md-12" data-bs-toggle="modal" data-bs-target="#news">Read News</button>
                </div>
              </div>
            </div>
            <!-- modal start -->
            <div class="modal fade" id="news" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="news"><strong class="d-inline-block mb-2 text-primary">December 23, 2020 by <a href="#">Jacob Harry Smith</a></strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="col">
                      <div class="card shadow-sm" style="padding:20px;">
                        <h3 class="mb-0 display-6 fst-italic">News title or headline displayed here</h3>
                        <div class="col-md-12 border-bottom mt-2"></div>
                        <p class="card-text mb-auto mt-3">
                          Story Content displayed here. <br>
                          with some details <br>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus 
                          nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam, 
                          nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus! 
                          Quisquam alias.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close news</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal code end -->
          </div>
        </div>

          <div class="col-md-4">
          
            <div class="col-md-12">
              <div class="card m-2 bg-dark text-white text-end">
                <img class="card-img bg-img blur" src="assets/img/carousel-img-1.jpg" alt="..." style="width: 100%; height:175px; background-image: color(0,0,0,1); object-fit: cover;">  
                <div class="card-img-overlay">
                  <h3 class="card-title">News title or headline displayed here</h3>
                  <p class="card-text">December 23, 2020 by <a class="text-white" href="#">Jacob Harry Smith</a></p>
                  <p><a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#news1">Read News</a></p>
                </div>
              </div>
              <!-- modal start -->
              <div class="modal fade" id="news1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="news1"><strong class="d-inline-block mb-2 text-primary">December 23, 2020 by <a href="#">Jacob Harry Smith</a></strong></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col">
                        <div class="card shadow-sm" style="padding:20px;">
                          <h3 class="mb-0 display-6 fst-italic">News 1 title or headline displayed here</h3>
                          <div class="col-md-12 border-bottom mt-2"></div>
                          <p class="card-text mb-auto mt-3">
                            Story Content displayed here. <br>
                            with some details <br>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus 
                            nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam, 
                            nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus! 
                            Quisquam alias.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close news</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal code end -->
            </div>

            <div class="col-md-12">
              <div class="card m-2 bg-dark text-white text-end">
                <img class="card-img bg-img blur" src="assets/img/carousel-img-1.jpg" alt="..." style="width: 100%; height:175px; background-image: color(0,0,0,1); object-fit: cover;">  
                <div class="card-img-overlay">
                  <h3 class="card-title">News title or headline displayed here</h3>
                  <p class="card-text">December 23, 2020 by <a class="text-white" href="#">Jacob Harry Smith</a></p>
                  <p><a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#news2">Read News</a></p>
                </div>
              </div>
            </div>
            <!-- modal start -->
            <div class="modal fade" id="news2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="news2"><strong class="d-inline-block mb-2 text-primary">December 23, 2020 by <a href="#">Jacob Harry Smith</a></strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="col">
                      <div class="card shadow-sm" style="padding:20px;">
                        <h3 class="mb-0 display-6 fst-italic">News 2 title or headline displayed here</h3>
                        <div class="col-md-12 border-bottom mt-2"></div>
                        <p class="card-text mb-auto mt-3">
                          Story Content displayed here. <br>
                          with some details <br>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus 
                          nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam, 
                          nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus! 
                          Quisquam alias.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close news</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal code end -->

            <div class="col-md-12">
              <div class="card m-2 bg-dark text-white text-end">
                <img class="card-img bg-img blur" src="assets/img/carousel-img-1.jpg" alt="..." style="width: 100%; height:175px; background-image: color(0,0,0,1); object-fit: cover;">  
                <div class="card-img-overlay">
                  <h3 class="card-title">News title or headline displayed here</h3>
                  <p class="card-text">December 23, 2020 by <a class="text-white" href="#">Jacob Harry Smith</a></p>
                  <p><a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#news3">Read News</a></p>
                </div>
              </div>
            </div>
            <!-- modal start -->
            <div class="modal fade" id="news3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="news3"><strong class="d-inline-block mb-2 text-primary">December 23, 2020 by <a href="#">Jacob Harry Smith</a></strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="col">
                      <div class="card shadow-sm" style="padding:20px;">
                        <h3 class="mb-0 display-6 fst-italic">News 3 title or headline displayed here</h3>
                        <div class="col-md-12 border-bottom mt-2"></div>
                        <p class="card-text mb-auto mt-3">
                          Story Content displayed here. <br>
                          with some details <br>
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus 
                          nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam, 
                          nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus! 
                          Quisquam alias.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close news</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal code end -->
        </div>
      </div>
      
      <div class="container shadow-lg">
      <?php
        // fetch news from database
        $news_query = "SELECT * FROM news ORDER BY date DESC LIMIT 12";
        $news = mysqli_query($connection, $news_query);
        while($new = mysqli_fetch_assoc($news)){ 
      ?>
          <div id="news" class="container p-3">
            <article class="blog-post mt-5">
              <h2 class="blog-post-title mb-1"><?php echo strtoupper( $new['tittle'] )?></h2>
              <p class="blog-post-meta"><?php echo $new['date']?> | <a href="<?php echo $new['source']?>"><?php echo $new['source'] ?></a> | <?php echo $new['publisher_name'] ?></p>
              <p style="align-items: justify;">
              <?php echo ucfirst( $new['content'] )?> 
              </p>
            </article>
          </div>
        <?php 
          }
        ?>
      </div>
      
      
    <!-- FOOTER -->
    <div style="margin-top: 50px;">
    <?php include('partials/footer.php') ?>
    </div>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</php>
