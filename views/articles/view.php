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
        <main class="col-lg-9 col-12     p-5   mt-0">
         
        <div class="row d-flex align-items-start">
        <h1 class="fw-bolder fs-2 mb-5 text-decoration-underline">Info article :</h1>
        <div class="row mb-5 align-items-center">
        <div class="col-7">
                <div class=" fs-5 row m-auto  border border-primary p-2 rounded   mb-3">
                    <div class="fw-bold text-decoration-underline col-4">ID article: </div>
                    <div class="col-7 text-start"><?= htmlspecialchars($article->id) ?></div>
                </div>
                <div class=" fs-5 row m-auto border  border-primary p-2 rounded mb-3">
                    <div class="fw-bold text-decoration-underline col-4">Titre d'article: </div>
                    <div class="col-7 text-start"><?= htmlspecialchars($article->titre) ?></div>
                </div>
                <div class="fs-5 row m-auto m-auto border border-primary rounded p-2 mb-3">
                    <div class=" text-decoration-underline fw-bold col-4">Catégorie: </div>
                    <div class="col-7 text-start"><?= htmlspecialchars($article->categorie) ?></div>
                </div>
                <div class="fs-5 row m-auto m-auto border border-primary rounded p-2 mb-3">
                    <div class=" text-decoration-underline fw-bold col-4">Date de publication: </div>
                    <div class="col-7 text-start"><?= htmlspecialchars($article->date) ?></div>
                </div> 
               
                </div>
                <div class="col-4 ms-auto">
                    <img src="../../<?= htmlspecialchars($article->image) ?>" class="w-100 rounded" alt="">
                 </div> 
                 </div>
                <div class="fs-5 row m-auto  border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Contenu: </div>
                <div class="col-7 text-start"> <?= htmlspecialchars($article->contenu) ?> </div> 
                    <div >
                <a href="index.php?action=modify&id=<?= htmlspecialchars($article->id) ?>" class="   btn btn-primary text-white  fw-bold mt-2 " ><i class="fa-solid fa-trash"></i> Modifier l'article</a>
                <a type="button" class="   btn btn-danger  fw-bold mt-2 ms-2 "data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-solid fa-trash"></i> Supprimer l'article</a>
                </div>
            
</div>
        
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment supprimez cet article ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <a href="index.php?action=delete&id=<?= htmlspecialchars($article->id) ?>" type="button" class="btn btn-danger">Supprimer</a>
                                </div>
                                </div>
                 </div>
            </div>
</main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>