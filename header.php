<!-- INICIO header -->
<header role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">

        <a class="d-none d-md-block navbar-brand" href="/">Oficina Teatro Condeixa</a>
        <a class="d-md-none d-block navbar-brand overflow-hidden mx-auto text-center">
          <img src="/images/icon.png" alt="Logo" width="64" class="d-inline-block align-text-top"><br>
          <small>OFICINA TEATRO CONDEIXA</small><br>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao" aria-controls="navegacao" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </a>

        <button class="d-none d-md-block d-lg-none navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao" aria-controls="navegacao" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navegacao">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link <?php echo $header['inicio']; ?>" href="/">Início</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quem Somos</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item <?php echo $header['historia']; ?>" href="/historia">História</a>
                <a class="dropdown-item <?php echo $header['missao']; ?>" href="/missao">Missão</a>
                <a class="dropdown-item <?php echo $header['estatutos']; ?>" href="/estatutos">Estatutos</a>
                <a class="dropdown-item <?php echo $header['corpos']; ?>" href="/corpos">Corpos Sociais</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oficina de Teatro</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item <?php echo $header['pecas']; ?>" href="/pecas">Peças</a>
                <a class="dropdown-item <?php echo $header['animacoes']; ?>" href="/animacoes">Animações</a>
                <a class="dropdown-item <?php echo $header['teatraquinices']; ?>" href="/teatraquinices">Teatraquinices</a>
                <a class="dropdown-item <?php echo $header['participacoes']; ?>" href="/participacoes">Participações Especiais</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Associação</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item <?php echo $header['atividades']; ?>" href="/atividades">Atividades</a>
                <a class="dropdown-item <?php echo $header['associativismo']; ?>" href="/associativismo">Associativismo</a>
                <!--<a class="dropdown-item" href="socios.html">Sócios</a>-->
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link <?php echo $header['contactos']; ?>" href="/contactos">Contactos</a>
            </li>

            <li class="nav-item d-inline p-lg-4 p-0">
              <a href="https://www.facebook.com/OficinaTeatroCondeixa" class="p-2 text-light"><span class="fa fa-facebook"></span></a>
              <a href="https://www.instagram.com/otc_oficinadeteatro/" class="p-2 text-light"><span class="fa fa-instagram"></span></a>
            </li>

          </ul>
        </div>


      </div>
    </nav>
</header>
<!-- END header -->