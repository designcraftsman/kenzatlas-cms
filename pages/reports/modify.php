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
        <main class="col-lg-9 col-12 m-auto   mt-5 ">
        <form class="p-3 ">
            <div class="row mb-3">
            
                <div class="col">
                    <label for="coach" class="mb-3">Auteur</label>
                    <input type="text" name="coach" class="form-control"  >
                </div>
                <div class="col">
                    <label for="exercices" class="mb-3">Destinataire</label>
                    <input type="text" name="exercices"  class="form-control"  >
                </div>
                <div class="col">
                    <label for="date" class="mb-3">Date</label>
                    <input type="date" name="date"  class="form-control"  >
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <label for="contenu" class="mb-3">Contenu</label>
                    <textarea name="contenu"  class="form-control"></textarea>
                </div>
            </div>
            <button type="submit" class=" btn btn-success  fw-bold">Enregistrer les modifications</button>
         </form>
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>