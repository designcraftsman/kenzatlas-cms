<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubXtreme - Utulisateurs</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include_once "../components/navbar.php";?>
      <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0">
        <?php include_once "../components/asidenav.php";?>
        <main class="col-lg-9 col-12 m-auto   mt-0">
            <h1 class="fw-bold  fs-2 mt-4 mb-4 headersAnimation">Utulisateurs</h1>
            <h2 class="fw-light  fs-4 mt-4 mb-4 headersAnimation">Liste des utulisateurs de KenzAtlas</h2>
            <?php if(isset($_SESSION['success_message'])){ ?>
              <div class="alert alert-success headersAnimation" role="alert"><?= htmlspecialchars($_SESSION['success_message']) ?></div>
            <?php 
              unset($_SESSION['success_message']);
            } ?>
            <?php if(isset($_SESSION['error_message'])){ ?>
              <div class="alert alert-danger headersAnimation" role="alert"><?= htmlspecialchars($_SESSION['error_message']) ?></div>
            <?php 
              unset($_SESSION['error_message']);
          } ?>
            <div class="table-responsive componentsAnimation">
                <table class="table table-primary   ">
                  <thead>
                    <tr  >
                      <th scope="col" class="col-2">Nom complet</th>
                      <th scope="col" class="col-2">Email</th>
                      <th scope="col" class="col-2">Date de naissance</th>
                      <th scope="col" class="col-2">Telephone</th>
                      <th scope="col" class="col-2">Nombre de commandes</th>
                      <th scope="col" class="col"></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($utulisateurs as $utulisateur){ ?>
                    <tr>
                      <td scope="row"><?= htmlspecialchars($utulisateur->nom); ?> <?= htmlspecialchars($utulisateur->prenom); ?></td>
                      <td><?= htmlspecialchars($utulisateur->email); ?></td>
                      <td><?= htmlspecialchars($utulisateur->dateNaissance); ?></td>
                      <td><?= htmlspecialchars($utulisateur->telephone); ?></td>
                      <td><?php echo($OrderRepository->getOrdersNumber($utulisateur->id)) ?></td>
                      <td>
                        <div class="dropdown col-2">
                          <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis fa-xl"></i>
                          </a>
                        
                          <ul class="dropdown-menu text-center p-0" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item border p-2 " href="index.php?action=view&id=<?= htmlspecialchars($utulisateur->id); ?>"><i class="fa-solid fa-circle-info"></i> Consulter</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
                <?php
                if(!$utulisateurs){
                echo('<div class="text-center text-dark fw-light fs-3  m-0 p-4">Aucun utulisateur</div>');
                }
                ?>
        </div>  
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>