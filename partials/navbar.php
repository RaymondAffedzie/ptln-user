<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"> <img src="assets/img/Picture1.png" alt="" width="70" height="40"> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="be_part_of_us.php">| Be part of Us |</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">| Donate Now |</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li>
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="aboutus.php">About Us</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="news.php">News</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="stories.php">Stories</a>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="events.php">Events</a>
          </li>
          <li class="nav-item" style="cursor: pointer;">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false">
                Resources Library
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM">
                <li><a class="dropdown-item" href="resource_library.php">Video Library</a></li>
                <li><a class="dropdown-item" href="motivational_page.php">Motivational quotes</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
          </li>
          <?php if (isset($_SESSION['users'])) { ?>
            <li class="nav-item" style="cursor: pointer;">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['users']['fname'] . ' ' . $_SESSION['users']['sname']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM">
                  <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                  <li>
                    <form action="logout.php" method="post">
                      <button type="submit" name="logout" class="dropdown-item">Sign out</button>
                    </form>
                  </li>
                </ul>
              </div>
            </li>
          <?php } else { ?>
            <li>
              <a class="nav-link" aria-current="page" href="login.php">Sign In</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>