<?php get_header() ?>


<div id="content" class="site-content">
	<div class="news-block">
	    <div class="container">
	        <div class="news-block-inside">
	 		<?php while (have_posts()) : the_post(); 

	 			$post_id =  get_the_ID();	 			?>
			    <!-- Do stuff... -->

	  		    <div class="simple-news-el video-content-preloader" id='<?php echo $post_id ?>'>
	            <div class="item-badge ib-video">
					<span>
					</span>
	            </div>
	            <?php 
	            	$custom = get_post_custom_values('youtube', get_the_ID() )[0];
	            	if ($custom ==null){
	            		$link = get_permalink();
	            	}
	            	else{
	            		$link = '#';
	            	}
	           
	            ?>
	            <a class="news-plitka-background video-content-preloader-img" 
	            	href="<?php echo $link; ?>"
	            	style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
	            </a>

	            <div class="news-plitka-background-alpha" 
	            	 style="background-image: url('https://img.youtube.com/vi/GWEV_WLyF2U/maxresdefault.jpg')">
            	 </div>

	        </div>
		    <?php 
		    	
		    
				if ( $custom!='' ) { ?>
	            <div id="modal-<?php echo $post_id ?>" class="vmodal">
	            	<iframe width="560" height="315" src="<?php echo $custom; ?>" title="YouTube video player" frameborder="0" allow="" allowfullscreen></iframe>             
	            </div>

		   <?php }	    
		       endwhile;?>            
	               
	                    <!--			обработка ajax постов-->
	                     
	                <div class="loadmore-container">
	                    <div id="true_loadmore">
	                        <div class="txt-loadmore">
	                            Показать еще                        </div>
	                        <div class="lds-ripple">
	                            <div></div>
	                            <div></div>
	                        </div>
	                    </div>
	                </div>
	        </div>
	    </div>
	</div>
</div>

</div><!-- #content -->

<?php get_footer(); ?>