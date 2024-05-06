<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubXtreme - Admin dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar navbar-light bg-dark sticky-top  p-2">
        <div class="container-fluid">
          <a class="text-decoration-none d-lg-none " data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="fa-solid fa-bars"></i>
          </a>
          <a class="navbar-brand" href="dashboard.php">
            <img src="../assets/img/logo/white logo.svg" width="150" >
          </a>
          <div class="d-flex ">
              <form class="d-lg-flex d-none align-items-center justify-content-between me-5 ">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <i class="fa-solid fa-magnifying-glass text-white"></i>
              </form>
              <a type="button"  data-bs-toggle="collapse" href="#userCollapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="user">
                <img src="../assets/img/logo/review3.jpg" class="w-100 rounded-circle   user__icon" alt="">
              </a>
              <div class="collapse" id="userCollapse">
              <div class="card card-body p-0">
                <h2 class="fw-normal p-3 fs-5">Bonjour,<span>Oussama Fayz</span> !</h2>
                <hr class="m-1">
                <nav class="p-0">
                    <ul class="list-unstyled m-0 p-0">
                      <li  class=" border-dark m-0 p-0 rounded-top "><a class="text-decoration-none text-dark d-block p-3" href="user/manage.php"><i class="fa-solid fa-user"></i> Gérer votre compte</a></li>
                      <hr class="m-1">
                      <li class="  m-0 p-0 rounded-bottom"><a class="text-decoration-none text-dark d-block p-3 " href=".."><i class="fa-solid fa-right-from-bracket"></i> Se déconnecter</a></li>
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
          <li class="link  p-0 "><a href="dashboard.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-house"></i> Tableau de bord</a></li>
          <li class="link p-0 "><a href="members/members.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-users"></i> Membres</a></li>
          <li class="link  p-0 "><a href="events/events.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-calendar"></i> Evénements</a></li>
          <li class="link  p-0 "><a href="transactions/transactions.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-money-bill-transfer"></i> Transactions</a></li>
          <li class="link  p-0 "><a href="trainingsessions/trainingsessions.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-rectangle-list"></i> Séances d'entrainements</a></li>
          <li class="link  p-0 "><a href="reports/reports.php" class="fs-5 text-dark fw-light text-decoration-none border d-block p-3"><i class="fa-solid fa-flag"></i> Rapports</a></li>
        </ul>
    </nav>
  </div>
</div>



      <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0 ">
        <nav class="col-2 bg-secondary d-lg-flex flex-column asideNavbar  p-0 d-none   ">
            <ul class="list-unstyled d-flex flex-column  align-items-start  p-4  pt-5  ps-5 ">
              <li class="link mb-4 text-start  "><a href="dashboard.php" class="fs-5 text-dark fw-bold text-decoration-none "><i class="fa-solid fa-house"></i> Tableau de bord</a></li>
              <li class="link mb-4 text-start  "><a href="members/members.php" class="fs-5 fw-light text-dark text-decoration-none "><i class="fa-solid fa-users"></i> Membres</a></li>
              <li class="link mb-4 "><a href="events/events.php" class="fs-5 text-dark fw-light text-decoration-none "><i class="fa-solid fa-calendar"></i> Evénements</a></li>
              <li class="link mb-4"><a href="transactions/transactions.php" class="fs-5 text-dark fw-light text-decoration-none "><i class="fa-solid fa-money-bill-transfer"></i> Transactions</a></li>
              <li class="link mb-4"><a href="trainingsessions/trainingsessions.php" class="fs-5 text-dark fw-light text-decoration-none "><i class="fa-solid fa-rectangle-list"></i> Séances d'entrainements</a></li>
              <li class="link mb-4"><a href="reports/reports.php" class="fs-5 text-dark fw-light text-decoration-none "><i class="fa-solid fa-flag"></i> Rapports</a></li>
            </ul>
        </nav>
          <main class="col-lg-9 col-12 m-auto   mt-5">
            <h1 class="text-dark fs-3 fw-bold ">Tableau de bord</h1>
            <h2 class=" fw-light fs-5 ">Ce mois</h2>
            <div class="row mt-4   p-2 mt-lg-0 ">
              <div class="col-lg-3 col-md-5 col-12 bg-secondary   p-3 text-center rounded-4 m-auto mb-3">
                <h3 class="fs-4 fw-light "><span class="tounrnamentsIcon"><i class="fa-solid fa-trophy"></i></span> Tournois</h3>
                <h4 class="fs-4 fw-bold ">14</h4>
              </div>
              <div class="col-lg-3 col-md-5 col-12  bg-secondary   p-3 text-center rounded-4 mt-lg-0 m-auto mb-3">
                <h3 class="fs-4 fw-light "><span class="tounrnamentsIcon"><i class="fa-solid fa-calendar"></i></span> Evénements</h3>
                <h4 class="fs-4 fw-bold ">33</h4>
              </div>
              <div class="col-lg-3 col-md-5 col-12  bg-secondary   p-3 text-center rounded-4 mt-lg-0 m-auto mb-3">
                <h3 class="fs-4 fw-light "><span class="tounrnamentsIcon"><i class="fa-solid fa-money-bill-transfer"></i></span> Transactions</h3>
                <h4 class="fs-4 fw-bold ">20</h4>
              </div>
            </div>
            <h2 class="text-dark fs-4 fw-bold mt-4">Nouveaux abonnés</h2>
            <h3 class=" fw-light fs-5 ">Découvrez les derniers membres du club</h3>

            <div class="table-responsive">
                <table class="table table-primary   mt-4">
                  <thead>
                    <tr >
                      <th scope="col">Id</th>
                      <th scope="col">Nom complet</th>
                      <th scope="col">Email</th>
                      <th scope="col">Telephone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto@gmail.com</td>
                      <td>06973655</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton@gmail.com</td>
                      <td>0788996632</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry the Bird</td>
                      <td>larry@gmail.com</td>
                      <td>89665577</td>
                    </tr>
                  </tbody>
                </table>
</div>
            
          </main>
        </div>
      </div>
</body>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>