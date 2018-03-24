<?php
/*
 * Template Name: WooCommerce
 */

get_header();

//$test = get_template_part( 'template-parts/content', 'my-account' );
//var_dump(have_posts());die;
// Sections
$intro = get_field('intro') ?: [];
$projetos = get_field('projetos') ?: [];
$orgaosSociais = get_field('orgaos_sociais') ?: [];
$rodape = get_field('rodape') ?: [];

// Data
setlocale(LC_TIME, 'pt_PT', 'pt_BR.utf-8', 'pt_PT.utf-8', 'portuguese');
$hoje = strftime('%d de %B, %Y', strtotime('today'));
?>

    <div id="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        <?php get_footer(); ?>
    </div>

<?php get_footer(); ?>
