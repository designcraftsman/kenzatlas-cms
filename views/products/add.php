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
        <main class="col-lg-9 col-12 m-auto   mt-5 ">
        <form class="p-3 " method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col">
                    <label for="lieu" class="mb-3">Nom du produit</label>
                    <input type="text" name="nomProduit" class="form-control" >
                </div>
                <div class="col">
                    <label for="sport" class="mb-3">Catégorie</label>
                <select class="form-select m-0" name="categorieProduit" aria-label="sport">
                    <option selected value="cheveux">cheveux</option>
                    <option value="gommage">gommage</option>
                    <option value="huile">huile</option>
                    <option value="savon">savon</option>

                </select>  
                </div>
                <div class="col">
                <label for="sport" class="mb-3">Pack promo</label>
                <select class="form-select m-0" name="etatProduit" aria-label="sport">
                    <option selected value="unique">Non</option>
                    <option value="pack promo">Oui</option>
                </select> 
                </div>
                
            </div>
            <div class="row mb-3">
            <div class="col mb-3">
                    <label for="amount" class="mb-3">Premiére image</label>
                    <input type="file" name="imageProduit" class="form-control" aria-label="Dirham amount">
            </div>
            <div class="col mb-3">
                <label for="amount" class="mb-3">Deuxiéme image (optionnel)</label>
                 <input type="file" name="imageProduit2" class="form-control" aria-label="Dirham amount">
            </div>
            </div>
            <div class="col mb-3">
                <label for="amount" class="mb-3">Sous titre du produit</label>
                 <input type="text" name="sousTitreProduit" class="form-control" aria-label="Dirham amount">
            </div>
            <div class="col mb-3">
                <label for="amount" class="mb-3">Prix</label>
                 <input type="text" name="prixProduit" class="form-control" aria-label="Dirham amount">
            </div>
            <div class="col mb-3">
                <label for="amount" class="mb-3">Ingrédients</label>
                 <input type="text" name="ingredientsProduit" class="form-control" aria-label="Dirham amount">
            </div>
            <div class="col mb-3">
                <label for="description" class="mb-3">Description</label>
                 <textarea name="descriptionProduit" class="w-100" rows="5" ></textarea>
            </div>
        
            <button type="submit" class=" btn btn-primary  text-white fw-bold">Ajouter un nouveau produit</button>
         </form>
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>