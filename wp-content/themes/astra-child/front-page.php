<?php
/**
 * The template for Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra Child
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<!-- Section Hero -->

<div id="hero_accueil" class="section-fluid pp-80">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-5 text-center text-lg-start">
            <h1 class="mb-4 text-white">LES SPÉCIALISTES DU VIAGER<br><span class="fs-42">À L'ÉCOUTE, EFFICACE <br>ET <span class="pc-green-light">RESPONSABLE</span></span></h1>
            <div class="accordion mb-4" id="accordionHero">
                <div class="accordion-item my-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed pbg-green-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-estimation" aria-expanded="false" aria-controls="collapse-estimation">
                            Recevez votre estimation viagère offerte
                        </button>
                    </h2>
                    <div id="collapse-estimation" class="accordion-collapse collapse show" data-bs-parent="#accordionHero">
                        <div class="accordion-body">
                            <?php echo do_shortcode( '[gravityform id="1" title=false ajax=true]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <img src="http://localhost/piment/wp-content/uploads/2023/10/Frame-1.png">
        </div>
    </div>
  </div>
<?php

// Les annonces
$args = array(
    'post_type' => 'annonces',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'order_by' => 'DESC'
);

$avis_query = new WP_Query($args);

if ($avis_query->have_posts()) {
    ?>
    <div class="section-fluid pp-80" id="annonces_accueil">
        <div class="row">
            <h2 class="title-theme p-0">Nos dernières <span class="pc-green">annonces</span></h2>
            <div class="grid-container">
                <?php
                while ($avis_query->have_posts()) {
                    $avis_query->the_post();
                    ?>
                    <div class="card p-3 pbg-green border-0 grid-item">
                        <img src="<?= get_the_post_thumbnail_url() ?>" class="card-img-top">
                        <div class="card-body d-flex">
                            <div class="card_info">
                                <h3><?= the_title() ?></h3>
                                <?php
                                    $adresse = '<span class="pc-green">' . get_field('code_postal') .' '. get_field('ville') .'</span>'; 
                                ?>
                                <div class="adress">
                                    <img src="http://localhost/piment/wp-content/uploads/2023/10/Vector-3.png">
                                    <?= $adresse ?>
                                </div>
                            </div>
                            <div class="cta">
                                <a href="#" class="btn btn-primary bg-transparent">Plus d'info</a>
                            </div>
                        </div>
                    </div>
                    <?php  
                }
                wp_reset_postdata(); // Réinitialise les données de publication
                ?>
                <div class="pbg-green-dark grid-item-last rounded d-flex justify-content-center flex-column">
                    <p class="mx-5">Découvrir tous les biens en viager</p>
                    <img class="mx-5" src="http://localhost/piment/wp-content/uploads/2023/10/Vector-4.png">
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    // On affiche rien
}

// Contenu de la page
the_content();

// Les avis clients
$args = array(
    'post_type' => 'avis',
    'posts_per_page' => -1,
    'post_status' => 'publish'
);

$avis_query = new WP_Query($args);

if ($avis_query->have_posts()) {
    ?>
    <div class="section-fluid pp-80 pbg-green" id="avis_clients">
        <div class="row">
            <h2 class="title-theme">Avis <span class="pc-green">clients</span></h2>
            <div class="container-slider">
            <?php
            while ($avis_query->have_posts()) {
                $avis_query->the_post();
                ?>
                <div class="card bg-transparent pmx-15 border-2 border-color-green">
                    <div class="card-body">
                        <p class="card-text"><?php the_content(); ?></p>
                        <div class="d-flex justify-content-center align-items-center info_avis">
                            <?php
                            $thumbnailAvis = get_field('thumbnail_avis_author');
                            ?>
                            <img src="<?= $thumbnailAvis ?>" class="thumbnail_avis">
                            <div class="author_avis px-2">
                                <h3 class="pc-green m-0"><?php the_title(); ?></h3>
                                <span class="date_avis"><?= get_the_date( 'F Y'); ?></span>
                            </div>
                        </div>
                        <div class="note_avis d-flex justify-content-center align-items-center">
                            <?php
                                $note = intval(get_field('note'));
                                for ($i = 0; $i < $note; $i++) {
                                    ?>
                                    <img class="mx-1 my-2" src="http://localhost/piment/wp-content/uploads/2023/10/Vector.png">
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="surlign"></div>
                    </div>
                </div>
                <?php  
            }
            wp_reset_postdata(); // Réinitialise les données de publication
            ?>
            </div>
        </div>
    </div>
    <?php
} else {
    // On affiche rien
}
?>

<!-- Actualités -->
<?php
// La boucle WordPress pour afficher les premiers 3 articles
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
);

$query = new WP_Query($args);
if ($query->have_posts()) { ?>
    <div class="section-fluid pbg-blue pp-80" id="actualite">
        <div class="row">
            <h2 class="title-theme p-0">Nos <span class="pc-blue">actualités</span></h2>
            <div id="posts-container">
                <div class="columns-container">
                    <?php
                    $count = 0;
                    while ($query->have_posts()) {
                        $query->the_post();
                        $count++;
                        if ($count === 1) {
                            // Premier article
                            ?>
                            <div class="column1 cta_bleu">
                                <article class="bg-white p-3 mb-4">
                                    <img src="<?= get_the_post_thumbnail_url() ?>">
                                    <h3 class="pc-blue my-2"><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <span class="date_article mb-4"><?= get_the_date( 'd/m/Y'); ?></span>
                                    <a href="#" class="btn btn-primary bg-white">Lire la suite</a>
                                </article>
                            </div>
                            <?php
                        } else {
                            // Articles suivants
                            if ($count === 2) {
                                echo '<div class="column2">';
                            }
                            ?>
                            <article class="bg-white p-3 mb-4">
                                <img src="<?= get_the_post_thumbnail_url() ?>">
                                <h3 class="pc-blue my-2"><?php the_title(); ?></h3>
                                <span class="date_article mb-2"><?= get_the_date( 'd/m/Y'); ?></span>
                            </article>
                            <?php
                            if ($count === 3) {
                                echo '</div>'; // Fermez la colonne 2 après les 2 articles suivants
                            }
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <button id="load-more-button">Voir toutes nos actualités</button>
        </div>
    </div>
    <?php
} else {
    // On n'affiche rien
}
?>

<!-- FAQ -->
<div class="section-fluid pp-80" id="faq">
    <div class="row">
        <h2 class="title-theme p-0">Foire aux <span class="pc-blue">questions</span></h2>
        <div class="accordion" id="accordionPanels">
            <div class="accordion-item my-3">
                <h3 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Lorem ipsum dolor sit amet?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionPanels">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio ut libero faucibus ultrices. Sed auctor, purus a gravida suscipit, risus libero suscipit est, in lacinia massa orci non erat. Proin tristique eget justo vel euismod. Curabitur nec dapibus ligula. Nullam bibendum vestibulum nunc, in eleifend urna bibendum id. Integer sit amet magna id justo tristique tincidunt. Nunc vel mauris in libero consequat ultrices. Nulla facilisi. Integer sit amet elit quis est mattis auctor. Sed dapibus, sapien a efficitur vulputate, velit turpis sollicitudin purus, a ullamcorper mi purus eget dui.</p> 
                    </div>
                </div>
            </div>
            <div class="accordion-item my-3">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Lorem ipsum dolor?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionPanels">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio ut libero faucibus ultrices. Sed auctor, purus a gravida suscipit, risus libero suscipit est, in lacinia massa orci non erat. Proin tristique eget justo vel euismod. Curabitur nec dapibus ligula. Nullam bibendum vestibulum nunc, in eleifend urna bibendum id. Integer sit amet magna id justo tristique tincidunt. Nunc vel mauris in libero consequat ultrices. Nulla facilisi. Integer sit amet elit quis est mattis auctor. Sed dapibus, sapien a efficitur vulputate, velit turpis sollicitudin purus, a ullamcorper mi purus eget dui.</p> 
                    </div>
                </div>
            </div>
            <div class="accordion-item my-3">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    Lorem ipsum dolor sit amet?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionPanels">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio ut libero faucibus ultrices. Sed auctor, purus a gravida suscipit, risus libero suscipit est, in lacinia massa orci non erat. Proin tristique eget justo vel euismod. Curabitur nec dapibus ligula. Nullam bibendum vestibulum nunc, in eleifend urna bibendum id. Integer sit amet magna id justo tristique tincidunt. Nunc vel mauris in libero consequat ultrices. Nulla facilisi. Integer sit amet elit quis est mattis auctor. Sed dapibus, sapien a efficitur vulputate, velit turpis sollicitudin purus, a ullamcorper mi purus eget dui.</p> 
                    </div>
                </div>
            </div>
            <div class="accordion-item my-3">
                <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                    Lorem ipsum dolor sit amet?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionPanels">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac odio ut libero faucibus ultrices. Sed auctor, purus a gravida suscipit, risus libero suscipit est, in lacinia massa orci non erat. Proin tristique eget justo vel euismod. Curabitur nec dapibus ligula. Nullam bibendum vestibulum nunc, in eleifend urna bibendum id. Integer sit amet magna id justo tristique tincidunt. Nunc vel mauris in libero consequat ultrices. Nulla facilisi. Integer sit amet elit quis est mattis auctor. Sed dapibus, sapien a efficitur vulputate, velit turpis sollicitudin purus, a ullamcorper mi purus eget dui.</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>