
<?php  if (is_singular( 'events' ) ) {

?>
<div style="display:flex"> 
    <strong> Cost: </strong>
    <p class="cost_data"><?php the_field('cost'); ?></p>
</div>

<div class="footer-btn">
<a href="<?php the_field('enroll_link'); ?>" class="btn active"> Enroll</a>
</div>

<?php
}

?>
