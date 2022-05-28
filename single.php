<?php get_header() ?>
 
<div id="content" class="site-content">





	<div class="container">
		<?php echo breadcrumbs(); ?>		
		<div class="row-info-title">
			<div class="br-title-page">
				<?php the_title( '', '' ); ?>				
			</div>
			<div class="date-single-post">
				<?php echo get_the_date( 'd M Y' ); ?>
			</div>		
		</div>
	</div>

</div>

<section id="to_single_news" class="to_single_news">
        <div class="container">
            <div class="row">

                <div class="to_single_news-col">
                        <div class="container_single_post">
                        		
                            <?php the_post_thumbnail('large'); ?>
                            <div class="description_single_post">
								 <?php  the_content();?>                            
                        	</div>

                        
                    </div>
                </div>

                <div class="to_single_news-col-2">
                    <div class="sidebar_news">
                        <div class="search-block">
                      		<!--?php echo get_search_form(); ?-->
                        	<form role="search" method="get" id="searchform" class="searchform" action="<?php echo site_url(); ?>/">
									<input placeholder="Поиск" type="text" value="" name="s" id="search-input">
									<div class="search-img-icon1"></div>

							</form>
				</div>
                        <div class="search-block-content-bar">
                            <div class="sidebar_news_title">Новости</div>
    							<?php
								$args = array(
								
								'orderby'    => 'ID',
								'post_status' => 'publish',
								'order'    => 'DESC',
								'posts_per_page' => 10 
								);    							
								$the_query = new WP_Query($args);	 
								while ( $the_query->have_posts() ) : $the_query->the_post(); ?>                  	
 									<div class="post-to-news">
                                    <div class="date-sidebar-post"> 
	 									<?php echo get_the_date( 'd M Y' ); ?> </div>
	 									<a href="<?php the_permalink() ?>">
                                        <div class="post-txt">
                                            <?php the_title(); ?>
                                        </div>
                                    	</a>
                                    </div>
							   
								<?php  
								endwhile; ?>                 
                                
                             	<a href="#">
                                		<div class="sidebar_news_link">Все новости</div>
	                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section><!-- #primary -->


</div><!-- #content -->
<?php get_footer(); ?>