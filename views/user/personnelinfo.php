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
          <form class=" col-lg-9 col-12 m-auto" method="POST" enctype="multipart/form-data">
            <div  class="userInfo row     ">
                <div class="col-lg-3 col-10 m-auto text-center mb-5">
                    <img src="<?= htmlspecialchars($admin->image) ?>" class="object-fit-cover rounded-circle m-auto " >
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
                    <h2 class="fw-semibold fs-5 text-center"> Gérer vos informations personnelles</h2>
                    <hr>
                    <div class="row mb-3">
                        
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <label for="lieu" class="mb-3">Nom</label>
                            <input type="text" name="nom" class="form-control" value="<?= htmlspecialchars($admin->nom) ?>" >
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <label for="sport" class="mb-3">Prenom</label>
                            <input type="text" name="prenom" class="form-control"value="<?= htmlspecialchars($admin->prenom) ?>"  > 
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-3">
                            <label for="sport" class="mb-3">Email</label>
                            <input type="text" name="email" class="form-control" value="<?= htmlspecialchars($admin->email) ?>" > 
                        </div>
                    </div>
                    <button type="submit" class=" btn btn-primary text-white  fw-bold">Enregistrer Les modifications</button>
                </form>
          </main>
        </div>
      </div>
</body>
<script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>