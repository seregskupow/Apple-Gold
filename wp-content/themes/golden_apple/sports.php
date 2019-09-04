<?php get_header();?>

<section id="sport_section">
    <div class="main_wrap">
        <h1><?php the_title();?></h1>
        <?php the_post();
    the_content();
            ?>

    </div>
</section>

<?php 

get_footer();?>