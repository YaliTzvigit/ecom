

<!-- Ficheir d'enregistrement du'tilisateur --> 


<?php
    include 'connex.php'; // Associé la base de donnée ici : 

    if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
        $user = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $cfpassword = $_POST['cfpassword'];

     //requête d'insertion :

        $req = " insert into users (name, email, password, cfpassword) values ('$user','$email','$password','$cfpassword')";
     
        header("Location: login.php");  // Redirection vers la page de connexion :
      } else {
        echo "Erreur de redirection ! ";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
   
    <!-- cdjns cloudfare link for icon --> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>
        T-form</title>
</head>
<body>

    

    <div class="headup">
        <div class="head1">
            <h2> Créer votre compte</h2>
        </div>

        <!-- formualire-->
         <form action="" class="form" id="formjs">
            <div class="form-control">
                <input type="text" id="username" name="name" placeholder="Nom d'Utilsateur">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>
                    Message d'erreur!
                </small>
            </div>
            <div class="form-control">
                <input type="text" id="email" name="email" placeholder="votremail123@gmail.com">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>
                    Message d'erreur!
                </small>
            </div>
            <div class="form-control">
                <input type="password" id="passwd" name="password" placeholder="Mot de Passe (caractère spécial.)">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>
                    Message d'erreur!
                </small>
            </div>
            <div class="form-control">
                <input type="password" id="passwdconfirm" name="cfpassword" placeholder="Re-Tapez votre mot de passe">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>
                    Message d'erreur!
                </small>
            </div>

            <button type="submit"> <div class="i fas fa-user-plus"></div> S'inscrire </button>
         </form>
    </div>
</body>

<!-- script links --> 

<script src="C:\wamp64\www\RevendTout\formuser.js"></script>

</html>