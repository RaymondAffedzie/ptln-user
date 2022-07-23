<?php 
  include('partials/connection.php');
  include('partials/header.php'); 
?> 

  <body>  
    <header class="fixed-top">
    <?php include('partials/navbar.php'); ?>
      <div class="container-fluid bg-dark">
        <div class="row">
          <ul class="list-inline d-flex justify-content-center gap-5 mt-4">
            <li class="list-inline-item"><a class="text-decoration-none text-white" href="#orgstory">Organizations Story</a></li>
            <li class="list-inline-item"><a class="text-decoration-none text-white" href="#inspstories">Inspirational Stories</a></li>
            <li class="list-inline-item btn btn-sm btn-transparent border text-white"><a class="text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#story">Tell us your story</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main class="container" style="margin-top: 180px;">
      <!-- <div class="p-4 p-md-5 mb-4 rounded bg-dark"
              style="background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);">
        <div class="col-md-12 px-0">
          <h1 class="display-3 fw-bold fst-italic text-white">Inspirational Stories</h1>
          <p class="lead my-3 text-white"><strong>Everyone has a story:</strong> Let yours inspire the world
            <a class="btn btn-sm btn-transparent border text-white col-md-2" data-bs-toggle="modal" data-bs-target="#story">Tell us your story</a></p>
          
        </div>
      </div> -->
      <!-- Story modal start -->
      <div class="modal fade" id="story" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="story">Tell us your story: let inspire the world together</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="col">
                    <div class="card shadow-sm" style="padding: 20px;">
                      <form class="container" action="storiescode.php" method="post">
                        <div class="row">
                          <div class="form-group mb-3">
                            <input type="text" name="tittle" id="tittle" class="form-control" placeholder="Title of Story">
                          </div>
                          <div class="form-group mb-3 form-outline">
                            <textarea class="form-control" name="content" rows="7" id="content" placeholder="Message"></textarea>
                          </div>
                        </div>
                        <button type="submit" name="insert" class="btn btn-primary btn-sm col-md-4 mt-3 position-relative">Submit Story</button>
                    </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-sm col-md-4" style="margin-bottom: 10px;">Sign In</button>
                  <button type="button" class="btn btn-danger btn-sm col-md-2" style="margin-bottom: 10px;" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
      </div>
      <!-- modal end -->
      
      <div class="row mt-5" id="orgstory" style="scroll-margin-top:180px;">
        <h1 class="text-warning pb-3 display-6"><strong>Organization's Story</strong></h1><hr class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="shadow-lg">
              <img src="assets/img/Picture1.png" width="100%" height="auto" class="bordered mb-3" alt="Founder's Name">
              <p class="py-3 text-center card-text">Mr. Isaac Lawer Martey<br>Founder</p>
            </div>
          </div>
          <div class="col-md-8">
            <p class="px-5">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus nulla
              voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam, nulla
              voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus! Quisquam
              alias. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus nulla
              voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam, nulla
              voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus! Quisquam
              alias. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus nulla
              voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam, nulla
              voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus! Quisquam
              alias.
            </p>
          </div>
        </div>
      </div>

      <?php
        // fetch news from database
        $story_query = "SELECT * FROM story ORDER BY date DESC LIMIT 12";
        $story = mysqli_query($connection, $story_query);
      ?>
      <div class="row container shadow-lg p-3" id="inspstories" style="margin-top: 100px; scroll-margin-top: 180px;">
        <h1 class="text-warning pb-3 display-6"><strong>Inspirational Stories from people around the world</strong></h1><hr class="mb-5">
        <div class="row">
        <?php while($stories = mysqli_fetch_assoc($story)): ?>
          <div class="col-md-6">
            <!-- Story 1 -->
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" src="assets/img/card-img-pt.jpg" width="200" height="250" role="img">
              </div>
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $stories['state']?>, <?php echo strtoupper($stories['country'])?></strong>
                <h3 class="mb-0 display-6 fst-italic"><?php echo strtoupper( $stories['tittle'] )?></h3>
                <div class="mb-1 text-muted"><?php echo $stories['date']?></div>
                <p class="card-text mb-auto"><?php echo $stories['teller_name']?></p>
                <a href="#" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#<?php echo $stories['story_id']?>">Read Story</a>
                <!-- modal start -->
                <div class="modal fade" id="<?php echo $stories['story_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="story1"><strong class="d-inline-block mb-2 text-primary"><?php echo $stories['state']?>, <?php echo strtoupper($stories['country'])?></strong></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <div class="card shadow-sm" style="padding:20px;">
                            <h3 class="mb-0 display-6 fst-italic"><?php echo strtoupper( $stories['tittle'] )?></h3>
                            <h5 class="mb-1 text-muted"><?php echo $stories['teller_name']?> : <?php echo $stories['date']?></h5>
                            <div class="col-md-4 border-bottom"></div>
                            <p class="card-text mb-auto mt-3">
                              <?php echo $stories['content']?>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close Story</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal code end -->
              </div>
            </div>
          </div>
          <?php endwhile ?>
<?php include('partials/footer.php') ?>

