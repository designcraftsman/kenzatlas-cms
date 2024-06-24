<nav class="navbar navbar-light bg-primary sticky-top  p-0 position-relative">
        <div class="container-fluid">
          <a class="text-decoration-none d-lg-none " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars fa-lg text-white"></i>
          </a>
          <div class="d-md-none d-sm-none d-lg-block">

          </div>
          <a class="navbar-brand" href="../dashboard.php" >
            <img src="../../../assets/img/logo/svg_white.svg" width="150" >
          </a>
          <div class="d-flex me-lg-4">
              <a type="button"  data-bs-toggle="collapse" href="#userCollapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="user">
                <img src="../../assets/img/logo/review3.jpg" class="w-100 rounded-circle   user__icon" alt="">
              </a>
              <div class="collapse" id="userCollapse">
              <div class="card card-body p-0">
                <h2 class="fw-normal p-3 fs-5">Bonjour <span>Mariam </span> !</h2>
                <hr class="m-1">
                <nav class="p-0">
                    <ul class="list-unstyled m-0 p-0">
                      <li  class=" border-dark m-0 p-0 rounded-top "><a class="text-decoration-none text-dark d-block p-3" href="../user/manage.php"><i class="fa-solid fa-user"></i> Gérer votre compte</a></li>
                      <hr class="m-1">
                      <li class="  m-0 p-0 rounded-bottom"><a class="text-decoration-none text-dark d-block p-3 " href="../.."><i class="fa-solid fa-right-from-bracket"></i> Se déconnecter</a></li>
                    </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h2 class="fw-semibold">
      ClubXtreme
    </h2>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body mt-5 p-0">
    <nav class="p-0">
        <ul class="list-unstyled text-center p-0">
          <li class="link  p-0 "><a href="../dashboard.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-house"></i> Tableau de bord</a></li>
          <li class="link p-0 "><a href="../orders/index.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-users"></i> Commandes</a></li>
          <li class="link  p-0 "><a href="../users/users.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-calendar"></i> Utulisateurs</a></li>
          <li class="link  p-0 "><a href="../products/products.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-money-bill-transfer"></i> Produits</a></li>
          <li class="link  p-0 "><a href="../articles/articles.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-rectangle-list"></i> Articles</a></li>
          <li class="link  p-0 "><a href="../messages/messages.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-flag"></i> Messages</a></li>
        </ul>
    </nav>
  </div>
</div>
