<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier</title>
    <link rel="stylesheet" href="reventout.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo"><h1>REVENDSTOUT.CI</h1>
        <p class="slogan"> Tu veux plus?? Il y a quelqu'un qui veut!</p></div>
        <ul class=" menu">
            <li> <a href="revendtout.html" class=" active"> Accueil</a></li>
            <li> <a href="#"> Nouveautés</a></li>
            <li> <a href="#"> Solde</a></li>
            <!-- Mon compte-->
            <li> <a href="#" class="fa fa-user" aria-hidden="true"></a></li>
        </ul>
      </nav>

    <section id="cart">
        <h2>Produits dans votre panier</h2>
        <div class="cart-item">
            <img src="img/bike.jpg" alt="Produit">
            <p>Nom du produit</p>
            <p>Prix : 50€</p>
            <input type="number" value="1">
            <button>Supprimer</button>
        </div>
        <!-- Répéter cette section pour chaque produit ajouté au panier -->

        <div class="total">
            <h3>Total : 150€</h3>
            <a href="paiement.html" class="btn">Passer à la caisse</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 - Mon E-commerce</p>
    </footer>
</body>
</html>
