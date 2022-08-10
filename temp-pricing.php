<?php
/**
 * Template Name: Pricing 
 * 
 * 
 */
$banner = get_field('banner');
$query = $_GET['pricing']; 








get_header();
?>
 


 <?php get_template_part('template-parts/banner')?>

    <div class="pricing-section">
        <div class="container">
           <div class="filter">
            <div class="searchBoxMain">
                 <form action="" method="GET">
                        <select name="pricing" id="pricing" onchange="this.form.submit()"> 
                        <option value="">ALL</option>                       
                        <?php   
                            $types_tax = get_terms( array('taxonomy' => 'pricing_types','hide_empty' => false ) ); 
                            foreach( $types_tax as $type )  {
                                        $type_slug = $type->slug ;
                                        $type_name = $type->name ; ?>                            
                                        <option value="<?php echo $type_slug; ?>"<?php  $type = $_GET['pricing']; if ($type == $type_slug) { echo "selected"; } ?> >
                                        <?php echo $type_name; ?> </option>
                                            <?php
                                }                                                    
                            ?>
                        </select>
                       
                 </form>
            </div>
           </div>
           <div class="new-offer">
               
                   <h1><?php if($query == '') { //echo "All";
                   } 
                   else {
                                    $terms_name = get_term_by('slug',$query, 'pricing_types'); 

                                   // print_r($terms_name);
                                   
                                    echo '<div class="title ">';
                                    echo "<h1> $terms_name->name </h1> </div>";

                                   
                                    
                        } ?> 
               <div class="pricing-cards">
               <div class="row">


                
                             
               <?php 

                if($query == '') {

                    $prices_tax = get_terms( array('taxonomy' => 'pricing_types','hide_empty' => false ) ); 
                    foreach( $prices_tax as $p_cat ) 
                            {                              
                                
                                $cat_name = $p_cat->name ;
                                $cat_slug = $p_cat->slug ;
                                echo '<div class="title cat_title">';
                                echo "<h1> $cat_name </h1> </div>";

                                                 

                                ?>

                          


                       
                                        <?php      
                                    
                                                        query_posts(array(
                                                            'post_type' => 'pricing_table',
                                                            'posts_per_page' => -1,
                                                            'pricing_types' => $cat_slug,
                                                            'order' => 'desc'
                                                            
                                                        ));
                                                    if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                                
                                                        <div class="col-md-4 card-padding">
                                                            <div class="card-1">
                                                                    <h2><?php the_field('price'); ?></h2>
                                                                    <h3><?php the_title(); ?></h3>
                                                                    <div class="para">
                                                                        <?php if( have_rows('list_items') ):  while( have_rows('list_items') ): the_row();   ?> 
                                                                            <p><?php the_sub_field('item'); ?></p>                                 
                                                                        <?php endwhile;  endif; ?>
                                                                    </div>
                                                                    <button class="btn btn-buy"><?php the_field('buy_now'); ?></button>
                                                            </div>
                                                        </div>
                                                    
                                                    <?php endwhile; wp_reset_query(); else : ?>
                                                    <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                                        <?php endif;   ?>         
                                    
                                   
               <?php  }  ?>
               

                <?php }  else {

                            query_posts(array(
                                'post_type' => 'pricing_table',
                                'posts_per_page' => -1,
                                'order' => 'desc',
                                'pricing_types' => $query
                                
                            ));

                

                                if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                                            
                                                            <div class="col-md-4 card-padding">
                                                                <div class="card-1">
                                                                        <h2><?php the_field('price'); ?></h2>
                                                                        <h3><?php the_title(); ?></h3>
                                                                        <div class="para">
                                                                            <?php if( have_rows('list_items') ):  while( have_rows('list_items') ): the_row();   ?> 
                                                                                <p><?php the_sub_field('item'); ?></p>                                 
                                                                            <?php endwhile;  endif; ?>
                                                                        </div>
                                                                        <button class="btn btn-buy"><?php the_field('buy_now'); ?></button>
                                                                </div>
                                                            </div>
                                                            
                                                            <?php endwhile; wp_reset_query(); else : ?>
                                                        <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                                <?php endif;  } ?>  

               

           </div></div>
        </div>
    </div>
<?php

get_footer();
