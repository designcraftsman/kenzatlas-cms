<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubXtreme - Produits</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include_once "../components/navbar.php";?>
      <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0">
        <?php include_once "../components/asidenav.php";?>
        <main class="col-lg-9 col-12 m-auto   mt-0">       
        <h1 class="fw-bold  fs-2  mt-4 mb-4 headersAnimation">Produits</h1>
            <h2 class="fw-light  fs-4  mt-4 mb-5 headersAnimation">liste des produits KenzAtlas</h2>
            <div class="table-responsive componentsAnimation">
                <table class="table table-primary   ">
                  <thead>
                    <tr  >
                      <th scope="col" class="col-1"></th>
                      <th scope="col" class="col-1">Id produit</th>
                      <th scope="col" class="col-2">Nom du produit</th>
                      <th scope="col" class="col-2">Prix du produit</th>
                      
                      <th class="col-2">
                        <a href="index.php?action=add" class="btn btn-primary w-100 text-white fw-bold">Ajouter un produit</a>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($produits as $produit){ ?>
                    <tr class="align-items-center">
                      <td><img src="../../<?= htmlspecialchars($produit->image); ?>" class="w-25"></td>
                      <td scope="row"><?= htmlspecialchars($produit->id); ?></td>
                      <td><?= htmlspecialchars($produit->nom); ?></td>
                      <td><?= htmlspecialchars($produit->prix); ?> dh</td>
                     
                      <td>
                        <div class="dropdown col-2 ">
                          <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis fa-xl"></i>
                          </a>
                        
                          <ul class="dropdown-menu text-center p-0" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item border p-2 " href="index.php?action=view&id=<?= htmlspecialchars($produit->id); ?>"><i class="fa-solid fa-circle-info"></i> Consulter</a></li>
                            <li><a class="dropdown-item border p-2 " href="index.php?action=modify&id=<?= htmlspecialchars($produit->id); ?>"><i class="fa-solid fa-pen"></i> Modifier</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
                <?php
                if(!$produits){
                echo('<div class="text-center text-dark fw-light fs-3  m-0 p-4">Aucun produit</div>');
                }
                ?>
        </div>
        </main>
    </div>
</div>
</body>
<script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</html>