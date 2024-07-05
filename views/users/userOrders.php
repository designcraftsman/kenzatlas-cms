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
            <h1 class="fw-bold  fs-2 mt-4 mb-4 headersAnimation">Liste des commandes de "<?= htmlspecialchars($utulisateur->nom) ?> <?= htmlspecialchars($utulisateur->prenom) ?>"</h1>

            <div class="table-responsive componentsAnimation">
                <table class="table table-primary   ">
                  <thead>
                    <tr  >
                      <th scope="col" class="col-3">Numero commande</th>
                      <th scope="col" class="col-3">Date</th>
                      <th scope="col" class="col-3">Total</th>
                      <th scope="col" class="col-3">statut</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($commandes as $commande){ ?>
                    <tr>
                      <td scope="row"><?= htmlspecialchars($commande->numero); ?> </td>
                      <td><?= htmlspecialchars($commande->date); ?></td>
                      <td><?= htmlspecialchars($commande->prix); ?></td>
                      <td><?= htmlspecialchars($commande->statut); ?></td>
                      
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
                <?php if(empty($commandes)){ ?>
                  <p class="text-center">Aucune commande trouvée pour cet utilisateur.</p>
                  <?php } ?>
        </div>  
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>