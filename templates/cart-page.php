<?php
/**
 * Template Name: Cart page
 *
 * @package Rider404
 * @author  Jérémy Levron <jeremylevron@19h47.fr> (https://19h47.fr)
 */

use Timber\{ Timber };

$context = Timber::context();

$context['post'] = Timber::get_post();

$context['scroll_smooth'] = 'false';

$templates = array( 'pages/cart-page.html.twig' );

Timber::render( $templates, $context );
