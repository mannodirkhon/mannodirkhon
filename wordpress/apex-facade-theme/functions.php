<?php
/**
 * Apex Facade Theme functions
 */

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'apexfacade')
    ]);
    load_theme_textdomain('apexfacade', get_template_directory() . '/languages');
});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('apexfacade-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('apexfacade-swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
    wp_enqueue_style('apexfacade-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    wp_enqueue_style('apexfacade-style', get_stylesheet_uri(), [], '1.0');
    wp_enqueue_style('apexfacade-main', get_template_directory_uri() . '/assets/css/main.css', ['apexfacade-style'], '1.0');

    wp_enqueue_script('apexfacade-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], null, true);
    wp_enqueue_script('apexfacade-swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], null, true);
    wp_enqueue_script('apexfacade-aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', [], null, true);
    wp_enqueue_script('apexfacade-main', get_template_directory_uri() . '/assets/js/main.js', ['apexfacade-swiper', 'apexfacade-aos'], '1.0', true);
    wp_enqueue_script('apexfacade-project-filter', get_template_directory_uri() . '/assets/js/project-filter.js', ['jquery'], '1.0', true);
    wp_localize_script('apexfacade-project-filter', 'apexfacade_ajax', [
        'url' => admin_url('admin-ajax.php')
    ]);
});

// Custom Post Type: Projects
add_action('init', function() {
    register_post_type('project', [
        'labels' => [
            'name' => __('Projects', 'apexfacade'),
            'singular_name' => __('Project', 'apexfacade')
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'editor', 'thumbnail']
    ]);

    register_taxonomy('project_type', 'project', [
        'labels' => [
            'name' => __('Project Types', 'apexfacade')
        ],
        'public' => true,
        'rewrite' => ['slug' => 'project-type'],
        'hierarchical' => true,
    ]);
});

// AJAX filter handler
add_action('wp_ajax_filter_projects', 'apexfacade_filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'apexfacade_filter_projects');
function apexfacade_filter_projects() {
    $type = sanitize_text_field($_POST['type'] ?? '');
    $args = [
        'post_type' => 'project',
        'posts_per_page' => -1,
    ];
    if ($type) {
        $args['tax_query'] = [[
            'taxonomy' => 'project_type',
            'field'    => 'slug',
            'terms'    => $type,
        ]];
    }
    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) {
        echo '<div class="row g-4">';
        while ($query->have_posts()) {
            $query->the_post();
            echo '<div class="col-md-4">';
            echo '<div class="card h-100">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium', ['class' => 'card-img-top']);
            }
            echo '<div class="card-body"><h5 class="card-title">' . get_the_title() . '</h5>';
            echo '<p class="card-text">' . get_the_excerpt() . '</p></div>';
            echo '</div></div>';
        }
        echo '</div>';
    } else {
        _e('No projects found', 'apexfacade');
    }
    wp_reset_postdata();
    wp_send_json_success(ob_get_clean());
}
