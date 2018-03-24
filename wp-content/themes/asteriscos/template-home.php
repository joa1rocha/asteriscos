<?php
/*
 * Template Name: Home
 */

get_header();

// Sections
$intro = get_field('intro') ?: [];
$projetos = get_field('projetos') ?: [];
$orgaosSociais = get_field('orgaos_sociais') ?: [];
$rodape = get_field('rodape') ?: [];

// Data
setlocale(LC_TIME, 'pt_PT', 'pt_BR.utf-8', 'pt_PT.utf-8', 'portuguese');
$hoje = strftime('%d de %B, %Y', strtotime('today'));
?>

<!-- Main -->
<div id="main">

    <!-- Featured Post -->
    <article class="post featured">
        <header class="major"><span class="date"><?= $hoje; ?></span>
            <h2><?= $intro['titulo']; ?></h2>
            <?= $intro['texto']; ?>
            <img class="image main" src="<?= $intro['imagem']['url']; ?>"/>
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

<?php get_footer(); ?>