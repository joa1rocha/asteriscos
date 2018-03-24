<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Asteriscos
 * @since 1.0
 * @version 1.0
 */


$currentPage = $_SERVER['REQUEST_URI'];
$isActive = false;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title>***Asteriscos</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
            <div id="intro">
                    <img src="/assets/images/Prancheta 7-8.png" width="708" height="271" alt=""/>
                <h1>LEIRIA</h1>
                <p>Associação de intervenção cívica, cultural e de promoção do conhecimento em geral.</p>
                <ul class="actions">
                    <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
                </ul>
            </div>

            <!-- Header -->
            <header id="header"><a href="/asteriscos" class="logo">***ASTERISCOS</a></header>

            <!-- Nav -->
            <nav id="nav">
                <ul class="links">
                    <li class="tab"><a href="/asteriscos/">Apresentação</a></li>
                    <li class="tab"><a href="/asteriscos/loja/">Loja</a></li>
                    <li class="tab"><a href="/asteriscos/carrinho/">Carrinho</a></li>
                </ul>
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook fa-external-link"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li></li>
                </ul>
            </nav>
