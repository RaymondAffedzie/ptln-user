<?php
include('partials/connection.php');
include('partials/header.php');
?>

<body>
  <header class="fixed-top">
  <?php include('partials/navbar.php'); ?>
    <div class="container-fluid bg-dark">
      <div class="row" style="margin-top: -10px;">
        <ul class="nav nav-pills list-inline d-flex justify-content-center gap-5 mt-4" id="pills-tab" role="tablist" style="margin-bottom: 10px;">
          <li class="nav-item" style="cursor: pointer;">
            <select name="category" id="category" class="form-control">
              <option value="" selected disabled hidden>Select your country</option>
              <option value="">United state of America</option>
              <option value="">Ghana</option>
            </select>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-light active" id="pills-upcomingevents-tab" data-bs-toggle="pill" data-bs-target="#pills-upcomingevents" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Upcoming Events</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-light" id="pills-pastevents-tab" data-bs-toggle="pill" data-bs-target="#pills-pastevents" type="button" role="tab" aria-controls="pills-change_password" aria-selected="false">Past Events</button>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <main class="container" style="margin-top: 150px;">
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-upcomingevents" role="tabpanel" aria-labelledby="pills-upcomingevents-tab">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark" style="background-image: linear-gradient(15deg, #13547a 0%, #80d0c7 100%);">
          <div class="col-md-12 px-0">
            <h1 class="display-3 fw-bold fst-italic">Upcoming Event</h1>
          </div>
        </div>

        <div class="col-md-12">
          <?php
            // fetch news from database
            $events_query = "SELECT * FROM events ORDER BY date DESC LIMIT 12";
            $events = mysqli_query($connection, $events_query);
            while ($event = mysqli_fetch_assoc($events)) {
          ?>
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary"><?php echo ucfirst($event['town']) ?>, <?php echo strtoupper($event['country']) ?></strong>
                <h3 class="mb-0"><?php echo strtoupper($event['tittle']) ?></h3>
                <p class="card-text mb-auto"><?php echo ucfirst($event['content']) ?></p>
                <div class="mb-1 text-muted"><strong>DATE: </strong><?php echo $event['date'] ?></div>
                <div class="mb-1 text-muted"><strong>REPORTING TIME: </strong><?php echo $event['time'] ?></div>
                <div class="mb-1 text-muted"><strong>VENUE: </strong><?php echo $event['venue'] ?></div>
                <div class="mb-1 text-muted"><strong>FOR MORE INFO: </strong><?php echo $event['info_email'] ?> | <?php echo $event['info_contact'] ?></div>
              </div>
            </div>
          <?php
            }
          ?>
        </div>
      </div>

      <div class="tab-pane fade show active" id="pills-pastevents" role="tabpanel" aria-labelledby="pills-pastevents-tab">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark" style="background-image: linear-gradient(15deg, #1c91b4 0%, #daaa28 100%);">
          <div class="col-md-12 px-0">
            <h1 class="display-3 fw-bold fst-italic">Past Event</h1>
          </div>
        </div>
      </div>
    </div>

    <?php include('partials/footer.php') ?>