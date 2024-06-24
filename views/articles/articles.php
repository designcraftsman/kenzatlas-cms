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
        <h1 class="fw-bold  fs-2  mt-4 mb-4 headersAnimation">Articles</h1>
            <h2 class="fw-light  fs-4  mt-4 mb-5 headersAnimation">liste des articles du blog</h2>
            <div class="table-responsive componentsAnimation">
                <table class="table table-primary  m-0 ">
                  <thead>
                    <tr  >
                      <th scope="col" class="col-2"></th>
                      <th scope="col" class="col-2">Titre d'article</th>
                      <th scope="col" class="col-2">Date de publication</th>
                      <th scope="col" class="col-2">Nombre de vue </th>
                      
                      <th class="col-2">
                        <a href="add.php" class="btn btn-primary w-100 text-white fw-bold">Ajouter un article</a>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach($articles as $article){ 
                      ?>
                    <tr>
                      <td scope="row"><img src="../../<?= htmlspecialchars($article['image']); ?>" class="w-25"></td>
                      <td><?= htmlspecialchars($article['titre']); ?></td>
                      <td><?= htmlspecialchars($article['date']); ?>/td>
                      <td><?= htmlspecialchars($article['vue']); ?></td>
                     
                      <td>
                        <div class="dropdown col-2 ">
                          <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis fa-xl"></i>
                          </a>
                        
                          <ul class="dropdown-menu text-center p-0" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item border p-2 " href="view.php?idArticle=<?= htmlspecialchars($article['id']); ?>"><i class="fa-solid fa-circle-info"></i> Consulter</a></li>
                            <li><a class="dropdown-item border p-2 " href="modify.php?idArticle=<?= htmlspecialchars($article['id']); ?>"><i class="fa-solid fa-pen"></i> Modifier</a></li>
                            <li><a type="button" class="dropdown-item border p-2"data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="fa-solid fa-trash"></i> Supprimer</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                    
                  </tbody>
                </table>

                <?php
                if(!$articles){
                echo('<div class="text-center text-dark fw-light fs-3  m-0 p-4">Aucun article</div>');
                }
                ?>
        </div>
            
           
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment supprimez cette séance ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <a href="delete.php?idArticle=<?= htmlspecialchars($article['id']); ?>" type="button" class="btn btn-danger">Supprimer</a>
                                </div>
                                </div>
                 </div>
            </div>
        </main>
    </div>
</div>
</body>
<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</html>