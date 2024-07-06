<?php $title ="Messages";?>
<?php ob_start();?>
<?php include_once "../components/navbar.php";?>
      <div class="container-fluid m-0 p-0 ">
        <div class="row m-0 p-0">
        <?php include_once "../components/asidenav.php";?>
        <main class="col-lg-9 col-12 m-auto   mt-0">       
        <h1 class="fw-bold  fs-2  mt-4 mb-4 headersAnimation">Messages</h1>
            <h2 class="fw-light  fs-4  mt-4 mb-5 headersAnimation">liste des messages reçus</h2>
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
                      <th scope="col" class="col-2">Id message</th>
                      <th scope="col" class="col-2">Nom complet</th>
                      <th scope="col" class="col-2">Email</th>
                      <th scope="col" class="col-2">Date du message</th>
                      
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($messages as $message){ ?>
                    <tr>
                      <th scope="row"><?= htmlspecialchars($message->id); ?></th>
                      <td><?= htmlspecialchars($message->utulisateur); ?></td>
                      <td><?= htmlspecialchars($message->email); ?></td>
                      <td><?= htmlspecialchars($message->date); ?></td>
                     
                      <td>
                        <div class="dropdown col-2 ">
                          <a class="btn btn-secondary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis fa-xl"></i>
                          </a>
                        
                          <ul class="dropdown-menu text-center p-0" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item border p-2 " href="index.php?action=view&id=<?= htmlspecialchars($message->id); ?>"><i class="fa-solid fa-circle-info"></i> Consulter</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <?php }?>

                  </tbody>
                </table>
                <?php
                if(!$messages){
                echo('<div class="text-center text-dark fw-light fs-3  m-0 p-4">Aucun message</div>');
                }
                ?>
                
        </div>


      
        </main>
    </div>
    <?php $content = ob_get_clean(); ?>

<?php require('../../views/layout.php') ?>
