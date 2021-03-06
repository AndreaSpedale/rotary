<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Rotary
 * @since Rotary 1.0
 * sidebar used on blog and interior pages
 */
?>
	<aside id="secondary" role="complementary">
		<ul>
			<?php 
			if(current_user_can('edit_page')){ 
				$currentPostType = get_post_type();
				?>
		 		<li class="newpost">
		            <ul >
					    <li id="new-post-button">
	                	<?php if ( isset( $_REQUEST['committeeid'])) { ?>               		
	                		<a class="rotarybutton-largewhite" href="<?php echo admin_url(); ?>post-new.php?committeeid=<?php echo $_REQUEST['committeeid']?>" target="_blank"><?php _e( 'Committee Update', 'Rotary'); ?></a> 
	                	<?php } elseif ( isset( $_REQUEST['projectid'] )) { ?>               		
	                		<a class="rotarybutton-largewhite" href="<?php echo admin_url(); ?>post-new.php?projectid=<?php echo $_REQUEST['projectid']?>" target="_blank"><?php _e( 'Project Update', 'Rotary'); ?></a> 	             		
						<?php } else { ?>
							<a class="rotarybutton-largewhite" href="<?php echo admin_url(); ?>post-new.php"><?php _e( 'New Post', 'Rotary'); ?></a>     
						<?php } ?>
		                 </li>
		                </ul>
		            </li>
			<?php }
			if(current_user_can('manage_options')){ ?>
			      <a class="widgetedit" href="<?php echo admin_url(); ?>widgets.php"><?php _e( 'Edit Widgets', 'Rotary'); ?></a>
			  <?php  }
			if ( is_active_sidebar( 'secondary-widget-area' ) ) : 
				if ( ! dynamic_sidebar( 'secondary-widget-area' ) ) : ?>
					<li>
						<h3><?php _e( 'Posts Sidebar', 'Rotary' ); ?></h3>
						<ul>
							<li>
								<?php if(current_user_can('manage_options')){ ?>
									<a  href="<?php echo admin_url(); ?>widgets.php"><?php _e( 'Edit Widgets', 'Rotary'); ?></a>
								<?php } else { ?>
									<p><?php _e( 'Add widgets here'); ?></p>
								<?php }?>
							</li>
						</ul>
					</li>
				<?php endif; // end primary widget area 
				; 
			endif;
			?>
		</ul>
	</aside>
	
	