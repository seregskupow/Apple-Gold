<?php get_header();?>
<div class="left_side">
<section id="sport_section">
    <div class="main_wrap">
    <div class="title">
                    <h1 id="title"><?php the_title('');?></h1>
                    <div class="line"></div>
                </div>
                
                <div class="sport_row row">
                <div class="sport_col col-sm-12 col-lg-5 "><?php the_post_thumbnail('trainer', '')?></div>
                <div class="sport_col col-sm-12 col-lg-7 "><?php the_post();the_content();
            ?></div>

                </div>
                
       

    </div>
</section>
<section id="crue">
    <div class="crue_container">
    <div class="crue_row row">

<?php
$title = the_title('', '', false);

$args =array(
'numberposts' => 0,
'category_name'    => $title,
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
<div class="crue_col col-12 col-md-6 col-lg-4">
        <a href="">
        <h2><?php the_field('name')?></h2><?php the_post_thumbnail('trainer', '')?>
        <h2 class="crue_col_sport"><?php the_field('sport_type')?></h2>
        <div class="about">
            <div class="about_wrap">
                <p>AGE: <?php the_field('age')?></p>
                <p>AWARDS: <?php the_field('awards')?></p>
                <?php the_content();?>
            </div>
        </div>
        </a>
    </div>
<?php
}

wp_reset_postdata(); ?>

   

    
</div>
    </div>
</section>
</div>
<?php 

get_footer();?>