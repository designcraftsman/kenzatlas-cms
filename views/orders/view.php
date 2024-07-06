<?php $title = 'Commande'; ?>
<?php $content = ob_start(); ?>
<?php include_once "../components/navbar.php";?>
      <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0">
        <?php include_once "../components/asidenav.php";?>
        <main class="col-lg-9 col-12      p-3   mt-0">
            <h1 class="fw-bolder fs-2 mb-5 text-decoration-underline">Info commande :</h1>
            <div class=" fs-5 row m-auto  border border-primary p-2 rounded   mb-3">
                <div class="fw-bold text-decoration-underline col-4">Numéro de commande: </div>
                <div class="col-7 text-end"><?= htmlspecialchars($commande->numero); ?></div>
            </div>
            <div class=" fs-5 row m-auto border  border-primary p-2 rounded mb-3">
                <div class="fw-bold text-decoration-underline col-4">Client: </div>
                <div class="col-7 text-end"><?= htmlspecialchars($commande->nomClient); ?> <?= htmlspecialchars($commande->prenomClient); ?></div>
            </div>
            <div class="fs-5 row m-auto m-auto border border-primary rounded p-2 mb-3">
                <div class=" text-decoration-underline fw-bold col-4">Date: </div>
                <div class="col-7 text-end"><?= htmlspecialchars($commande->date); ?></div>
            </div>
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Adresse: </div>
                <div class="col-7 text-end">
                <?= htmlspecialchars($commande->adresse); ?>
                </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Ville: </div>
                <div class="col-7 text-end">
                <?= htmlspecialchars($commande->ville); ?>
                </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Code postal: </div>
                <div class="col-7 text-end">
                <?= htmlspecialchars($commande->codePostal); ?>
                </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Téléphone: </div>
                <div class="col-7 text-end">
                <?= htmlspecialchars($commande->telephone); ?>
                </div>
            </div>  
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Note (Commande): </div>
                <div class="col-7 text-end">
                <?= htmlspecialchars($commande->note); ?>
                </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Statut: </div>
                <div class="col-7 text-end">
                <?= htmlspecialchars($commande->statut); ?>
                </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Produit(s) commandé(s): </div>
                <div class="col-7 text-end">
                <?php foreach($produits as $produit){ ?>
                <span ><?= htmlspecialchars($produit['produit']); ?> (X <?= htmlspecialchars($produit['quantite']); ?> ) <br></span>
                <?php } ?>
                </div>
            </div> 
            <div class="fs-5 row m-auto border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Prix total: </div>
                <div class="col-7 text-end">
                
                    <?= htmlspecialchars($commande->prix) ?>
                 DH
                </div>
            </div>
            <div >
            <a type="button" class="btn btn-primary  text-white fw-bold mt-2 me-3" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="fa-solid fa-check"></i> Confirmer la commande</a>
            <a type="button" class="   btn btn-danger  fw-bold mt-2 "data-bs-toggle="modal" data-bs-target="#deleteModal" ><i class="fa-solid fa-trash"></i> Supprimer la commande</a>
            </div>
            
           
             
        </main>

        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment supprimez cette commande ?</h5>
                             </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                 <a href="index.php?action=delete&numero-commande=<?= htmlspecialchars($commande->numero); ?>" type="button" class="btn btn-danger">Supprimer</a>
                            </div>
                         </div>
                 </div>
            </div>
            <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment confirmer cette commande ?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <a href="index.php?action=confirm&numero-commande=<?= htmlspecialchars($commande->numero) ?>" type="button" class="btn btn-primary text-white">Confirmer</a>
                                </div>
                                </div>
                 </div>
            </div>
        </div>
<?php
    $content = ob_get_clean(); 
    require'../../views/layout.php';
;?>