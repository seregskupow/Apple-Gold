<footer>
        <div class="footer_wrapper">
            <h1>contacts</h1>
            <div class="contact_wrap grey_background">
                <div class="contact-row row">
                    <div class="contact-col col col-12 col-md-6 col-lg-4">
                        <div class="contact-col-wrap">
                            <h3>adress</h3>
                            <?php
           
            
           $args =array(
            'numberposts' => 0,
            'category_name'    => 'contacts',
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
           <div class="adress">
                                <p>sportclub "golden apple"</p>
                                <div style="display:flex;"><?php the_content();?> </div>
                            </div>
            <?php
        }
        // <i class="fas fa-map-marker-alt" style="margin-right:10px;"></i>
        wp_reset_postdata(); ?>
                            
                           
                            <div class="social_block">
                                <div class="social_item">
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </div>
                                <div class="social_item">
                                    <a href="https://www.instagram.com/s.e.r.e.g.a_sk/?hl=uk"> <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="social_item">
                                    <a href="">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </div>
                                <div class="social_item">
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="social_item">
                                    <a href="">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-col col col-12 col-md-12 col-lg-4 order">
                        <div id="map"></div>
                    </div>
                    <div class="contact-col col col-12 col-md-6 col-lg-4">
                        
                        <div class="menu_container">
                                <h3>datatable</h3>
                            <ul class="table_menu">
                                <li class="menu_item"><a href="">club timetable</a></li>
                                <li class="menu_item"><a href="">club timetable</a></li>
                                <li class="menu_item"><a href="">club timetable</a></li>
                            </ul>
                           
                        </div>
                    </div>
                     
                </div>
                <div class="logo_wrap"><img src="<?php bloginfo('template_directory');?>/app/img/apple_logo.png" alt=""></div>
            </div>
        </div>
    </footer>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
    <?php wp_footer();?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN1I6Z0JlbkeItk8q98uAXtp-ueO6BAms&callback=initMap"
    async defer></script>

</body>

</html>
