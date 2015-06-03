<?php get_header(); ?>

<?php
global $mokaine, $more;
$blog_style = $mokaine['blog-style'];
?>

<?php if ( $blog_style == 'blog-masonry' ) : // Start Masonry style ?>

  <?php
  // Masonry settings
  $blog_pagination_mode = $mokaine['blog-pagination-mode'];
  $big_post_option = $mokaine['enable-first-post-big'];

  // Posts per page
  $blog_pagination = get_option( 'posts_per_page' );

  // Paged
  $page = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  ?>

  <div class="row-content buffer clear-after">

      <div class="post-area blog-section masonry-style grid-items preload">

      <?php if ( have_posts() ) : ?>

      <?php
        // Set dynamic posts_per_page and offset values
        $latest_post = get_posts( 'numberposts=1' );
        $latest_id = $latest_post[0]->ID;

        if ( has_post_thumbnail( $latest_id ) && $big_post_option ) {
              if ( $page == 1 ) {
                  if ( $blog_pagination == 1 ) {
                      $blog_pagination_var = $blog_pagination;
                  } else {
                      $blog_pagination_var = $blog_pagination - 1;
                  }
                  $offset = 0;
              } else {
                  $blog_pagination_var = $blog_pagination;
                  if ( $blog_pagination == 1 ) {
                      $offset = ( $page - 1 );
                  } else {
                      $offset = ( ( $page - 1 ) * $blog_pagination_var ) - 1;
                  }
              }
        } else {
            $blog_pagination_var = $blog_pagination;
            $offset = 0;
        }

        $blog_args = array(
            'posts_per_page' => $blog_pagination_var,
            'paged' => $page,
            'offset' => $offset
        );

        query_posts( $blog_args );
        ?>

          <?php while ( have_posts() ) : the_post(); ?> 

              <?php $more = 0; ?>
  
              <?php get_template_part( 'listed', 'article-masonry' ); ?> 

          <?php endwhile; ?>

          <div class="shuffle-sizer three"></div>

      <?php else : ?>

          <?php get_template_part( 'content', 'none' ); ?>

      <?php endif; ?>                

      </div><!-- grid-items -->

      <?php if ( $blog_pagination_mode == 'ajax' ) { ?>

          <?php if ( get_next_posts_link() ) : ?>
          
              <span class="load-more">
              
                  <a href="<?php echo esc_url( next_posts() ); ?>" class="action" title="<?php esc_attr_e( __( 'Load more items', MOKAINE_THEME_NAME ) ); ?>" data-title="<?php esc_attr_e( __( 'Show More', MOKAINE_THEME_NAME ) ); ?>" data-wait="<?php esc_attr_e( __( 'Loading ...', MOKAINE_THEME_NAME ) ); ?>"></a>
              
              </span>
          
          <?php endif; ?>

      <?php } else { ?>

          <?php mokaine_paging_nav(); ?>

      <?php } ?>

      <?php wp_reset_query(); ?>

  </div><!-- row-content -->

<?php else : // Start List style ?>

  <?php
  $sidebar_blog_page = $mokaine['enable-sidebar-blog-page'];

  if ( $sidebar_blog_page ) {
      $post_class = 'nine';
  } else {
      $post_class = 'twelve'; 
  }
  ?>

  <div class="row">

    <div class="row-content buffer-left buffer-right buffer-bottom clear-after">

      <div class="post-area list-style clear-after">

        <div class="column <?php esc_attr_e( $post_class ) ?>">

          <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'listed', 'article' ); ?>

            <?php endwhile; ?>

            <?php mokaine_paging_nav(); ?>

          <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

          <?php endif; ?>

        </div><!-- column -->

        <?php if ( $sidebar_blog_page ) : ?>

          <?php get_sidebar(); ?>

        <?php endif; ?>

      </div><!-- post-area -->

    </div><!-- row-content -->

  </div><!-- row -->

<?php endif; ?>

<?php get_footer(); ?>