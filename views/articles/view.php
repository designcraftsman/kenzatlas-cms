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
                    <div class="col-7 text-start">55</div>
                </div>
                <div class=" fs-5 row m-auto border  border-primary p-2 rounded mb-3">
                    <div class="fw-bold text-decoration-underline col-4">Titre d'article: </div>
                    <div class="col-7 text-start">Comment savoir que je suis   </div>
                </div>
                <div class="fs-5 row m-auto m-auto border border-primary rounded p-2 mb-3">
                    <div class=" text-decoration-underline fw-bold col-4">Catégorie: </div>
                    <div class="col-7 text-start">Beauté</div>
                </div>
                <div class="fs-5 row m-auto m-auto border border-primary rounded p-2 mb-3">
                    <div class=" text-decoration-underline fw-bold col-4">Date de publication: </div>
                    <div class="col-7 text-start">21 février 2025</div>
                </div> 
               
                </div>
                <div class="col-4 ms-auto">
                    <img src="../../../assets/img/produits/ghassoul.jpg" class="w-100 rounded" alt="">
                 </div> 
                 </div>
                <div class="fs-5 row m-auto  border border-primary rounded p-2 mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Contenu: </div>
                <div class="col-7 text-start"> Introduction
                    L'Europe est à l'avant-garde de la transition énergétique mondiale, cherchant à réduire sa dépendance aux combustibles fossiles et à minimiser son empreinte carbone. Cette transformation est motivée par des objectifs climatiques ambitieux, des avancées technologiques et un engagement politique fort. Cet article explore les développements récents dans le domaine des énergies renouvelables en Europe, les défis rencontrés et les perspectives d'avenir.

                    Une croissance impressionnante
                    Au cours de la dernière décennie, la capacité installée en énergies renouvelables en Europe a connu une croissance spectaculaire. L'Union européenne (UE) a mis en place des politiques et des directives visant à promouvoir les sources d'énergie propres. En 2023, les énergies renouvelables représentaient plus de 40 % de la production totale d'électricité dans l'UE, avec une part croissante d'énergie éolienne, solaire et hydraulique.

                    Les pays nordiques, en particulier, ont joué un rôle de pionniers. Le Danemark, par exemple, produit plus de 50 % de son électricité à partir de l'énergie éolienne. L'Allemagne, avec son initiative "Energiewende" (transition énergétique), a également fait des progrès significatifs en augmentant sa capacité solaire et éolienne tout en réduisant progressivement sa dépendance au charbon.</div>
                    </div> 
                    <div >
                <a href="modify.php" class="   btn btn-primary text-white  fw-bold mt-2 " ><i class="fa-solid fa-trash"></i> Modifier l'article</a>
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
                                    <a href="delete.php" type="button" class="btn btn-danger">Supprimer</a>
                                </div>
                                </div>
                 </div>
            </div>
</main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>