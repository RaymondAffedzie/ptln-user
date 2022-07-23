<?php 
  include('partials/connection.php');
  include('partials/header.php'); 
?> 
    <header class="fixed-top">
    <?php include('partials/navbar.php'); ?>
      <div class="container-fluid bg-dark">
        <div class="row">
          <ul class="list-inline d-flex justify-content-center gap-5 mt-4">
            <li class="list-inline-item"><a class="text-decoration-none text-white" href="#whoWeAre">Who we are</a></li>
            <li class="list-inline-item"><a class="text-decoration-none text-white" href="#mission">Our Mission</a></li>
            <li class="list-inline-item"><a class="text-decoration-none text-white" href="#vision">Our Vision</a></li>
            <li class="list-inline-item"><a class="text-decoration-none text-white" href="#founder-message">Message From Founder</a></li>
            <li class="list-inline-item"><a class="text-decoration-none text-white" href="#our-team">Our Team</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main style="margin-top: 150px;">
      <div class="container mt-5">
        <div class="row mb-3">
          <div class="col-md-12" id="whoWeAre" style="scroll-margin-top: 150px;">
            <h3 class="text-warning display-6"><strong>WE ARE</strong></h3><hr class="mb-3">
            <ul>
              <li>International</li>
              <li>Inter-Denominational</li>
              <li>Christian Independent</li>
              <li>Non-Profit</li>
              <li>Non-Governmental Organization</li>
            </ul>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-12" id="mission" style="scroll-margin-top: 150px;">
            <h3 class="text-warning display-6"><strong>OUR MISSION</strong></h3><hr class="mb-3">
            <p>Reach every child with the Gospel to impact their generation.</p>
          </div>
        </div>
        <div class="row mb-3" >
          <div class="col-md-12" id="vision" style="scroll-margin-top: 150px;">
            <h3 class="text-warning display-6"><strong>OUR VISION</strong></h3 ><hr class="mb-3">
            <p>Every saved child impacting their generation</p>
          </div>
        </div>

        <div class="row mt-5" id="founder-message" style="scroll-margin-top:150px;">
          <h1 class="text-warning pb-3 display-6"><strong>FOUNDER'S MESSAGE</strong></h1><hr class="mb-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-4 mb-3">
              <div class="shadow-lg">
                <img src="assets/img/Picture1.png" width="100%" height="auto" class="bordered mb-3" alt="Founder's Name">
                <p class="py-3 text-center card-text">Mr. Isaac Lawer Martey</p>
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

        <div class=" row mt-5" id="our-team" style="scroll-margin-top:150PX;">
          <h1 class="text-warning display-6"><strong>OUR TEAM</strong></h1><hr class="mb-5">
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm" style="height: 250px;">
              <img src="assets/img/Picture1.png" width="100%" height="180px" alt="...">
              <div class="card-body">
                <div class="text-center pb-2">
                  <strong><p class="card-text">Mr. John Doe</p></strong>
                  <p class="card-text">Founder</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm" style="height: 250px;">
              <img src="assets/img/Picture1.png" width="100%" height="180px" alt="...">
              <div class="card-body">
                <div class="text-center pb-2">
                  <strong><p class="card-text">Mr. John Doe</p></strong>
                  <p class="card-text">Secretary</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm" style="height: 250px;">
              <img src="assets/img/Picture1.png" width="100%" height="180px" alt="...">
              <div class="card-body">
                <div class="text-center pb-2">
                  <strong><p class="card-text">Mr. John Doe</p></strong>
                  <p class="card-text">Vice Secretary</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm" style="height: 250px;">
              <img src="assets/img/Picture1.png" width="100%" height="180px" alt="...">
              <div class="card-body">
                <div class="text-center pb-2">
                  <strong><p class="card-text">Mr. John Doe</p></strong>
                  <p class="card-text">Organizer</p>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>

    <?php include('partials/footer.php') ?>