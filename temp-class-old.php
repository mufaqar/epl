<?php
/**
 * Template Name: Class Schedule Old
 */

get_header();




?>



<div class="class-schedule">
        <div class="container">
            <form  action="" method="GET">
            <div class="fields-section">
                <div class="row">
                    <div class="col-md-3 padding">
                        <div class="searchBoxMain filterSelect">
                            <select name="loc" id="loc">
                         
                            <?php                                
                                     $locations_tax = get_terms( array('taxonomy' => 'locations','hide_empty' => false ) ); 
                                          foreach( $locations_tax as $loc ) 
                                                    {

                                                        $loc_slug = $loc->slug ;
                                                        $loc_name = $loc->name ;

                                                  
                                                       ?>
                                                 
           <option value="<?php echo $loc_slug ?>" 
                      <?php $loc = $_GET['loc']; if ($loc == $loc_slug) { echo "selected"; } ?> > <?php echo $loc_name; ?> </option> <?php
                                                     }
                                             
                                           ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="searchBoxMain filterSelect">
                            <select name="ins" id="ins"> 
                            <option value="">Instructor</option>
                                
                                <?php                                
                                     $instructor_tax = get_terms( array('taxonomy' => 'instructor','hide_empty' => false ) ); 
                                          foreach( $instructor_tax as $ins ) 
                                          {

                                            $ins_slug = $ins->slug ;
                                            $ins_name = $ins->name ;

                                      
                                           ?>
                                     
<option value="<?php echo $ins_slug; ?>" 
          <?php  $ins = $_GET['ins']; if ($ins == $ins_slug) { echo "selected"; } ?> > <?php echo $ins_name; ?> </option> <?php
                                         }
                                             
                                           ?>
                              
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="searchBoxMain filterSelect">
                            <select name="type" id="type">
                            <option value="">Type</option>

  
                               
                            <?php                                
                                     $types_tax = get_terms( array('taxonomy' => 'types','hide_empty' => false ) ); 
                                          foreach( $types_tax as $type ) 
                                          {

                                            $type_slug = $type->slug ;
                                            $type_name = $type->name ;

                                      
                                           ?>
                                     
<option value="<?php echo $type_slug; ?>" 
          <?php  $type = $_GET['type']; if ($type == $type_slug) { echo "selected"; } ?> > <?php echo $type_name; ?> </option> <?php
                                         }
                                             
                                           ?>

                              






                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 padding">
                        <div class="searchBoxMain filterSelect">
                            <select name="date" id="datte">
                                <option value="">Date</option>
                                <option value="saab">ACS</option>
                                <option value="opel">DESC</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
                                                    
            <div class="filter">
                <button class="btn-white"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cross.svg" alt="cross"> Submit </button>
            </div>
            </form>
            <div class="tabel-date">
                <div class="padding">
                    <h3><?php the_time( 'l,s F' ); ?></h3>
                </div>
            </div>
            <div class="table-section">
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Time</th>
                            <th>Class</th>
                            <th>Instructor</th>
                            <th>Location</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="space">

                    <?php query_posts(array(
                            'post_type' => 'classes',
                            'posts_per_page' => -1,
                            'order' => 'desc',
                          )); 
                        if (have_posts()) :  while (have_posts()) : the_post(); 

                           $terms = get_the_terms( get_the_ID(), 'types' );
                           $Instructor = get_the_terms( get_the_ID(), 'instructor' );
                           $Location = get_the_terms( get_the_ID(), 'locations' );

                        ?>
                            <tr>
                                <td><?php echo get_post_meta( get_the_ID(), 'time',  true ); ?></td>
                                <td>
                                    <p> <?php the_title(); ?></p>
                                    (<?php echo get_post_meta( get_the_ID(), 'class_level',  true ); ?>)
                                
                                </td>
                                <td><?php echo $Instructor[0]->name ; ?></td>
                                <td><?php echo $Location[0]->name ; ?></td>
                                <td><button><a href="<?php the_permalink()?>"> Book Class </a></button></td>
                            </tr>
                        <?php endwhile; wp_reset_query(); else : ?>
                            <h2><?php _e('Nothing Found','lbt_translate'); ?></h2>
                       <?php endif; ?> 

                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   



<?php

get_footer();

?>

