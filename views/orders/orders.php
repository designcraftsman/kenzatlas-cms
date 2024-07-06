<?php $title ="Commandes";?>
<?php ob_start();?>
<?php require "../components/navbar.php";?>
      <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0">
        <?php include_once "../components/asidenav.php";?>
        <main class="col-lg-9 col-12 m-auto   mt-0">
            <h1 class="fw-bold  fs-2  mt-4 mb-4 headersAnimation">Commandes</h1>
            <h2 class="fw-light  fs-4  mt-4 mb-5 headersAnimation">Liste des derniers commandes</h2>
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
                      <th scope="col" class="col-2">Numéro de commande</th>
                      <th scope="col" class="col-2">Nom du Client</th>
                      <th scope="col" class="col-2">Prix total</th>
                      <th scope="col" class="col-2">Telephone du client</th>
                      <th scope="col" class="col-2">Date de la commande</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($commandes as $commande) {?>
                    <tr>
                      <th scope="row"><?= htmlspecialchars($commande->numero); ?></th>
                      <td><?php echo($commande->nomClient.' '.$commande->prenomClient) ?></td>
            
                      <td><?= htmlspecialchars ($commande->prix); ?> dh</td>
                      <td><?= htmlspecialchars($commande->telephone); ?></td>
                      <td><?= htmlspecialchars($commande->date); ?></td>
                      <td>
                        <div class="dropdown col-2">
                          <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis fa-xl"></i>
                          </a>
                        
                          <ul class="dropdown-menu text-center p-0" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item border p-2 " href="index.php?action=view&numero-commande=<?= htmlspecialchars($commande->numero); ?>"><i class="fa-solid fa-circle-info"></i> Consulter</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php }?>
                    
                  </tbody>
                </table>
                <?php
                if(!$commandes){
                echo('<div class="text-center text-dark fw-light fs-3  m-0 p-4">Aucune commande</div>');
                }
                ?>
        </div>

        </main>
    </div>
    <?php $content = ob_get_clean(); ?>

<?php require('../../views/layout.php') ?>

