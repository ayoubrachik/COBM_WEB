<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<?php  while ( have_posts() ) : the_post(); ?>

            <div  class="col-lg-4 " >
                <div>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>   
                  <h2><a class="blog-title" href="<?php the_permalink(); ?>" title="<?php the_title();?>" > <?php the_title(); ?> </a></h2>
                  <p class="text-muted mb-3 text-uppercase small"><span class="mr-2"><?php the_time(); ?></span> By 
                  <a href="single.html" class="by">COBM</a></p>
                  <p class="blog-excerpt" > 
                        <?php
                            ob_start();

                            the_excerpt();

                            $postOutput = preg_replace('/<img[^>]+./','', ob_get_contents());

                            ob_end_clean();

                            echo $postOutput; 
                        ?> 
                    </p>
                </div>
            </div>

<?php endwhile; ?>
<?php
get_footer();
?>

