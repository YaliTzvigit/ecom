

<!-- Profil de l'utilisateur --> 


<?php
session_start();
include 'connex.php';  // Inclure la base de données.

// Vérification de l'authentification

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Récupération des informations de l'utilisateur connecté

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Mise à jour des informations de l'utilisateur

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_profile'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Mettre à jour les informations dans la base de données
    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $email, $user_id);
    if ($stmt->execute()) {
        $success = "Profil mis à jour avec succès !";
    } else {
        $error = "Erreur lors de la mise à jour.";
    }
}

// Récupérer l'historique des commandes de l'utilisateur

$sql_orders = "SELECT * FROM orders WHERE user_id = ?";
$stmt_orders = $conn->prepare($sql_orders);
$stmt_orders->bind_param("i", $user_id);
$stmt_orders->execute();
$orders_result = $stmt_orders->get_result();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
</head>
<body>
    <h1>Mon Profil</h1>

    <?php if (isset($success)) echo "<p style='color: green;'>$success</p>"; ?>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>

    <!-- Affichage des informations de l'utilisateur -->

    <h2>Informations personnelles</h2>

    <form action="profil.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required>

        <button type="submit" name="update_profile">Mettre à jour</button>
    </form>

    <!-- Historique des commandes -->

    <h2>Historique des commandes</h2>
    <table border="1">
        <tr>
            <th>ID Commande</th>
            <th>Date</th>
            <th>Total</th>
        </tr>
        <?php while ($order = $orders_result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['order_date']; ?></td>
                <td><?php echo $order['total_price']; ?> €</td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
