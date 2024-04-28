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
            <div class=" fs-5 row m-auto mb-3">
                <div class="fw-bold text-decoration-underline col-4">Nom: </div>
                <div class="col-7">Saad</div>
            </div>
            <div class="fs-5 row m-auto mb-3">
                <div class=" text-decoration-underline fw-bold col-4">Prenom: </div>
                <div class="col-7">Smayka</div>
            </div>
            <div class="fs-5 row m-auto mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Date de naissance: </div>
                <div class="col-7"> 01/07/1956</div>
            </div> 
            <div class="fs-5 row m-auto mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Participant au tournois: </div>
                <div class="col-7">
                    <ul class="list-unstyled ">
                        <li>Foot </li>
                        <li>Tennis</li>
                    </ul>
                </div>
            </div> 
            <div class="fs-5 row m-auto mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Participant au événements: </div>
                <div class="col-7">
                    <ul class="list-unstyled ">
                        <li>Yoga class </li>
                    </ul>
                </div>
            </div> 
            <div class="fs-5 row m-auto mb-3">
                <div class=" col-4 text-decoration-underline fw-bold">Transactions effectués: </div>
                <div class="col-7">
                    <ul class="list-unstyled ">
                        <li>3000dh (01/02/2023)</li>
                        <li>2700dh (04/03/2023)</li>
                        <li>2700dh (02/04/2023)</li>
                    </ul>    
                </div>
            </div>   
        </main>
        </div>
 <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>