<?php
    /*
    Template Name: Home
    */
?>
<?php get_header();?>

<header>


        <p id="golden">Golden </p>
        <p id="apple">Apple</p>
        
        <div class="hero_img"  style="background: url('<?php bloginfo('template_directory');?>/app/img/hero.jpg') center no-repeat; background-size:cover;">
            <div class="square"></div>
            <div class="vert_line"></div>
            <div class="horizont_line"></div>
        </div>
        

    </header>
    <!-- Header End -->
    <div class="left_side">
    <!-- Section1 -->
    <section id="offer">
        <div class="offer_wrapper">
            <div class="offer_slider">
            <?php
           
            
           $args =array(
            'numberposts' => 0,
            'category_name'    => 'sales',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );
        $posts = get_posts($args);
        foreach( $posts as $post ){
            setup_postdata($post);
            ?>
            <div class="off_item"><h3><?php the_title(); ?></h3><a href="<?php the_permalink();?>"><?php the_post_thumbnail('sales', '')?></a></div>
            <?php
        }
        
        wp_reset_postdata(); ?>
           
               
                
           
                
            </div>
        </div>
    </section>
    <section id="activities">
        <div class="activ_wrap">

        <?php
           
            
           $args =array(
            'numberposts' => 0,
            'category_name'    => 'sport_type',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );
        $i =0;
        $posts = get_posts($args);
        foreach( $posts as $post ){
            setup_postdata($post);
            if($i%2==0){
                ?>
                <div class="activ_item row">
                    <div class="col-sm-12 col-md-6 activ_info">
                        <div class="activ_info_wrap">
                            <div class="activ_info_text">
                                <h3><?php the_title();?></h3>
                               <?php the_content();?>
                                <a class="button_" href="<?php the_permalink();?>"><span class="more">more</span><i class="fas fa-arrow-right"></i>
                                </a>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 activ_img">
                        <div class="activ_img_thumb" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
                    </div>
                </div>
    
                <?php
            }
            else{
                ?>
                <div class="activ_item row reverse">
                    <div class="col-sm-12 col-md-6 activ_info">
                        <div class="activ_info_wrap">
                            <div class="activ_info_text">
                                <h3><?php the_title();?></h3>
                                <?php the_content();?>
                                <a class="button_" href="<?php the_permalink();?>"><span class="more">more</span><i class="fas fa-arrow-right"></i>
                                </a>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 activ_img">
                        <div class="activ_img_thumb" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>
                    </div>
                </div>
    
                <?php 
            }
            $i=$i+1;
           
        }
        wp_reset_postdata(); ?>










            
        </div>
    </section>
    <section id="special">
           <div class="arr_but prev"><i class="fas fa-arrow-left"></i></div>
           
        <div class="cards">
            
            <?php
           
            
           $args =array(
            'numberposts' => 0,
            'category_name'    => 'additional',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        );
        $posts = get_posts($args);
        foreach( $posts as $post ){
            setup_postdata($post);
            ?>
            <div class="card_">
                <div class="card_yellow"></div>
                <div class="card_grey">
                    <div class="img_wrap"><?php the_post_thumbnail('additional', '')?></div>
                    <div class="card_text"><?php the_content();?></div>
                    <a class="button_" href="<?php the_permalink($post);?>"><span class="more"><?php the_title(); ?></span><i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <?php
        }
        
        wp_reset_postdata(); ?>
        
            
           
        </div>
        <div class="arr_but next"><i class="fas fa-arrow-right"></i></div>
    </section>

<?php get_footer();?>