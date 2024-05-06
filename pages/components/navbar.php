<nav class="navbar navbar-light bg-dark sticky-top  p-2 position-relative ">
        <div class="container-fluid">
          <a class="text-decoration-none d-lg-none " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars fa-lg"></i>
          </a>
          <a  class="navbar-brand" href="../dashboard.php">
            <img src="../../assets/img/logo/white logo.svg" width="150" >
          </a>
          <div class="d-flex ">
              <form class="d-lg-flex d-none align-items-center justify-content-between me-5 ">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass text-white"></i>
              </form>
              <a type="button"  data-bs-toggle="collapse" href="#userCollapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="user">
                <img src="../../assets/img/logo/review3.jpg" class="w-100 rounded-circle   user__icon" alt="">
              </a>
              <div class="collapse" id="userCollapse">
              <div class="card card-body p-0">
                <h2 class="fw-normal p-3 fs-5">Bonjour,<span>Oussama Fayz</span> !</h2>
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
          <li class="link p-0 "><a href="../members/members.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-users"></i> Membres</a></li>
          <li class="link  p-0 "><a href="../events/events.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-calendar"></i> Evénements</a></li>
          <li class="link  p-0 "><a href="../transactions/transactions.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-money-bill-transfer"></i> Transactions</a></li>
          <li class="link  p-0 "><a href="../trainingsessions/trainingsessions.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-rectangle-list"></i> Séances d'entrainements</a></li>
          <li class="link  p-0 "><a href="../reports/reports.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-flag"></i> Rapports</a></li>
        </ul>
    </nav>
  </div>
</div>
