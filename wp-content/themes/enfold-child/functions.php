<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

/**

 * All shortcode functions

 */



// shortcode [csdownload]

function csdownload_func($atts) {
	$att = shortcode_atts( array(
        'size' => '',
    ), $atts);
	
    $args = array(
        'post_type' => 'dlm_download',
		'posts_per_page' => $att['size'],
		'paged' => get_query_var('paged'), 
    );
    $query = new WP_Query( $args );

//get all the filename, type, link from cat
    if ( $query->have_posts() ) :
        ob_start();?>
        <ul class='newsletter-download-list'>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <li>
                    <?php echo do_shortcode('[download id="'.get_the_id().'"]'); ?>
                </li>
            <?php endwhile; ?>
        </ul>
		<div class="pagination">
		<?php 
			echo paginate_links( array(
				'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
				'total'        => $query->max_num_pages,
				'current'      => max( 1, get_query_var( 'paged' ) ),
				'format'       => '?paged=%#%',
				'show_all'     => false,
				'type'         => 'plain',
				'end_size'     => 2,
				'mid_size'     => 1,
				'prev_next'    => true,
				'prev_text'    => sprintf( '<i></i> %1$s', __( '&lsaquo;', 'text-domain' ) ),
				'next_text'    => sprintf( '%1$s <i></i>', __( '&rsaquo;', 'text-domain' ) ),
				'add_args'     => false,
				'add_fragment' => '',
			) );
		?>
</div>
    <?php endif;
    return ob_get_clean();
	
	wp_reset_postdata();
}

add_shortcode( 'csdownload', 'csdownload_func' );