<article id="post-<?php the_ID(); ?>" <?php post_class('card h-100'); ?> data-aos="fade-up">
    <?php if (has_post_thumbnail()) { the_post_thumbnail('medium', ['class' => 'card-img-top']); } ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <div class="card-text"><?php the_excerpt(); ?></div>
    </div>
    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
</article>
