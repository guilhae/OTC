<!-- HEAD -->
<?php require('head.php'); ?>
  </head>
  <body>

    <!-- HEADER -->
    <?php $header['contactos']='active'; require('header.php'); ?>

    <div class="top-shadow"></div>

    <div class="inner-page">
    <div class="slider-item" style="background-image: url('images/contactos.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
              <h1 class="pt-5"><span>Contactos</span></h1>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- END slider -->
    </div>

    <section class="section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 order-2">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nome</label>
                  <input type="text" id="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Telefone</label>
                  <input type="text" id="phone" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Escreva a sua mensagem</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Enviar mensagem" class="btn btn-primary px-3 py-3">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6 order-2 mb-5">
            <div class="row justify-content-right">
              <div class="col-md-8 mx-auto contact-form-contact-info">

                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span><small>Correio<br></small>Avenida Visconde de Alverca, 3150-120 Condeixa-a-Nova</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-home icon mr-5"></span>
                  <span><small>Local de ensaios<br></small>Rua Vale, 3150-221 Eira Pedrinha</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>+351 912 593 196</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>oficinadeteatro.condeixa@gmail.com</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- FOOTER -->
<?php require('footer.php'); ?>