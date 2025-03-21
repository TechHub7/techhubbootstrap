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
      <!-- 16 Pro Max-->
      <div class="col-md-4">
        <div class="card">
          <img src="./img/16 PRO/iPhone-16-Side-2-Feature.jpg" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="card-title">iPhone 16 Pro Max</h5>
            <p class="card-text">This is the iPhone 16 Pro Max Series.</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

      <!-- 15 Pro Max -->
      <div class="col-md-4">
        <div class="card">
          <img src="./img/15 PRO/iphone_15_pro_max_natural_titanium_pdp_image_position.webp" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="card-title">iPhone 15 Pro Max</h5>
            <p class="card-text">This is the iPhone 15 Pro Max Series.</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

            <!-- iPad Pro 13 -->
            <div class="col-md-4">
              <div class="card">
                <img src="./img/ipad pro 13/iPad+Pro+13+M4+Silver.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">Apple iPad Pro 13</h5>
                  <p class="card-text">This is the Apple iPad Pro Pro 13 Series.</p>
                  <a href="#" class="btn btn-primary">Buy</a>
                </div>
              </div>
            </div>
            
            <!-- 14 Pro Max -->
            <div class="col-md-4">
              <div class="card">
                <img src="./img/14 pro max/14 Pro max.png" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">iPhone 14 Pro Max</h5>
                  <p class="card-text">This is the iPhone 14 Pro Max Series.</p>
                  <a href="#" class="btn btn-primary">Buy</a>
                </div>
              </div>
            </div>


      <!-- 13 PRO MAX -->
      <div class="col-md-4">
        <div class="card">
          <img src="./img/13 PRO/iphone 13 pro max.jpeg" class="card-img-top" alt="Product Image">
          <div class="card-body">
            <h5 class="card-title">iPhone 13 Pro Max</h5>
            <p class="card-text">This is the iPhone 13 Pro Max Series.</p>
            <a href="#" class="btn btn-primary">Buy</a>
          </div>
        </div>
      </div>

            <!-- 13 PRO MAX -->
            <div class="col-md-4">
              <div class="card">
                <img src="./img/13 PRO/iphone 13 pro max.jpeg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">iPhone 13 Pro Max</h5>
                  <p class="card-text">This is the iPhone 13 Pro Max Series.</p>
                  <a href="#" class="btn btn-primary">Buy</a>
                </div>
              </div>
            </div>      
    </div>
  </div>
  <br><br><br><br><br>
</body>
  <?php require_once './inc/footer.php'; ?>