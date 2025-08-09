<?php get_header(); ?>
<main class="site-main">
    <h1 class="mb-4"><?php post_type_archive_title(); ?></h1>
    <div class="project-filter text-center mb-4">
        <?php
        $types = get_terms(['taxonomy' => 'project_type', 'hide_empty' => false]);
        echo '<button class="btn btn-outline-primary me-2" data-type="">' . __('All', 'apexfacade') . '</button>';
        foreach ($types as $type) {
            echo '<button class="btn btn-outline-primary me-2" data-type="' . esc_attr($type->slug) . '">' . esc_html($type->name) . '</button>';
        }
        ?>
    </div>
    <div id="projects-container">
        <?php
        if (have_posts()) {
            echo '<div class="row g-4">';
            while (have_posts()) {
                the_post();
                echo '<div class="col-md-4"><div class="card h-100">';
                if (has_post_thumbnail()) { the_post_thumbnail('medium', ['class' => 'card-img-top']); }
                echo '<div class="card-body"><h5 class="card-title">' . get_the_title() . '</h5></div></div></div>';
            }
            echo '</div>';
        } else {
            _e('No projects found', 'apexfacade');
        }
        ?>
    </div>
</main>
<?php get_footer(); ?>
