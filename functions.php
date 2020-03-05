<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'pop-up-banner' );
//set_post_thumbnail_size( 350 , 270 , true ); // Normal post thumbnails
//add_image_size( 'single-post-thumbnail', 250, 250 ); // Permalink thumbnail size
function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a style="display:block " class="read-more"href="%1$s"><button class="btn-suite"  >%2$s</button></a>',
            get_permalink( get_the_ID() ),
            __( 'Lire la suite', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );




?>