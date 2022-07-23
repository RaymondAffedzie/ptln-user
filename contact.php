<?php
include('partials/connection.php');
include('partials/header.php');
?>

  <body class="bg-image" style="background-image: url(assets/img/unsplash-photo-1.jpg);">  
    <header class="fixed-top">
    <?php include('partials/navbar.php') ?>
    </header>
    <main> 
      <div class="container" style="margin-top: 100px;">
        <div class="row">
          <div class="col-lg-6 mb-2 text-white d-flex align-items-center">
            <div class="row">
              <h1 class="">Contacts Info:</h1>
              <p>paultimothyleadershipnetwork@gmail.com</p>
              <p>Phone Number: +1 (240) 422-9126</p>
              <h1 class="fst-italic">Visit our social media pages</h1>
              <div class="col-md-4">
                <button class="mb-3 btn btn-primary" style="width: 120px;"><a href="https://www.facebook.com/paultimothyleadershipnetworkinc/" target="_blank" class="text-white text-decoration-none">facebook <i class="fa fa-facebook"></i></a></button>
                <button class="mb-3 btn btn-warning" style="width: 120px;"><a href="https://www.instagram.com/paultimothyleadershipnetwork/" target="_blank" class="text-white text-decoration-none">instagram <i class="fa fa-instagram"></i></a></button>
              </div>
              <div class="col-md-4">
                <button class="mb-3 btn btn-secondary" style="width: 120px;"><a href="https://twitter.com/paultimothy_net" target="_blank" class="text-white text-decoration-none">twitter <i class="fa fa-twitter"></i></a></button>
                <button class="mb-3 btn btn-danger" style="width: 120px;"><a href="https://youtube.com/channel/UCfezsKtVEl6z2_gL7WteBYg" target="_blank" class="text-white text-decoration-none">youtube <i class="fa fa-youtube"></i></a></button>
              </div>
              <!-- <div class="col-sm-4"></div> -->
            </div>
          </div>

          <div class="col-lg-6 mt-3">
            <div class="card text-white bg-transparent border rounded-0">
              <div class="card-body">
                <h1 class="mt-1">Get in touch with us</h1>
                <div class="container mb-5">
                  <form action="" method="POST">
                    <div class="form-group mb-3 mt-4">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                    </div>
                    <div class="form-group mb-3 mt-3">
                      <label for="message">Leave us a message</label>
                      <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" tabindex="5"></textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-primary col-md-3">Send</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="container text-white" style="margin-top: 80px;">
        <footer class="container-fluid mt-5">
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2022 Paul-Timothy Leadership Network Inc. All rights reserved.</p>
            <ul class="list-inline d-flex justify-content-center gap-3">
              <li class="mb-2"><a href="https://www.facebook.com/paultimothyleadershipnetworkinc/" target="_blank"><i class='fab fa-facebook'></i></a></li>
              <li class="mb-2"><a href="https://twitter.com/paultimothy_net" target="_blank"><i class='fab fa-twitter'></i></a></li>
              <li class="mb-2"><a href="https://www.instagram.com/paultimothyleadershipnetwork/" target="_blank"><i class='fab fa-instagram'></i></a></li>
              <li class="mb-2"><a href="https://youtube.com/channel/UCfezsKtVEl6z2_gL7WteBYg" target="_blank"><i class='fab fa-youtube'></i></a></li>
            </ul>
          </div>
        </footer>
      </div>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</php>
