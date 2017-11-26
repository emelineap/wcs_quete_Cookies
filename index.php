<?php

// On initialise la session
session_start();

// Si un username a été rempli, on le stocke dans la variable $_SESSION
// Sinon, on renvoie vers la page de login
if (isset($_POST['loginname'])) {
    $_SESSION['loginname'] = $_POST['loginname'];
} elseif (empty($_SESSION)) {
    header('Location: login.php');
}

// Quand le user clique sur "add to cart", on récupère l'id du produit et on le stocke dans $cart
// On renvoie vers la page index.php sans paramètres en url pour que le produit ne soit pas ajouté plusieurs fois si on recharge la page
if (isset($_GET['add_to_cart'])) {
    $cart = isset($_COOKIE['cart_id']) ? unserialize($_COOKIE['cart_id']) : array();
    array_push($cart, $_GET['add_to_cart']);
    setcookie('cart_id', serialize($cart));
    header('Location: index.php');
}

require 'inc/head.php';

?>
<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny!</p>
                    <a href="?add_to_cart=46" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette!</p>
                    <a href="?add_to_cart=36" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette!</p>
                    <a href="?add_to_cart=58" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny!</p>
                    <a href="?add_to_cart=32" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
