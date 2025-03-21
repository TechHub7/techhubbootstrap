  <?php require_once './inc/header.php'; ?>

  <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
  <style>
    /* Zoom effect for image */
    .card-img-top {
      transition: transform 0.3s ease-in-out;
    }

    .card:hover .card-img-top {
      transform: scale(1.05); /* Slight zoom in */
    }

    /* Style for Buy button */
    .card-body {
      position: relative;
      height: 150px; /* Set a fixed height to allow centering of the button */
    }

    .card-body .btn {
      position: absolute;
      bottom: 15px; /* Positioned at the bottom */
      left: 50%;
      transform: translateX(-50%); /* Center the button horizontally */
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    /* Show the Buy button when hovering over the card */
    .card:hover .btn {
      opacity: 1;
    }
  </style>
</head>
<body>

  <!-- <noscript>UNABLE TO OPEN BECACAUE JS IS DISABLED</noscript> -->

  <div class="container mt-4">
    <div class="row">
      <!-- S25-->
      <div class="col-md-4">
        <div class="card">
          <img src="./img/S25/PA3-01-TitaniumGray-1600x1200.webp" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="card-title">Galaxy S25 Ultra</h5>
            <p class="card-text">This is the Galaxy S25 Series.</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

      <!-- A73 -->
      <div class="col-md-4">
        <div class="card">
          <img src="./img/A73/africa-en-galaxy-a73-5g-a736-sm-a736blggafa-532255807.webp" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="card-title">Galaxy A73 5G</h5>
            <p class="card-text">This is the Galaxy A73 Series.</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

            <!-- Z Fold6 -->
            <div class="col-md-4">
              <div class="card">
                <img src="./img/Z Fold 6/SCOMB6Q6-714-PromoGalleryImage-Q6-02-NationalColors.webp" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Galaxy Z Fold6</h5>
                  <p class="card-text">This is the Galaxy Z Fold6 Series.</p>
                  <a href="#" class="btn btn-primary">Buy</a>
                </div>
              </div>
            </div>
            
            <!-- S24 -->
            <div class="col-md-4">
              <div class="card">
                <img src="./img/S24/s24 ultra.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Galaxy S24 Ultra</h5>
                  <p class="card-text">This is the Galaxy S24 Series.</p>
                  <a href="#" class="btn btn-primary">Buy</a>
                </div>
              </div>
            </div>


      <!-- A55 -->
      <div class="col-md-4">
        <div class="card">
          <img src="./img/A55/a55.jpg" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="card-title">Galaxy A55</h5>
            <p class="card-text">This is the Galaxy A55 Series.</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

            <!-- Z Fold5 -->
            <div class="col-md-4">
              <div class="card">
                <img src="./img/Z fold 5/z fold5.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Galaxy Z Fold5</h5>
                  <p class="card-text">This is the Galaxy Z Fold5 Series.</p>
                  <a href="#" class="btn btn-primary">Buy</a>
                </div>
              </div>
            </div>      
    </div>
  </div>
  <br><br><br><br>
</body>
<?php require_once './inc/footer.php'; ?>