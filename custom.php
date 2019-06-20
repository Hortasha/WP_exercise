<?php
/* Template Name: Custom */

get_header();

?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
//Show Page content

				if ( have_posts() ) : the_post();

//Display content with the help of twentynineteen template
					get_template_part( 'template-parts/content/content', 'page' );
				endif;

//Show Posts by category 'page'

				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'category_name' => 'page',
					'posts_per_page' => 1,
				);
				$arr_posts = new WP_Query( $args );

				if ( $arr_posts->have_posts() ) :

					while ( $arr_posts->have_posts() ) :
						$arr_posts->the_post();
			
//Display content with the help of twentynineteen template
						get_template_part( 'template-parts/content/content', 'post' );
						
						
//Show comment submission and submitted comments
						if ( comments_open() ) {
							
//Using wp_new_comment sanitizes and validates comment data before calling the wp_insert_comment()

							if ( post_password_required() ) {
								return;
							}
							?>
							<article id="comments" class="entry">
								<form name="form" action="" method="post" class="entry-content">
									<label for="user">Username:</label><br>
									<input type="text" name="user" id="user" placeholder="Name"><br>
									<label for="comment">Comment:</label><br>
									<input type="text" name="comment" id="comment" placeholder="Comment"><br>
									<input type="submit" name="submit">
								</form>
							</article>
							
							<?php
							
//Submit comments from form data

								if( isset($_POST['submit']) ) {
									$commentData = array(
										'comment_post_ID'      => $post->ID,
										'comment_author'       => $_POST['user'],
										'comment_author_email' => '',
										'comment_author_url'   => '',
										'comment_content'      => $_POST['comment'],
										'comment_type'         => '',
										'comment_parent'       => 0,
										'user_id'              => $current_user->ID,
									);
									
									wp_new_comment( $commentData );
								}
								
							?>
			
							<?php
//Display only approved comments

							$comments = get_comments( array( 'post_id' => get_the_ID(), 'status' => 'approve' ) );
							echo '<article id="comments" class="entry"><div class="entry-content"><br /><header class="entry-header"><h1 class="entry-title">Comments:</h1></header>';
							foreach ( $comments as $comment ) :
								echo '<b>' . $comment->comment_author . '</b><br />' . $comment->comment_content . '<br /><br />';
							endforeach;
							echo '</div></article>';
						}
					endwhile;

//Removing elements from page
					wp_pagenavi();
				endif;
			?>

		</main>
	</section>
<?php get_footer(); ?>