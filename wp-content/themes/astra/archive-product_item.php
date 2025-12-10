<?php
/*
Template Name: Προϊόντα Κατάλογος
*/
?>
<?php get_header(); ?>

<h1 style="text-align:center; margin-top:50px;">Λίστα Προϊόντων</h1>

<?php if (have_posts()) : ?>
    <div style="display:flex; flex-wrap:wrap; justify-content:center;">
    <?php while (have_posts()) : the_post(); ?>
        <div style="border:1px solid #ccc; padding:15px; margin:10px; width:200px;">
            <h3><?php the_title(); ?></h3>
            <?php the_post_thumbnail('medium'); ?>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; ?>
    </div>
<?php else : ?>
    <p style="text-align:center;">Δεν υπάρχουν προϊόντα ακόμα.</p>
<?php endif; ?>

<?php get_footer(); ?>
