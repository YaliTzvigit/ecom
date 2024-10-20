

<!-- login utilisateur --> 


<?php

    include 'connex.php'; 

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $password = $_POST['password'];


        // rechercher l'utilisateur par email > 

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Vérification du mot de passe

            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header("Location: profil.php");  // Redirection vers le profil utilisateur

            } else {
                echo "Mot de passe incorrect";
            }
        } else {
            echo "Aucun utilisateur trouvé avec cet email";
        }
    
        $stmt->close();
        $conn->close();
}   

?>