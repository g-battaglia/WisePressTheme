<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

if (is_active_sidebar('sidebar-3')) : ?>

    <?php dynamic_sidebar('sidebar-3'); ?>

<?php endif; ?>