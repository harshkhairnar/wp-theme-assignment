<?php
/**
 * Template Name: Homepage Template
 *  * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rtCamp
 */

get_header();
global $post;
?>

	<div id="primary" class="content-area">
            <main id="main" class="site-main">
            <?php
            $slider_posts = get_posts(
                array(
                    'posts_per_page' => -1,
                    'category_name'    => 'slider'
                )
            );

            if( isset($slider_posts)) { ?>
                <div class="slider-wrapper" >
                    <div class="slider cycle-slideshow"  
        data-cycle-timeout="2000"
        data-cycle-slides=".slide"><?php
                    foreach ( $slider_posts as $post ) { 
                        setup_postdata( $post ); ?>
                        <div class="slide">
                            <?php 
                             the_post_thumbnail();
                            ?>
                            <div class="slide-desc">
                                <div class="slider-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="slider-content">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div><?php 
                    } ?>
                    </div>
                </div><?php
            }
            wp_reset_postdata();
            
            
            // The Query
            $args = array(
                    'post_type' => 'page',
                    'post_parent' => $post->ID
            );
            $child_pages = new WP_Query( $args );

            // The Loop
            if ( $child_pages->have_posts() ) {
                    echo '<div class="home-content clearfix"><div class="child-container clearfix">';
                        echo '<div class="child-left">';
                            echo '<ul>';
                            while ( $child_pages->have_posts() ) {
                                $child_pages->the_post();
                                echo '<li class="parent_click" data-id="'. get_the_ID().'">' . get_the_title(). '</li>';
                                $child_ids[] = get_the_ID();
                            }
                            echo '</ul>';
                        echo '</div>';
                        
                        foreach($child_ids as $id) {
                            
                            echo '<div class="child-right" id="parent-'.$id.'">';
                                $mypages = get_pages( array( 
                                    'child_of' => $id 
                                    ) 
                                );

                                foreach( $mypages as $page ) {		
                                    $content = $page->post_content;
                                    echo '<div class="grand-child">';
                                        echo '<div class="img">';
                                        echo get_the_post_thumbnail( $page->ID );
                                        echo '</div>';
                                        echo '<div class="title">';
                                        echo $page->post_title;
                                        echo '</div>';
                                        echo '<div class="desc">';
                                        echo $page->post_content;
                                        echo '</div>';
                                    echo '</div>';
                                }
                            echo '</div>';
                        }
                    echo '</div></div>';
                    /* Restore original Post Data */
                    wp_reset_postdata();
            } else {
                    // no posts found
            }
?>
            </main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
