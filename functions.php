<?php

add_theme_support( 'post-thumbnails' ); 

function posttype() {
    register_post_type( 'tank',
        array(
            'labels' => array(
            'name' => __( 'tank' ),
            'singular_name' => __( 'tank' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'tank'),
        )
    );
}
add_post_type_support( 'my_post_type', 'comments' );
add_post_type_support( 'my_post_type', array(
    'author', 'excerpt',
) );
add_post_type_support( 'my_post_type', 'my_feature', array(
    'field' => 'value',
) );

add_action( 'init', 'posttype' ); 
add_theme_support( 'nav-menus' );
register_nav_menu( 'primary', __( 'top', 'theme-text-domain' ) );

function breadcrumbs( $sep = ' > ' ) {
    global $post;
    $out = '';
    $out .= '<div class="breadcrumbs">';
    $out .= '<a href="' . home_url( '/' ) . '">Главная</a>';
    $out .= '<span class="breadcrumbs-sep">' . $sep . '</span>';
    if ( is_single() ) {
        $terms = get_the_terms( $post, 'category' );
        if ( is_array( $terms ) && $terms !== array() ) {
            $out .= '<a class="breadcrumbs-item" href="' . get_term_link( $terms[0] ) . '">' . $terms[0]->name . '</a>';
            $out .= '<span class="breadcrumbs-sep">' . $sep . '</span>';
        }
    }
    if ( is_singular() ) {
        $out .= '<span class="breadcrumbs-last">' . get_the_title() . '</span>';
    }
    if ( is_search() ) {
        $out .= get_search_query();
    }
    $out .= '</div><!--.breadcrumbs-->';
    return $out;
}

?>
