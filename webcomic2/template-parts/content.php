<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webcomic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->  

<div class="container-fluid site" class = "viewport">
	<div class="row-fluid">
		<button type="button" onclick="openNav()" id="backward" class="btn btn-default back"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></button>
			<div class="row-fluid" />
				<div class='strip scrollmenu' > 
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'webcomic' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) ); 

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'webcomic' ),
						'after'  => '</div>',
					) );
				?>
				</div><!-- strip scroll --> 
				</div> <!-- strip scroll --> 
				<button type="button" id = "for" class="btn btn-default forward"><i class="fa fa-arrow-right fa-5x" aria-hidden="true"></i></button>
   
		</div>
	</div>

</article><!-- #post-## -->
