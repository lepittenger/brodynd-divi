<?php

function favicon4admin() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . get_bloginfo('wpurl') . '/wp-content/uploads/2014/06/favicon.png" />';
}
add_action( 'admin_head', 'favicon4admin' );