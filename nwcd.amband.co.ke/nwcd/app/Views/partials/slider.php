<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .carousel-item {
      height: 400px;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
    }

    .carousel-caption {
      background: rgba(0, 0, 0, 0.4);
      padding: 1rem;
      border-radius: 0.5rem;
    }
  </style>
</head>

<body>
  <div class="container">
    <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
      
      <!-- Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('<?= base_url('assets/images/carousel/b1.jpg') ?>');">
          <div class="carousel-caption text-white">
            <h5>Carousel Slide One</h5>
            <p>UI and UX Design play key roles in user experience.</p>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('<?= base_url('assets/images/carousel/b2.jpg') ?>');">
          <div class="carousel-caption text-white">
            <h5>Carousel Slide Two</h5>
            <p>Design impacts how users interact with products.</p>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url('<?= base_url('assets/images/carousel/b3.jpg') ?>');">
          <div class="carousel-caption text-white">
            <h5>Carousel Slide Three</h5>
            <p>Consistency leads to better usability and satisfaction.</p>
          </div>
        </div>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
