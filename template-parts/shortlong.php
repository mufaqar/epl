<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CT_Custom
 */


$tp = get_template_directory_uri(); 
?>

                <div class="shortcontent">
                        <?php          
                        $shortinfo = get_sub_field('short_info');
                        if (strlen($shortinfo) > 250) {
                                $trimstring = substr($shortinfo, 0, 250). '<br/>';
                                } else {
                                $trimstring = $shortinfo;
                                }
                                echo $trimstring;
                                //Output : Lorem Ipsum is simply dum [readmore...][1]
                                ?>  
                           <img src="<?php echo $tp; ?>/assets/img/arrow-down.svg" id="showlong" alt="arrow-down">
                 </div>


                <div class="longcontent">
                        <?php echo $shortinfo; ?>  
                        <br/><img src="<?php echo $tp; ?>/assets/img/arrow-up.png" id="showshort" alt="arrow-down">
                </div>