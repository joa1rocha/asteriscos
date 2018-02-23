<?php
/*
 * Template Name: Home
 */

get_header(); ?>





<?php
// Sections
$intro = get_field('intro') ?: [];
$projetos = get_field('projetos') ?: [];
$orgaosSociais = get_field('orgaos_sociais') ?: [];
$rodape = get_field('rodape') ?: [];
?>








<div id="intro"><img src="images/Prancheta 7-8.png" width="708" height="271" alt=""/>
    <h1>LEIRIA<br>
    </h1>
    <p>Associação de intervenção cívica, cultural e de promoção do conhecimento em geral.</p>
    <ul class="actions">
        <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
    </ul>
</div>

<!-- Header -->
<header id="header"><a href="index.html" class="logo">***ASTERISCOS</a></header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        <li class="active"><a href="index.html">Apresentação</a></li>
        <li></li>
        <li></li>
    </ul>
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook fa-external-link"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li></li>
    </ul>
</nav>

<!-- Main -->
<div id="main">

    <!-- Featured Post -->
    <article class="post featured">
        <header class="major"><span class="date">16 de janeiro, 2018</span>
            <h2><?= $intro['intro']; ?></h2>
            <?= $intro['texto']; ?>
            <img src="<?= $intro['imagem']['url']; ?>"/>
        </header>
    </article>

    <h1>PROJETOS</h1>
    <!-- Posts -->
    <section class="posts">
        <?php foreach($projetos as $projeto) : ?>
            <article>
                <img src="<?= $projeto['imagem']['url']; ?>">
                <?= $projeto['descricao']; ?>
            </article>
        <?php endforeach; ?>
    </section>

    <!-- Footer -->
    <h1>Órgãos Sociais</h1>
    <?php foreach($orgaosSociais as $orgaoSocial) : ?>
        <p><strong><?= $orgaoSocial['titulo']; ?></strong> <?= $orgaoSocial['texto']; ?></p>
    <?php endforeach; ?>
    <footer>
        <div class="pagination">
            <!--<a href="#" class="previous">Prev</a>-->
        </div>
    </footer>
</div>

<!-- Footer -->
<footer id="footer">
    <section class="split contact">
        <section class="alt">
            <h3>Morada</h3>
            <p><?= $rodape['morada'];?><br>
            </p>
        </section>
        <section>
            <h3>Email</h3>
            <p><?= $rodape['email'];?><br>
        </section>
        <section>
            <h3>Social</h3>
            <ul class="icons alt">
                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li></li>
            </ul>
        </section>
    </section>
</footer>