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

<?php include "../components/navbar.php"; ?>
      <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0 ">
        <?php include "../components/asidenav.php"; ?>
          <main class="col-lg-9 col-12 m-auto    mt-5 p-3">
            <div  class="userInfo row     ">
                <div class="col-lg-3 col-10 m-auto text-center mb-5">
                    <img src="../../assets/img/logo/review3.jpg" class="img-fluid rounded-circle m-auto " >
                </div>
            </div>
            <form class=" col-lg-9 col-12 m-auto">
                    <h2 class="fw-semibold fs-5 text-center"> Gérer vos informations personnelles</h2>
                    <hr>
                    <div class="row mb-3">
                        
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <label for="lieu" class="mb-3">Nom</label>
                            <input type="text" name="lieu" class="form-control" value="fayz">
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <label for="sport" class="mb-3">Prenom</label>
                            <input type="text" name="lieu" class="form-control"value="oussama" > 
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <label for="lieu" class="mb-3">Date de naissance</label>
                            <input type="date" name="lieu" class="form-control"  >
                        </div>
                    </div>
                    <button type="submit" class=" btn btn-success  fw-bold">Enregistrer Les modifications</button>
                </form>
          </main>
        </div>
      </div>
</body>
<script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>