<?php get_header(); ?>

<main class="site-main" style="padding: 60px 20px; max-width: 700px; margin: 0 auto;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article>
            <p style="font-family: var(--font-mono); font-size: 13px; color: var(--color-clay); margin-bottom: 10px;"><?php echo get_the_date(); ?></p>
            <h1 style="font-family: var(--font-display); font-size: 42px; color: var(--color-ink); line-height: 1.2; margin-bottom: 30px;"><?php the_title(); ?></h1>
            
            <div class="entry-content" style="font-family: var(--font-body); font-size: 18px; line-height: 1.8; color: var(--color-stone); display: flex; flex-direction: column; gap: 20px;">
                <?php the_content(); ?> </div>
        </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>