    </main>
    <footer class="container mt-5">
      <div class="row pt-5">
        <div class="col-md-2">
          <h4>Page map</h4>
          <ul class="d-flex nav flex-column">
            <li class="nav-item mb-2"><a href="be_part_of_us.php" class="nav-link p-0 text-muted">Be part of us</a></li>
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="aboutus.php" class="nav-link p-0 text-muted">About Us</a></li>
            <li class="nav-item mb-2"><a href="news.php" class="nav-link p-0 text-muted">News</a></li>
            <li class="nav-item mb-2"><a href="stories.php" class="nav-link p-0 text-muted">Stories</a></li>
            <li class="nav-item mb-2"><a href="events.php" class="nav-link p-0 text-muted">Events</a></li>
            <li class="nav-item mb-2"><a href="resource_library.php" class="nav-link p-0 text-muted">Video Library</a></li>
            <li class="nav-item mb-2"><a href="motivational_page.php" class="nav-link p-0 text-muted">Motivational Qoutes</a></li>
            <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-md-10">
          <form action="be_part_of_us-code.php" method="post">
            <h3 class="text-darj display-6">Be part of our journey:</h3>
            <h5 class="mb-3 text-dark">Let bring Children to our Lord Jesus Christ</h5>
            <div class="row">
              <?php include('alerts.php'); ?>
              <div class="form-group mb-3 col-md-6">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" required>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label for="surname">Surname</label>
                <input type="text" name="surname" id="surname" class="form-control" placeholder="Last name(s)" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group mb-3 col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="example@email.com" required>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label for="phone_number">Phone Number</label>
                <input type="phone_number" name="phone_number" id="phone_number" class="form-control" placeholder="+1234567890">
              </div>
            </div>
            <div class="row">
              <div class="form-group mb-3 col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password" requirerd>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label for="con-password">Confirm Password</label>
                <input type="password" name="con_password" id="con_password" class="form-control" placeholder="password" requirerd>
              </div>
            </div>
            <div class="row">
              <div class="form-group mb-3 col-md-6">
                <label for="contact_means">Select means of contact</label>
                <select name="contact_means" id="contact_means" class="form-control" aria-placeholder="Select means of contact:By Email">
                  <option value="" selected disabled hidden>Select means of contact</option>
                  <option value="email">Email</option>
                  <option value="phone_number">Phone Number</option>
                  <option value="email phone_number">Both</option>
                </select>
              </div>
              <!-- <div class="form-group mb-3 col-md-6">
                      <label for="category">Select category for joining us</label>
                      <select name="category" id="category" class="form-control" aria-placeholder="How do you want to join us- Example: Prayer Partner">
                        <option value="" selected disabled hidden>Select category for joining us</option>
                          <option value="donor">Donor</option>
                          <option value="prayer partner">Prayer Partner</option>
                          <option value="volunteer">Volunteer</option>
                          <option value="subscribed">Subscribe to Our Resources</option>
                      </select>
                  </div> -->
            </div>
            <button type="submit" name="register" class="btn btn-primary col-md-12 mt-3">Join Us: Let impact into our generation and beyond</button>
          </form>
        </div>
      </div>
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
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>