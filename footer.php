    <?php

    $footer_bg = get_field('footer_setting', 'option');

    $join_a_class_text = get_field('join_a_class_text', 'option');
    $join_a_class_link = get_field('join_a_class_link', 'option');
    $become_an_instructor_text = get_field('become_an_instructor_text', 'option');
    $become_an_instructor_link = get_field('become_an_instructor_link', 'option');






    ?>
    <!-- <div class="spacer" style="margin-botom:127px; min-height:127px"> </div> -->
    <div class="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-bg.png" style="width:100vw" alt="footerbg">
    </div>

    <div class="footer-banner">
        <div class="row w-100">
            <div class="col-md-4">
                <div class="content-1">
                    <p><?php the_field('studio_enquires_text', 'option') ?></p>
                    <a href="mailto:info@exhalepilateslondon.com"><?php the_field('studio_enquires_email', 'option') ?></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-2">
                    <p><?php the_field('education_enquires_text', 'option') ?></p>
                    <a href="mailto:education@exhalepilateslondon.com"><?php the_field('education_enquires_email', 'option') ?></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="content-3">
                    <a href="tel:+44 (0)207 186 0611"><?php the_field('tel_info_top', 'option') ?></a>
                </div>
                <div class="social-icon">
                    <a href="<?php the_field('instagram', 'option'); ?>"> <span class="mr1">Instagram</span> <i class="fa-brands fa-instagram"></i> </a>
                    <a href="<?php the_field('facebook_link', 'option'); ?>"> <span class="mr1">Facebook</span> <i class="fa-brands fa-facebook-f"></i></a>
                </div>
            </div>
        </div>

        <ul class="footer-bottom">
            <li><a href="">terms</a></li>
            <li><a href="">privacy policy</a></li>
            <li><a href="">Cookie Declaration</a></li>
        </ul>
    </div>



    <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() >= 300) {
                $('.class-instructor').addClass('fixed-footer');
            }
            if ($(window).scrollTop() + $(window).height() > $(document).height() - 300) {
                $('.class-instructor').removeClass('fixed-footer');
                $('.class-instructor').css("margin-top", "-127px");
            }
        });


        // scrolling and change header 
        var className = "inverted";
        var scrollTrigger = 60;

        window.onscroll = function() {
            // We add pageYOffset for compatibility with IE.
            if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
                document.getElementsByTagName("header")[0].classList.add(className);
            } else {
                document.getElementsByTagName("header")[0].classList.remove(className);
            }
        };
    </script>


    </body>

    </html>