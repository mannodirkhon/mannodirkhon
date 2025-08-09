<?php get_header(); ?>
<main id="front-page">
    <section class="py-5 text-center" data-aos="fade-up">
        <h1 class="display-5 fw-bold"><?php _e('Reliable facade solutions from the top.', 'apexfacade'); ?></h1>
        <p class="lead"><?php _e('Engineering, installation and maintenance.', 'apexfacade'); ?></p>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path('contacts') ) ); ?>" class="btn btn-primary btn-cta"><?php _e('Request a Quote', 'apexfacade'); ?></a>
    </section>

    <section id="services" class="py-5" data-aos="fade-up">
        <h2 class="mb-4 text-center"><?php _e('Services', 'apexfacade'); ?></h2>
        <div class="row g-4 text-center">
            <div class="col-md-4"><div class="card p-3 h-100"><h5><?php _e('Facade Cladding', 'apexfacade'); ?></h5></div></div>
            <div class="col-md-4"><div class="card p-3 h-100"><h5><?php _e('Maintenance & Repair', 'apexfacade'); ?></h5></div></div>
            <div class="col-md-4"><div class="card p-3 h-100"><h5><?php _e('Thermal Insulation', 'apexfacade'); ?></h5></div></div>
            <div class="col-md-4"><div class="card p-3 h-100"><h5><?php _e('Cleaning', 'apexfacade'); ?></h5></div></div>
            <div class="col-md-4"><div class="card p-3 h-100"><h5><?php _e('Consulting', 'apexfacade'); ?></h5></div></div>
        </div>
    </section>

    <section id="projects" class="py-5" data-aos="fade-up">
        <h2 class="mb-4 text-center"><?php _e('Projects', 'apexfacade'); ?></h2>
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
            $query = new WP_Query(['post_type' => 'project', 'posts_per_page' => 6]);
            if ($query->have_posts()) {
                echo '<div class="row g-4">';
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="col-md-4"><div class="card h-100">';
                    if (has_post_thumbnail()) { the_post_thumbnail('medium', ['class' => 'card-img-top']); }
                    echo '<div class="card-body"><h5 class="card-title">' . get_the_title() . '</h5></div></div></div>';
                }
                echo '</div>';
                wp_reset_postdata();
            } else {
                _e('No projects found', 'apexfacade');
            }
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
