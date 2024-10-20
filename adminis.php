<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="reventout.css"> <!-- Ton fichier CSS -->
</head>
<body>
    <header>
        <h1>Page d'Administration</h1>
        <nav>
            <!-- Navigation -->
        </nav>
    </header>

    <section id="admin">
        <h2>Gestion des Produits</h2>
        <form action="add-product.php" method="POST" enctype="multipart/form-data">
            <label for="product-name">Nom du produit :</label>
            <input type="text" id="product-name" name="product_name" required>

            <label for="price">Prix :</label>
            <input type="number" id="price" name="price" required>

            <label for="image">Image du produit :</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit" class="btn">Ajouter le produit</button>
        </form>

        <h3>Produits existants</h3>
        <div class="admin-products">
            <!-- Liste des produits ajoutés avec options de modification/suppression -->
        </div>
    </section>

    <footer>
        <p>&copy; 2024 - Mon E-commerce</p>
    </footer>
</body>
</html>
