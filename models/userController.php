<?php 

    

    class Admin{
        public $nom;
        public $prenom;
        public $motdepasse;
        public $email;
        public $image;
    }

    class AdminRepository{
        public DatabaseConnection $connection;

        public function getAdmin():Admin{
            
            $statement = $this->connection->getConnection()->query(
                "SELECT * FROM admin"
            );
            $row = $statement->fetch();
            $admin = new Admin();
            $admin->nom = $row['nomAdmin'];
            $admin->prenom = $row['prenomAdmin'];
            $admin->motdepasse = $row['motdepasseAdmin'];
            $admin->email = $row['emailAdmin'];
            $admin->image = $row['imageAdmin'];
            return $admin;
    }
    
    public function changePassword(){
        if(isset($_POST['newPassword']) && isset($_POST['confirmedPassword']) && isset($_POST['oldPassword'])){
            if($_POST['newPassword'] === $_POST['confirmedPassword']){
                $statement = $this->connection->getConnection()->prepare(
                    "UPDATE admin SET motdepasseAdmin = :newPassword "
                );
                $statement->bindParam(':newPassword', $_POST['newPassword']);
                $statement->execute();
                header('location: index.php');
            }
            
            else{
                echo "Les mots de passe ne correspondent pas";
            }
        }
    }

    public function login():bool{
        if(isset($_POST['email']) && isset($_POST['password'])){
            $user = $this->getAdmin();
            $email = $_POST['email'];
            $password = $_POST['password'];
            $admin = $this->getAdmin();
            if($email === $admin->email && $password === $admin->motdepasse){
                $_SESSION['image'] = $admin->image;
                return true;
            }
            else{
                return false;
            }
        }
        return false;
    }

    public function logout(){
        session_destroy();
        header('location: ../index.php');
    }

    public function changeInfo(){
        if (isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $statement = $this->connection->getConnection()->prepare(
                "UPDATE admin SET nomAdmin = :nom, prenomAdmin = :prenom, emailAdmin = :email"
            );
            $statement->bindParam(':nom', $nom);
            $statement->bindParam(':prenom', $prenom);
            $statement->bindParam(':email', $email);
            $statement->execute();
        
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                // Extract the original file extension
                $originalFileName = $_FILES['image']['name'];
                $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        
                // Generate a dynamic name for the image
                $customImageName = $email . '_profile.' . $fileExtension; // This will generate a name like 'user@example.com_profile.jpg'
                $uploadPath = '../../assets/img/admin/' . $customImageName;
        
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
                    $image = $uploadPath;
                    $statement = $this->connection->getConnection()->prepare(
                        "UPDATE admin SET imageAdmin = :image"
                    );
                    $statement->bindParam(':image', $image);
                    $statement->execute();
                    $_SESSION['image'] = $image;	
                } else {
                    // Handle the error if the image upload fails
                    echo "Failed to upload the image.";
                }
            }
            header('location: index.php');
        }
        
    }
}

