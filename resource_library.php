<?php
include('partials/connection.php');
include('partials/header.php');
?>

<body>
  <header class="fixed-top">
    <?php include('partials/navbar.php'); ?>
  </header>
  <main class="container" style="margin-top: 100px;">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark" style="background-image: linear-gradient(-20deg, #00cdac 0%, #8ddad5 100%);">
      <div class="embed-responsive">
        <h1 class="display-3 fw-bold">Video Library</h1>
        <p class="lead mb-0 mt-5"><a href="#" class="text-white text-decoration-none">Subscribe to our daily devotional videos and teachings</a></p>
      </div>
    </div>

    <!-- First set of videos -->
    <div class="album py-5 bg-light margin-top:-50rem shadow-lg" style="margin-bottom: 100px;">
      <div class="container">
        <!-- Tab Videos  -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <iframe class="embed-responsive-item" src="assets/vidz/4.mp4" allowfullscreen allow="download"></iframe>
              <div class="card-body">
                <h3 class="card-text">TITTLE OF VIDEO HERE</h3>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- end of tab videos -->
      </div>
    </div>

    <?php include('partials/footer.php') ?>