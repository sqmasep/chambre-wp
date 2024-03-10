<?php
/**
 * The template for displaying archive pages for "chambres"
 *
 * @package WordPress
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="grid grid-cols-3 container mx-auto my-8 gap-2">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
        ?>
        <div class="p-4 bg-blue-100 text-blue-900 rounded-md hover:scale-105 transition-all hover:z-50">
            <?php
                the_title('<h2 class=""><a class="!no-underline" href="' . esc_url(get_permalink()) . '">', '</a></h2>');
                the_excerpt();
            ?>

            <a href="<?php echo esc_url(get_permalink()); ?>" class="px-4 py-2 rounded-md !bg-blue-500 font-bold inline-block hover:scale-105 transition-all active:scale-100 mt-4 text-white">Voir la chambre</a>
        </div>
        <?php
        endwhile;

        the_posts_navigation();

    else:
        echo 'No posts found';
    endif;
    ?>
    </div>
</main>

<?php get_footer(); ?>
