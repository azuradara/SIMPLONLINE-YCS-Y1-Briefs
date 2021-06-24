<?php
$awe_blog_options = awe_blog_theme_options();
$postid1 = $awe_blog_options['postid1'];

$postid2 = $awe_blog_options['postid2'];
$postid3 = $awe_blog_options['postid3'];
$content_length = '250';
?>


<div class="multiple-posts-section section">
	<div class="container">
		<div class="row">

				<div class="col-md-6">
				<?php
				$esc1 = esc_html($postid1,'awe-blog');
				if ($esc1) {
					$args = array(
						'post_type' => 'post',
						'p'         => $esc1,

					);
				

				$post_query1 = new WP_Query($args);


				if ($post_query1->have_posts()): 
					while ($post_query1->have_posts()):
                        $post_query1->the_post(); 
						$image_src = wp_get_attachment_image_src(
							get_post_thumbnail_id(),
							'full'
						);
						if($image_src){
							$url = $image_src[0];
							}
						if (!empty($image_src)) {
							$image_style =
								"style='background-image:url(" . esc_url($url) . ")'"; ?>
							 <?php
						} else {
							$image_style = '';
						}
						?>
					<div class="example-2 card">
						<div class="wrapper" <?php echo wp_kses_post($image_style); ?>>

							<div class="data">
								<div class="content">
								<h2 class="title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
								<ul class="post-meta">
                            <li class="meta-date"><a href="<?php echo esc_url(
                                awe_blog_archive_link($post)
                            ); ?>"><time class="entry-date published" datetime="<?php echo esc_url(
												awe_blog_archive_link($post)
											); ?>"><?php echo esc_html(the_time(get_option('date_format'))); ?></time>
																							</a></li>
																							<li class="meta-comment"><a
																								href="<?php echo esc_url(
																									get_comments_link(
																										get_the_ID()
																									)
																								); ?>"><?php printf(
												/* translators: 1: number of comments */ _nx(
													'%1$s Comment',
													'%1$s Comments',
													get_comments_number(),
													'',
													'awe-blog'
												),
												number_format_i18n(get_comments_number())
											); ?></a></li>
								
								
								</div>
								<p><?php echo wp_kses_post(
                                        awe_blog_get_excerpt(
                                            $post_query1->post->ID,
                                            $content_length
                                        )
                                    ); ?></p>
							</div>
						</div>
					</div>
					<?php 
				   endwhile;
				   wp_reset_postdata();
			   endif; 
				} ?>
				</div>

				<div class="col-md-6 small-posts-group">
					<div class="row">
						<div class="col-md-12">
						<?php
						$esc2 = esc_html($postid2,'awe-blog');
				if ($esc2) {
					$args = array(
						'post_type' => 'post',
						'p'         => $esc2,

					);
				

				$post_query2 = new WP_Query($args);


				if ($post_query2->have_posts()): 
					while ($post_query2->have_posts()):
                        $post_query2->the_post(); 
						$image_src = wp_get_attachment_image_src(
							get_post_thumbnail_id(),
							'full'
						);
						if($image_src){
							$url = $image_src[0];
							}
						if (!empty($image_src)) {
							$image_style =
								"style='background-image:url(" . esc_url($url) . ")'"; ?>
							 <?php
						} else {
							$image_style = '';
						}
						?>
					<div class="example-2 card">
						<div class="wrapper" <?php echo wp_kses_post($image_style); ?>>

							<div class="data">
								<div class="content">
								<h2 class="title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
								<ul class="post-meta">
                            <li class="meta-date"><a href="<?php echo esc_url(
                                awe_blog_archive_link($post)
                            ); ?>"><time class="entry-date published" datetime="<?php echo esc_url(
												awe_blog_archive_link($post)
											); ?>"><?php echo esc_html(the_time(get_option('date_format'))); ?></time>
																							</a></li>
																							<li class="meta-comment"><a
																								href="<?php echo esc_url(
																									get_comments_link(
																										get_the_ID()
																									)
																								); ?>"><?php printf(
												/* translators: 1: number of comments */ _nx(
													'%1$s Comment',
													'%1$s Comments',
													get_comments_number(),
													'',
													'awe-blog'
												),
												number_format_i18n(get_comments_number())
											); ?></a></li>
								
								
								</div>
							</div>
						</div>
					</div>
					<?php 
				   endwhile;
				   wp_reset_postdata();
			   endif; 
				} ?>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
						<?php
							$esc3 = esc_html($postid3,'awe-blog');
				if ($esc3) {
					$args = array(
						'post_type' => 'post',
						'p'         => $esc3,

					);
				

				$post_query3 = new WP_Query($args);


				if ($post_query3->have_posts()): 
					while ($post_query3->have_posts()):
                        $post_query3->the_post(); 
						$image_src = wp_get_attachment_image_src(
							get_post_thumbnail_id(),
							'full'
						);
						if($image_src){
							$url = $image_src[0];
							}
						if (!empty($image_src)) {
							$image_style =
								"style='background-image:url(" . esc_url($url) . ")'"; ?>
							 <?php
						} else {
							$image_style = '';
						}?>
					<div class="example-2 card">
						<div class="wrapper" <?php echo wp_kses_post($image_style); ?>>

							<div class="data">
								<div class="content">
								<h2 class="title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
								<ul class="post-meta">
                            <li class="meta-date"><a href="<?php echo esc_url(
                                awe_blog_archive_link($post)
                            ); ?>"><time class="entry-date published" datetime="<?php echo esc_url(
												awe_blog_archive_link($post)
											); ?>"><?php echo esc_html(the_time(get_option('date_format'))); ?></time>
																							</a></li>
																							<li class="meta-comment"><a
																								href="<?php echo esc_url(
																									get_comments_link(
																										get_the_ID()
																									)
																								); ?>"><?php printf(
												/* translators: 1: number of comments */ _nx(
													'%1$s Comment',
													'%1$s Comments',
													get_comments_number(),
													'',
													'awe-blog'
												),
												number_format_i18n(get_comments_number())
											); ?></a></li>
								
								
								</div>
							</div>
						</div>
					</div>
					<?php 
				   endwhile;
				   wp_reset_postdata();
			   endif; 
				} ?>
						</div>
					</div>
				</div>
		</div>
	</div>	
</div>


