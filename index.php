<?php get_header();?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                    <?php while(have_posts()): the_post();?>
					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('d F, Y | g:i a'); ?> with <?php comments_popup_link('No comments ','1 comment','% comments','rashad','comments are disabled'); ?>]</div>
						<p>Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam...</p>
					</article>
					<?php endwhile;?>
                 
                    <ul id="pagi">  
                    <?php 
                    the_posts_pagination(array(
                        'show_all'=>true,
                    'prev_text'=>'Prev',
                    'Next_text'=>'Next',
                    'screen_reader_text'=>' ',
                    'before_page_number'=>'<b>',
                    'after_page_number'=>'</b>'
                    ));
                    ?>
                    
                    </ul>
					
					
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>