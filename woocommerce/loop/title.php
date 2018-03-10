<?php

function woocommerce_template_loop_product_title() {
    echo '<h3 class="woocommerce-loop-product__title">' . get_the_title() . '</h3>';
}

?>