<?php get_header() ?>
 
    <div id="content" class="site-content">
    <div class="container">
        <?php echo breadcrumbs(); ?>    
        <div class="result-search-list" style="display: block;">            
            <div class="result_item clear">
                    <div class="search-item-block">                    
                    <?php
                    $s=get_search_query();
                    $args = array('s' =>$s);  
                        
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                            _e("<h2>Результаты поиска: ".get_query_var('s')."</h2>");
                            while ( $the_query->have_posts() ) {
                               $the_query->the_post();
                                     ?>
                                        <div class="search-item-block">
                                            <div class="search-item-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </div>
                                            <div class="search-item-date">
                                                <?php the_date('d M Y'); ?>
                                            </div>
                                            <div class="search-item-desc">
                                                    <p>
                                                        <?php the_content();?>
                                                    </p>
                                            </div>
                                        </div>
                                     <?php
                            }
                        }else{
                    ?>
                            <h2>Ничего не найдена</h2>
                            <div class="alert alert-info">
                              <p>Извините но ничего не найдено.</p>
                            </div>
                <?php } ?>
                </div>
                                <a class="href-search" href="https://tankionline.com/ru/2018/04/pasxalnye-vyxodnye-c-leogaming/"></a>
                            </div>

                        </div>
                </div>
                <section id="to_single_news" class="to_single_news">    
                </section><!-- #primary -->
            </div><!-- #content -->
        </div>    
        <?php get_footer(); ?>