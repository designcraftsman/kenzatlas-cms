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
        <h1 class="fw-bolder fs-2 mb-5 text-decoration-underline">Info utulisateur :</h1>
            <div class=" fs-5 row m-auto  border border-primary p-2 rounded   mb-3">
                <div class="fw-bold text-decoration-underline col-4">ID utulisateur: </div>
                <div class="col-7 text-end"><?= htmlspecialchars($utulisateur->id); ?></div>
            </div>
            <div class=" fs-5 row m-auto border  border-primary p-2 rounded mb-3">
                <div class="fw-bold text-decoration-underline col-4">Nom: </div>
                <div class="col-7 text-end"><?= htmlspecialchars($utulisateur->nom); ?> </div>
            </div>
            <div class="fs-5 row m-auto m-auto border border-primary rounded p-2 mb-3">
                <div class=" text-decoration-underline fw-bold col-4">Prénom: </div>
                <div class="col-7 text-end"><?= htmlspecialchars($utulisateur->prenom); ?>  </div>
            </div>
            <div class="fs-5 row m-auto  border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Age: </div>
                <div class="col-7 text-end"> <?= htmlspecialchars($utulisateur->dateNaissance); ?> </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Téléphone: </div>
                <div class="col-7 text-end">
                <?= htmlspecialchars($utulisateur->telephone); ?>
                </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Commande(s) effectuée(s): </div>
                <div class="col-7 text-end">
                <?php echo($OrderRepository->getOrdersNumber($utulisateur->id)) ?> <span class="ms-3"><a href="index.php?action=userOrders&id=<?= htmlspecialchars($utulisateur->id) ?>" ><i class="fa-solid fa-circle-info text-dark"></i></a></span>
                </div>
            </div> 
            <div >
            <a type="button" class="   btn btn-danger  fw-bold mt-2 "data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-solid fa-trash"></i> Supprimer l'utulisateur</a>
            </div>
        </main>
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment supprimez ce membre?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <a href="index.php?action=delete&id=<?= htmlspecialchars($utulisateur->id); ?>" type="button" class="btn btn-danger">Supprimer</a>
                                </div>
                                </div>
                 </div>
            </div>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>