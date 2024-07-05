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
        <form class="p-3 " method="POST" enctype="multipart/form-data">
            <div class="row mb-3 align-items-center">
                <div class="col-4 m-auto ">
                    <img src="../../<?= htmlspecialchars($article->image); ?>" class="w-50 rounded-5 " alt="">
                    <input type="file" name="imgArticle" class="form-control">
                </div>
                <div class="col-4">
                    <label for="coach" class="mb-3">Titre d'article</label>
                    <input type="text" name="titreArticle" class="form-control" value="<?= htmlspecialchars($article->titre); ?>" >
                </div>
                <div class="col-4">
                    <label for="sport" class="mb-3">Catégorie</label>
                <select class="form-select m-0" name="categorieArticle"  aria-label="sport">
                    <option selected value="<?= htmlspecialchars($article->categorie); ?>"><?= htmlspecialchars($article->categorie); ?></option>
                    <option value="corps">Corps</option>
                    <option value="cheveux">Cheveux</option>
                    <option value="conseils">Conseils</option>
                    <option value="conseils">Beauté</option>

                </select>  
                </div>
            </div>
            <div class="col  mb-3">
                <label for="contenu" class="mb-3">Contenu</label>
                <textarea name="contenuArticle" class="w-100 border-none" rows="10"  ><?= htmlspecialchars($article->contenu); ?></textarea>
            </div>
            <a type="button" class="btn btn-primary  p-2 text-white fw-bold"data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="fa-solid fa-pen"></i> Enregistrer les modifications</a>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Voulez vous effectuer cette modification ?</h5>
                                </div>
                                <div class="modal-footer ">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="submit"   class="btn btn-primary text-white fw-bold ">Enregistrer</>
                                </div>
                                </div>
                 </div>
            </div> 
        </form>
        </main>
        
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>