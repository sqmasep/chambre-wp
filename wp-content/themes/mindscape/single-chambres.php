<?php
/**
 * The template for displaying all single posts of type "chambres"
 * @package WordPress
 *
 */

get_header(); ?>

<main id="main" class="site-main">
    <!-- i hate php -->
    <div class="container mx-auto py-24">
        <div class="grid grid-cols-2 *:bg-blue-100 *:rounded-xl text-blue-900 *:p-12 gap-2">
        <?php
        while (have_posts()) : the_post();
            the_title('<div><h1 class="">', '</h1></div>');
            
            echo "<div><h2>Description</h2>";
                the_content("<div></div>");
            echo "</div>";

            echo '<div class="rounded-md flex flex-col gap-3 items-center text-center"><span class="text-6xl">' . (get_field('nombre_de_lits') ?? 0) . '</span><span class="text-3xl">lits disponibles</span></div>';
            echo '<div class="text-xl font-bold flex flex-col gap-3 items-center text-center"><span class="text-3xl">À partir de</span><span class="text-6xl">' . get_field('prix') . '€</span></div>';

            echo '<div class="rounded-md flex flex-col gap-3 items-center text-center"><span class="text-3xl">Type de lits</span><div class="flex justify-center gap-2 text-2xl font-bold *:relative *:px-4 *:py-2 *:rounded-md *:border *:border-dashed *:border-blue-900 *:!bg-blue-400">' . get_the_term_list(get_the_ID(), 'type_de_lits', '', '') . '</div></div>';
            echo '<div class="rounded-md flex flex-col gap-3 items-center text-center"><span class="text-3xl">Gamme de tarif</span><div class="flex justify-center gap-2 text-2xl font-bold *:relative *:px-4 *:py-2 *:rounded-md *:border *:border-dashed *:border-blue-900 *:!bg-blue-400">' . get_the_term_list(get_the_ID(), 'gamme_de_tarif', '', '') . '</div></div>';
        endwhile;
        ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
