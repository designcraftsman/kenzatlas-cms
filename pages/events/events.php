<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubXtreme - Admin dashboard</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include_once "../components/navbar.php";?>
      <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0">
        <?php include_once "../components/asidenav.php";?>
        <main class="col-lg-9 col-12 m-auto   mt-0">
            <h1 class="fw-bold text-center fs-2 p-3 m-5">Evénements</h1>
            <div class="row  align-items-center ">
                <div class="col-2 fw-bold fs-6">
                    Id
                </div>
                <div class="col-2 fw-bold fs-6">
                    Nom
                </div>
                <div class="col-2 fw-bold fs-6">
                    Date
                </div>
                <div class="col-2 fw-bold fs-6">
                    Heure
                </div>
                <div class="col-2  fw-bold fs-6">
                    Lieu
                </div>
                <a href="add.php" class="btn  btn-success   col-2 fw-bold">Ajouter un événement</a>
                <hr class="m-2">
            </div>
            
            <div class="row  align-items-center mt-4 bg-info p-3 rounded-4 ">
                <div class="col-2 fw-light fs-6">
                    44
                </div>
                <div class="col-2 fw-light fs-6">
                    Yoga class
                </div>
                <div class="col-2 fw-light fs-6">
                    01 Fevirer 2024
                </div>
                <div class="col-2 fw-light fs-6">
                    13:00 GMT
                </div>
                <div class="col-2  fw-light fs-6">
                    Salle de yoga
                </div>
                <div class="dropdown col-2">
                    <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa-solid fa-ellipsis fa-xl"></i>
                    </a>
                  
                    <ul class="dropdown-menu text-center p-0" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item border p-2 " href="#"><i class="fa-solid fa-circle-info"></i> Consulter</a></li>
                      <li><a class="dropdown-item border p-2" href="#"><i class="fa-solid fa-pencil"></i> Modifier</a></li>
                      <li><a class="dropdown-item border p-2" href="#"><i class="fa-solid fa-trash"></i> Supprimer</a></li>
                    </ul>
                  </div>
            </div>
            
            

            
            
            
            
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>