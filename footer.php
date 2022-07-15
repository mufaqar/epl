    <?php

    $footer_bg = get_field('footer_setting', 'option'); 

    $join_a_class_text = get_field('join_a_class_text', 'option'); 
    $join_a_class_link = get_field('join_a_class_link', 'option'); 
    $become_an_instructor_text = get_field('become_an_instructor_text', 'option'); 
    $become_an_instructor_link = get_field('become_an_instructor_link', 'option'); 

    
    
    
    

	?>
    <div class="spacer" style="margin-botom:127px; min-height:127px"> </div>

<div class="class-instructor">
        <div class="class">
            <div class="padding">
                <a href="<?php echo $join_a_class_link; ?>"><?php echo $join_a_class_text ?></a>
            </div>
        </div>
        <div class="instructor">
            <div class="padding">
                <a href="<?php echo $become_an_instructor_link; ?>"><?php echo $become_an_instructor_text; ?></a>
            </div>
        </div>
    </div> 
    <div class="footer-banner" style="background-image: url('<?php echo $footer_bg; ?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="padding">
                        <div class="footer-content">
                            <div class="social-icon">
                                <a href="<?php the_field('facebook_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png
                                " alt="facebook"></a>
                                <a href="<?php the_field('instagram', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt="insta"></a>
                            </div>
                           <div class="content-1">
                               <p>Studio enquires Footer </p>
                               <a href="mailto:info@exhalepilateslondon.com">info@exhalepilateslondon.com</a>
                           </div>
                           <div class="content-2">
                            <p>Exhale Education enquires</p>
                            <a href="mailto:education@exhalepilateslondon.com">education@exhalepilateslondon.com</a>
                        </div>
                        <div class="content-3">
                            <a href="tel:+44 (0)207 186 0611">+44 (0)207 186 0611</a>
                        </div>
                        <div class="content-4">
                            <a href="<?php echo home_url('terms'); ?>">Terms</a>
                            <a href="<?php echo home_url('privacy'); ?>">Privacy</a>
                            <a href="<?php echo home_url('cookie'); ?>">Cookie Declaration</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>



<?php wp_footer(); ?>

<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

    <script>

        
$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('.class-instructor').addClass('fixed-footer');
    }
    if($(window).scrollTop() + $(window).height() > $(document).height() - 300) {        
        $('.class-instructor').removeClass('fixed-footer');
        $('.class-instructor').css("margin-top", "-127px");
    }
});


    </script>
	

</body>
</html>
