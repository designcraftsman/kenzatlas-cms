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
        <form class="p-3 " method="POST"  enctype="multipart/form-data">
            <div class="row mb-5 align-items-center ">
                <div class="col">
                    <label for="coach" class="mb-3">Ajouter une image</label>
                    <input required type="file" name="imgArticle" class="form-control mb-3">  
                    <label  for="coach" class="mb-3">Titre d'article</label>
                    <input required type="text" name="titreArticle" class="form-control mb-3"  >
                    <label for="sport" class="mb-3">Catégorie</label>
                    <select required class="form-select m-0" name="categorieArticle" aria-label="sport">
                        <option selected value="beauté">Beauté</option>
                        <option value="corps">Corps</option>
                        <option value="cheveux">Cheveux</option>
                        <option value="conseil">Conseils</option>

                    </select>  
                </div>
            </div>
            <div class="col  mb-3">
                <label for="contenu" class="mb-3">Contenu</label>
                <textarea required name="contenuArticle" class="w-100  form-control" rows="10" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary  p-2 text-white fw-bold" ><i class="fa-solid fa-pen"></i> Ajouter l'article</button>
         </form>
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>