<?php

/**
 * @package WordPress
 * @subpackage Timberland
 * @since Timberland 1.1.0
 */

use Timber\Timber;

$context = Timber::context();

Timber::render('404.twig', $context);
