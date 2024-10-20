<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement</title>
    <link rel="stylesheet" href="reventout.css"> <!-- Ton fichier CSS -->
</head>
<body>
    <header>
        <h1>Paiement</h1>
        <nav>
            <!-- Navigation -->
        </nav>
    </header>

    <section id="checkout">
        <h2>Informations de Livraison</h2>
        <form action="process-payment.php" method="POST">
            <label for="name">Nom complet :</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Adresse :</label>
            <input type="text" id="address" name="address" required>

            <label for="city">Ville :</label>
            <input type="text" id="city" name="city" required>

            <label for="payment">Méthode de paiement :</label>
            <select id="payment" name="payment" required>
                <option value="credit_card">Carte de crédit</option>
                <option value="paypal">PayPal</option>
            </select>

            <h3>Total : 150€</h3>
            <button type="submit" class="btn">Finaliser la commande</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 - Mon E-commerce</p>
    </footer>
</body>
</html>
