<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CT_Custom
 */


$tp = get_template_directory_uri(); 

$index = get_row_index();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>






                <div class="shortcontent_<?php echo $index?>">
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
                         <div class="arrow_btn">  <img src="<?php echo $tp; ?>/assets/img/arrow-down.svg" id="showlong_<?php echo $index?>" alt="arrow-down"></div>
                 </div>


                <div class="longcontent_<?php echo $index?>">
                        <?php echo $shortinfo; ?>  
                        <br/>
                        <div class="arrow_btn"><img src="<?php echo $tp; ?>/assets/img/arrow-up.png" id="showshort_<?php echo $index?>" alt="arrow-down"></div>
                </div>

                <script>

                                


                </script>

<script type="text/javascript">

//jQuery in WordPress
jQuery(function($){

        $(".longcontent_<?php echo $index?>").hide();
                                $("#showlong_<?php echo $index?>").click(function(){
                                     
                                $(".longcontent_<?php echo $index?>" ).show();
                                $(".shortcontent_<?php echo $index?>").hide();   
                                $(".card_img<?php echo $index?>").css("height","100%");
                                });
                                $("#showshort_<?php echo $index?>").click(function(){
                                $(".longcontent_<?php echo $index?>").hide();
                                $(".shortcontent_<?php echo $index?>").show();
                                $(".card_img<?php echo $index?>").css("height","360px");
                                });
   
    
});
</script>

