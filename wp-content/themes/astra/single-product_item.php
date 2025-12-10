<?php get_header(); ?>

<div class="product-container">

  <div class="product-header">
    <h1><?php the_title(); ?></h1>
    <div class="breadcrumbs">
      <a href="<?php echo home_url(); ?>">Αρχική</a> › 
      <?php the_terms(get_the_ID(), 'product_category', '', ' › '); ?>
    </div>
  </div>

  <div class="product-content">
    <div class="product-main">
      <?php if (has_post_thumbnail()) : ?>
        <div class="product-image">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="product-description">
        <?php the_content(); ?>
      </div>

      <h3>Τεχνικά Χαρακτηριστικά</h3>
      <ul class="tech-specs">
        <?php if (get_field('colors')) : ?><li><strong>Χρώματα:</strong> <?php the_field('colors'); ?></li><?php endif; ?>
        <?php if (get_field('dimensions')) : ?><li><strong>Διαστάσεις:</strong> <?php the_field('dimensions'); ?></li><?php endif; ?>
        <?php if (get_field('max_weight')) : ?><li><strong>Μέγιστο Βάρος:</strong> <?php the_field('max_weight'); ?> Kg</li><?php endif; ?>
        <?php if (get_field('mounting')) : ?><li><strong>Τοποθέτηση:</strong> <?php the_field('mounting'); ?></li><?php endif; ?>
      </ul>

      <?php if (have_rows('extra_specs')) : ?>
        <table class="spec-table">
          <?php while (have_rows('extra_specs')) : the_row(); ?>
            <tr>
              <td><?php the_sub_field('label'); ?></td>
              <td><?php the_sub_field('value'); ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
      <?php endif; ?>

      <?php if (get_field('pdf_file')) : ?>
        <a href="<?php the_field('pdf_file'); ?>" target="_blank" class="btn-download">Κατέβασε PDF</a>
      <?php endif; ?>

      <?php if (get_field('gallery')) : ?>
        <div class="product-gallery">
          <?php $images = get_field('gallery'); foreach ($images as $img) : ?>
            <img src="<?php echo esc_url($img['sizes']['medium']); ?>" alt="">
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>

    <aside class="product-sidebar">
      <?php get_sidebar(); ?>
    </aside>
  </div>

</div>

<?php get_footer(); ?>
