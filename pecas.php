<!-- HEAD -->
<?php require('head.php'); ?>
  </head>
  <body>

    <!-- HEADER -->
    <?php $header['pecas']='active'; require('header.php'); ?>

    <div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('images/pecas.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Peças</span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>
    
    <!-- PEÇAS -->
    <?php require('lista_pecas.php'); ?>

<!-- FOOTER -->
<?php require('footer.php'); ?>