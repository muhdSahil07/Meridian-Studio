<?php get_header(); ?>

<main class="site-main" style="padding: 60px 20px; max-width: 800px; margin: 0 auto;">
    <h1 style="font-family: var(--font-display); font-size: 42px; color: var(--color-ink); margin-bottom: 40px;">Journal</h1>

    <div class="blog-posts-list" style="display: flex; flex-direction: column; gap: 40px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <article style="border-bottom: 1px solid var(--color-stone); padding-bottom: 30px;">
                <p style="font-family: var(--font-mono); font-size: 13px; color: var(--color-clay);"><?php echo get_the_date(); ?></p>
                <h2 style="font-family: var(--font-display); font-size: 28px; margin: 10px 0;">
                    <a href="<?php the_permalink(); ?>" style="color: var(--color-ink); text-decoration: none;"><?php the_title(); ?></a>
                </h2>
                <div style="font-family: var(--font-body); color: var(--color-stone); line-height: 1.6; margin-bottom: 15px;">
                    <?php the_excerpt(); ?> </div>
                <a href="<?php the_permalink(); ?>" style="font-family: var(--font-mono); font-size: 14px; color: var(--color-clay); text-decoration: none; font-weight: bold;">Read More →</a>
            </article>

        <?php endwhile; else : ?>
            <p>No posts found in our Journal.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>