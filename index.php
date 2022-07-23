<?php
include('partials/connection.php');
include('partials/header.php');
?>

<body>
  <header class="fixed-top">
    <?php include('partials/navbar.php'); ?>
  </header>
  <main>
    <!-- Carousel images -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" style="margin-top:50px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide1">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide2">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide3">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide4">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide5">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide6">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide7">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide8">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide9">
        </div>
        <div class="carousel-item">
          <img class="img-responsive" src="assets/img/carousel-img-1.jpg" width="100%" height="600px" alt="slide10">
        </div>
      </div>
      <!-- Carousel caption -->
      <div class="container">
        <div class="carousel-caption">
          <a class="btn btn-lg btn-transparent border text-white" data-bs-toggle="modal" data-bs-target="#subscribe">
            <h3 class="fst-italic">Subscribe to our daily newsletters and resources</h3>
          </a>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel modal start -->
    <div class="modal fade" id="subscribe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="subscribe">Sign Up to Subscribe</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col">
              <div class="card shadow-sm" style="padding: 20px;">
                <form class="container" action="" method="post">
                  <!-- <h3 class="text-white">Be part of our journey:</h3>
                        <h5 class="mb-5 text-white">Let bring Children to our Lord Jesus Christ</h5> -->
                  <div class="row">
                    <div class="form-group mb-3 col-md-6">
                      <label for="firstname">First Name</label>
                      <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Isaac">
                    </div>
                    <div class="form-group mb-3 col-md-6">
                      <label for="surname">Surname</label>
                      <input type="text" name="surnname" id="surname" class="form-control" placeholder="Lawer Martey">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-3 col-md-6">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com">
                    </div>
                    <div class="form-group mb-3 col-md-6">
                      <label for="phone_number">Phone Number</label>
                      <input type="phone_number" name="phone_number" id="phone_number" class="form-control" placeholder="+1234567890">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group mb-3 col-md-6">
                      <label for="category">Select means of contact</label>
                      <select name="category" id="category" class="form-control" aria-placeholder="Select means of contact:By Email">
                        <option value=""></option>
                        <option value="email">Email</option>
                        <option value="phone_number">Phone Number</option>
                        <option value="email phone_number">Both</option>
                      </select>
                    </div>
                    <div class="form-group mb-3 col-md-6">
                      <label for="category">Select category for joining us</label>
                      <select name="category" id="category" class="form-control" aria-placeholder="How do you want to join us- Example: Prayer Partner">
                        <option value=""></option>
                        <option value="donor">Donor</option>
                        <option value="prayer partner">Prayer Partner</option>
                        <option value="volunteer">Volunteer</option>
                        <option value="subscribed">Subscribe to Our Resources</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" name="bePartOfUs" class="btn btn-primary btn-sm col-md-4 mt-3 position-relative">Sign Up</button>
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

    <!-- Vision and mission -->
    <div class="album py-5 bg-light shadow-lg">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-12" id="mission">
              <h1 class="text-warning"><strong> MISSION</strong></h1>
              <hr class="mb-3">
              <p>Reach every child with the Gospel to impact their generation.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-12" id="vision">
              <h1 class="text-warning"><strong>VISION</strong></h1>
              <hr class="mb-3">
              <p>Every saved child impacting their generation</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Peoples stories -->
    <div class="jumbotron py-5 bg-light shadow-lg">
      <div class="container">
        <div class="row">
          <div class="row flex-md-row mb-4 ">
            <h1 class="text-center pb-2 border-bottom display-6 fst-italic">Inspirational Stories from People around the world</h1>
          </div>
          <div class="col-md-6">
            <div class="col">
              <!-- Story 1 -->
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" src="assets/img/card-img-pt.jpg" width="200" height="250" role="img">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">Maryland, United State of America</strong>
                  <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                  <div class="mb-1 text-muted">Nov 12, 2023</div>
                  <p class="card-text mb-auto">Mr. Isaac Lawer Martey</p>
                  <a href="#" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#story1">Read Story</a>
                  <!-- modal start -->
                  <div class="modal fade" id="story1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="story1"><strong class="d-inline-block mb-2 text-primary">Maryland, United State of America</strong></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col">
                            <div class="card shadow-sm" style="padding:20px;">
                              <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                              <h5 class="mb-1 text-muted">Mr. Isaac Lawer Martey: Nov 12, 2023</h5>
                              <div class="col-md-4 border-bottom"></div>
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
                          <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close Story</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal end -->
                </div>
              </div>

              <!-- Story 2 -->
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" src="assets/img/card-img-pt.jpg" width="200" height="250" role="img">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">Takoradi, Ghana</strong>
                  <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                  <div class="mb-1 text-muted">Nov 12, 2023</div>
                  <p class="card-text mb-auto">Mr. Isaac Lawer Martey</p>
                  <a href="#" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#story2">Read Story</a>
                  <!-- modal start -->
                  <div class="modal fade" id="story2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="story2"><strong class="d-inline-block mb-2 text-primary">Takoradi, Ghana</strong></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col">
                            <div class="card shadow-sm" style="padding:20px;">
                              <h3 class="mb-0 display-6 fst-italic">Title of story 2 here</h3>
                              <h5 class="mb-1 text-muted">Mr. Isaac Lawer Martey: Nov 12, 2023</h5>
                              <div class="col-md-4 border-bottom"></div>
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
                          <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close Story</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal end -->
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="col">
              <!-- Story 3 -->
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" src="assets/img/card-img-pt.jpg" width="200" height="250" role="img">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">Maryland, United State of America</strong>
                  <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                  <div class="mb-1 text-muted">Nov 12, 2023</div>
                  <p class="card-text mb-auto">Mr. Isaac Lawer Martey</p>
                  <a href="#" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#story3">Read Story</a>
                  <!-- modal start -->
                  <div class="modal fade" id="story3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="story3"><strong class="d-inline-block mb-2 text-primary">Maryland, United State of America</strong></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col">
                            <div class="card shadow-sm" style="padding:20px;">
                              <h3 class="mb-0 display-6 fst-italic">Title of story 3 here</h3>
                              <h5 class="mb-1 text-muted">Mr. Isaac Lawer Martey: Nov 12, 2023</h5>
                              <div class="col-md-4 border-bottom"></div>
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
                          <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close Story</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal end -->
                </div>
              </div>

              <!-- Story 4 -->
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" src="assets/img/card-img-pt.jpg" width="200" height="250" role="img">
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">Takoradi, Ghana</strong>
                  <h3 class="mb-0 display-6 fst-italic">Title of story here</h3>
                  <div class="mb-1 text-muted">Nov 12, 2023</div>
                  <p class="card-text mb-auto">Mr. Isaac Lawer Martey</p>
                  <a href="#" class="btn btn-primary btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#story4">Read Story</a>
                  <!-- modal start -->
                  <div class="modal fade" id="story4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="story4"><strong class="d-inline-block mb-2 text-primary">Takoradi, Ghana</strong></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col">
                            <div class="card shadow-sm" style="padding:20px;">
                              <h3 class="mb-0 display-6 fst-italic">Title of story 4 here</h3>
                              <h5 class="mb-1 text-muted">Mr. Isaac Lawer Martey: Nov 12, 2023</h5>
                              <div class="col-md-4 border-bottom"></div>
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
                          <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close Story</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal end -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- set of videos -->
    <div class="album py-5 bg-light margin-top:-50rem shadow-lg">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">

          <div class="col">
            <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Why this Organization</h3>
            <div class="card shadow-sm align-items-center">
              <!-- modal thumbnail link -->
              <a type="button" class="card-img-top" data-bs-toggle="modal" data-bs-target="#whythisorg">
                <video class="embed-responsive-item carousel" src="assets/vidz/4.mp4" width="100%" height="190" allowfullscreen></video>
                <img class="carousel-caption" src="assets/img/play.png" style="width: 80px; height: 120px; margin-bottom: 110px; margin-left:90px;">
              </a>
              <!-- modal code start -->
              <div class="modal fade" id="whythisorg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="whythisorg">Why this Organization</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col">
                        <div class="card shadow-sm">
                          <video class="embed-responsive-item" src="assets/vidz/4.mp4" controls="1" allowfullscreen></video>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-sm col-md-3" data-bs-dismiss="modal">Close Video</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal end -->
              <!-- read button with modal -->
              <div class="card-body">
                <p class="card-text">To read the story behind the formation of this organization, click the the link below.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-outline-secondary col-md-4" data-bs-toggle="modal" data-bs-target="#whythisorgRM">Read</button>
                  <!-- modal start -->
                  <div class="modal fade" id="whythisorgRM" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="whythisorgRM">Why the establishement of this Organization</h3>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col">
                            <div class="card shadow-sm" style="padding:20px;">
                              <h5 class="mb-1 text-muted">Mr. Isaac Lawer Martey: Founder</h5>
                              <div class="col-md-6 border-bottom"></div>
                              <p class="card-text mb-auto mt-3">
                                Story Content displayed here. <br>
                                with some details <br>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                                nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                                nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                                Quisquam alias.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                                nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                                nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                                Quisquam alias.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal end -->
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Building a Network of Beleivers</h3>
            <div class="card shadow-sm">
              <!-- modal thumbnail link -->
              <a type="button" class="card-img-top" data-bs-toggle="modal" data-bs-target="#buildingnetwork">
                <video class="embed-responsive-item" src="assets/vidz/4.mp4" width="100%" height="190" allowfullscreen></video>
                <img class="carousel-caption" src="assets/img/play.png" style="width: 80px; height: 120px; margin-bottom: 110px; margin-left:90px;">
              </a>
              <!-- modal code start -->
              <div class="modal fade" id="buildingnetwork" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="buildingnetwork">Building a Network of beleivers</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col">
                        <div class="card shadow-sm">
                          <video class="embed-responsive-item" src="assets/vidz/4.mp4" controls="1" allowfullscreen></video>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-sm col-md-3" data-bs-dismiss="modal">Close Video</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal code end -->
              <!-- read button with modal -->
              <div class="card-body">
                <p class="card-text">Click the link below to read on why we are building a network of beleivers.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-outline-secondary col-md-4" data-bs-toggle="modal" data-bs-target="#buildingnetworkRM">Read</button>
                  <!-- modal start -->
                  <div class="modal fade" id="buildingnetworkRM" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="buildingnetworkRM">Building a Network of beleivers</h3>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col">
                            <div class="card shadow-sm" style="padding:20px;">
                              <h5 class="mb-1 text-muted">Mr. Isaac Lawer Martey: Founder</h5>
                              <div class="col-md-6 border-bottom"></div>
                              <p class="card-text mb-auto mt-3">
                                Story Content displayed here. <br>
                                with some details <br>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                                nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                                nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                                Quisquam alias.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                                nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                                nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                                Quisquam alias.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal end -->
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <h3 class="text-center pb-2 border-bottom display-6 fst-italic">Why you should join our Team</h3>
            <div class="card shadow-sm">
              <!-- modal thumbnail link -->
              <a type="button" class="card-img-top" data-bs-toggle="modal" data-bs-target="#whyjoinus">
                <video class="embed-responsive-item" src="assets/vidz/4.mp4" width="100%" height="190" allowfullscreen></video>
                <img class="carousel-caption" src="assets/img/play.png" style="width: 80px; height: 120px; margin-bottom: 110px; margin-left:90px;">
              </a>
              <!-- modal code start -->
              <div class="modal fade" id="whyjoinus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="whyjoinus">Why you should join our Team</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="col">
                        <div class="card shadow-sm">
                          <video class="embed-responsive-item" src="assets/vidz/4.mp4" controls="1" allowfullscreen></video>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-sm col-md-3" data-bs-dismiss="modal">Close Video</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal code end -->
              <!-- read button with modal -->
              <div class="card-body">
                <p class="card-text">Click the link below to read on why you should join our team for this journey.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <button type="button" class="btn btn-sm btn-outline-secondary col-md-4" data-bs-toggle="modal" data-bs-target="#whyjoinusRM">Read</button>
                  <!-- modal start -->
                  <div class="modal fade" id="whyjoinusRM" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="whyjoinusRM">Why you should join our Team</h3>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="col">
                            <div class="card shadow-sm" style="padding:20px;">
                              <h5 class="mb-1 text-muted">Mr. Isaac Lawer Martey: Founder</h5>
                              <div class="col-md-6 border-bottom"></div>
                              <p class="card-text mb-auto mt-3">
                                Story Content displayed here. <br>
                                with some details <br>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                                nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                                nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                                Quisquam alias.
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                                nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                                nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                                Quisquam alias.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal end -->
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- news and Upcoming Events -->
    <div class="container-fluid shadow-lg">
      <div class="p-4 p-md-5 mb-4 rounded shadow-md row mb-2">

        <!-- News -->
        <div class="col-md-6">
          <div class="row flex-md-row mb-4 mt-3">
            <h1 class="text-center pb-2 border-bottom display-6 fst-italic">Current News</h1>
          </div>
          <div class="card shadow-sm mb-4" id="events">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225px" src="assets/img/carousel-img-3.jpg" role="img" aria-label="Placeholder: Thumbnail" style="object-fit: cover; width: 100%; height: 30vh;">
            <div class="card-body">
              <h1>News title or headline displayed here</h1>
              <p class="card-text">December 23, 2020 by <a href="#">Jacob</a></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#news">Read more</button>
                </div>
                
                <!-- modal start -->
                <div class="modal fade" id="news" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="news">News title here</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="col">
                          <div class="card shadow-sm" style="padding:20px;">
                            <h5 class="mb-1 text-muted">December 23, 2020 by <a href="#">Jacob</a></h5>
                            <div class="col-md-6 border-bottom"></div>
                            <p class="card-text mb-auto mt-3">
                              Story Content displayed here. <br>
                              with some details <br>
                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                              nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                              nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                              Quisquam alias.
                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos sapiente quaerat accusamus
                              nulla voluptate animi facere, repudiandae nisi ea error iste aliquam? Totam sit cumque numquam aperiam,
                              nulla voluptatum, eaque ex nobis eveniet eius, voluptatibus sapiente at voluptatem repellendus minus!
                              Quisquam alias.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm col-md-2" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal end -->
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>

          <div id="news">
            <article class="blog-post mt-5">
              <h2 class="blog-post-title mb-1">More News</h2>
              <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
              <p>This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
                This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
                This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
              </p>
            </article>

            <article class="blog-post mt-5">
              <h2 class="blog-post-title mb-1">More News</h2>
              <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
              <p>This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
                This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
                This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
              </p>
            </article>

            <article class="blog-post mt-5">
              <h2 class="blog-post-title mb-1">More News</h2>
              <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>
              <p>This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
                This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
                This is some additional paragraph placeholder content.
                It has been written to fill the available space and show
                how a longer snippet of text affects the surrounding content.
              </p>
            </article>
          </div>
        </div>

        <!-- Event -->
        <div class="col-md-6">
          <div class="row flex-md-row mb-4 mt-3">
            <h1 class="text-center pb-2 border-bottom display-6 fst-italic">Upcoming events</h1>
          </div>
          <?php
            // fetch news from database
            $events_query = "SELECT * FROM events ORDER BY date DESC LIMIT 12";
            $events_query_run = mysqli_query($connection, $events_query);
            if($events_query_run){
            while ($row = mysqli_fetch_array($events_query_run)) {
          ?>
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?php echo $row['country'] ?></strong>
                <h3 class="mb-0"><?php echo $row['tittle'] ?></h3>
                <p class="card-text mb-auto"><?php echo $row['content'] ?></p>
                <p class="mb-1 text-muted"><strong>DATE: </strong> <?php echo $row['date'] ?></p>
                <p class="mb-1 text-muted"><strong>REPORTING TIME: </strong> <?php echo $row['time'] ?></p>
                <p class="mb-1 text-muted"><strong>VENUE: </strong> <?php echo $row['venue'] ?></p>
                <p class="mb-1 text-muted"><strong>FOR MORE INFO: </strong><?php echo $row['info_contact'] ?></p>
              </div>
            </div>
          <?php
            }
          }
        ?>
        </div>
      </div>
    </div>
    <?php include('partials/footer.php') ?>