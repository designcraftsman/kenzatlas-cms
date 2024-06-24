<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubXtreme - Admin dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-primary">
    <div class="container vh-100 ">
        <div class="h-100 d-flex justify-content-center  align-items-center flex-column ">
            <img src="..\assets\img\logo\svg_white.svg" width="200" >
            <form  action="controllers/dashboard.php" class="bg-white p-5 rounded-3 mt-3" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-envelope"></i> Nom d'utilisateur</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i> Mot de passe</label>
                    <input type="password" class="form-control" id="motdepasse">
                </div>
                <button type="submit" class="btn btn-dark  w-100 fw-bold">Se connecter</button>
            </form>
           
        </div>
    </div>

</body>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</html>