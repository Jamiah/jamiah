<?php
function register_my_menu() {
  register_nav_menu('nav',__( 'nav' ));
}
add_action( 'init', 'register_my_menu' );
?>