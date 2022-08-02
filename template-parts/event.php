
<?php  if (is_singular( 'events' ) ) {

?>
<div class="event-banner-content">

    
    <div class="cost"> 
        <strong> Date: </strong>
        <div><?php the_field('date'); ?></div>
    </div>
    <div class="cost"> 
        <strong> Cost: </strong>
        <div><?php the_field('cost'); ?></div>
    </div>
    <div class="event-banner-btn">
        <a href="<?php the_field('enroll_link'); ?>" class="btn active"> Enroll</a>
    </div>

</div>

<?php
}

?>
