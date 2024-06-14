<style>
    .carousel-item {
      transition: transform 1s ease-in-out, opacity 1s ease-in-out;
    }

    .carousel-fade .carousel-item {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .carousel-fade .carousel-item.active {
      opacity: 1;
    }

    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
      transition: transform 0s 1s, opacity 1s ease-in-out;
    }
  </style>
</head>
<body>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade mb-5 pt-4 " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-3">
      <div class="carousel-item active">
        <img src="{{ asset($banner001) }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset($banner002) }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset($banner001) }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</body>
</html>
