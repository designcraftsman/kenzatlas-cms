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
                <img src="../assets\img\logo\svg_white.svg" width="200" >
                <form   class="bg-white p-5 rounded-3 mt-3" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><i class="fa-solid fa-envelope"></i> Nom d'utilisateur</label>
                        <?php
                            if(isset($_SESSION['attempts'])<=5 && $_SESSION['attempts'] >=1){
                        ?>
                            <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                        <?php
                            }else{
                        ?>
                                <input type="text" class="form-control" name="email" aria-describedby="emailHelp" disabled>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><i class="fa-solid fa-lock"></i> Mot de passe</label>
                        <?php
                            if(isset($_SESSION['attempts'])<=5 && $_SESSION['attempts'] >=1){
                        ?>
                            <input type="password" class="form-control" name="password" required>
                        <?php
                            }else{
                        ?>
                                <input type="password" class="form-control" name="password" disabled>
                        <?php
                            }
                        ?>
                    </div>
                    <?php if(isset($login) && !$login && $_SESSION['attempts'] <=4 && $_SESSION['attempts'] >=1 ){ 
                     echo('<p class="mb-3 text-danger"><i class="fa-solid fa-circle-exclamation"></i> Identifiant incorrecte! '.$_SESSION['attempts'] .' tentative(s) restante</p>');
                     } ?>
                    <?php if(isset($loginError)){ ?>
                    <div class="mb-3 text-danger"><i class="fa-solid fa-circle-exclamation"></i> <?php echo($loginError) ?> </div>
                    <?php } ?>
                    <button type="submit" id="login" class="btn btn-dark  w-100 fw-bold">Se connecter</button>
                </form>
            
            </div>
        </div>

    </body>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/login.js"></script>
    </html>