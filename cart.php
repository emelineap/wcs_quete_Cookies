<?php

session_start();

require 'inc/head.php';

?>

<section class="cookies container-fluid">
    <h4>Hey <?php echo $_SESSION['loginname'] ?>, you
        have <?php echo isset($_COOKIE['cart_id']) ? count(unserialize($_COOKIE['cart_id'])) : "0" ?> item(s) in your
        shopping cart!</h4>
    <div class="row">
        <ul>
            <?php
            if (isset($_COOKIE['cart_id'])) {
                foreach (unserialize($_COOKIE['cart_id']) as $item) { ?>
                    <li class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?php echo $item ?>.jpg" alt="cookie-cart"
                                 class="img-thumbnail">
                            <p>Cookie n°<?php echo $item; ?></p>
                        </figure>
                    </li>
                <?php }
            } else {
                echo "<p class='empty-cart'>Your shopping cart is empty :(</p>";
                echo "<p class='empty-cart'><img src=\"https://i.redd.it/m0iprbmuv3yy.gif\" alt=\"shopping cart empty\"></p>";
            }
            ?>

        </ul>
    </div>
</section>

<?php

require 'inc/foot.php';

?>
