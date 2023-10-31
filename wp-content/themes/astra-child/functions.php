<?php
function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');


function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.2.2', true);
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
    wp_enqueue_style('customTheme', get_stylesheet_directory_uri() . '/css/custom_theme.css');
    wp_enqueue_script('customTheme', get_stylesheet_directory_uri() . '/js/custom_theme.js');
    wp_enqueue_script('ajax-load-more', get_stylesheet_directory_uri() . '/js/ajax-load-more.js');
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

// Chargement des articles AJAX
function localize_ajaxurl() {
    $post_counts = wp_count_posts();
    $total_published_posts = $post_counts->publish;
    wp_localize_script('ajax-load-more', 'ajax_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'total_posts' => $total_published_posts
    ));
}

add_action('wp_enqueue_scripts', 'localize_ajaxurl');


function load_more_posts() {
    $page = $_POST['page'];
    $offset = ($page - 1) * 3;

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'offset' => $offset,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) { ?>
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
    <?php
    } else {
        // On n'affiche rien
    }

    die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');