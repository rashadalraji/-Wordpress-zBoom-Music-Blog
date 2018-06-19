<?php get_header();?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                 <?php get_breadcrumb(); ?>   
                    <?php while(have_posts()) : the_post(); ?>
                    
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink() ;?>"><?php the_title();?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y')?> with <?php comments_popup_link() ;?>]</div>
						<?php the_content(); ?>
						<div class="comment">
                            
                            
							Your email address will not be published. Required fields are marked *
                            
                            <?php comments_template(); ?>
							<!--form>
								<div><input type="text" name="name" id="name"> Name *</div>
								<div><input type="email" name="email" id="email"> Email *</div>
								<div><input type="url" name="website" id="website"> Website</div>
								<div><textarea rows="10" name="comment" id="comment"></textarea></div>
								<div><input type="submit" name="submit" value="Submit"></div>
							</form-->
						</div>
					</article>
                    
                    <?php endwhile;?>
				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>