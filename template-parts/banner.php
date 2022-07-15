<?php 

$banner_title = get_field('banner_title');
$banner_sub_title = get_field('banner_sub_title');
$banner_link = get_field('banner_link');
$banner_image = get_field('banner_background_image');
$video_url = get_field('banner_video_url');
$button_text = get_field('button_text');
$banner_type = get_field('banner_type');



?>




<?php if($banner_type == 'Video' ) {

	?>
	<section class="videosection">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"  preload="none" poster="<?php echo $banner_image ?>">
            <source src="<?php echo $video_url; ?>" type="video/mp4">
        </video>

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white banner-content">
				<?php if ($banner_title != '') { ?>  <h1><?php echo $banner_title; ?> </h1>  <?php }  ?>			
				<?php if ($banner_sub_title != '') { ?>  <p><?php echo $banner_sub_title; ?></p>   <?php }  ?>
                <div class="banner-btn">
                    <a class="btn btn-border" href="<?php echo $banner_link ?>"><?php echo $button_text ?></a>
                </div>  
            </div>
            </div>
        </div>
	</section>
<?php } else { ?>
	<div class="pricing-banner" style="background-color:#00AEC7;background-image: url('<?php echo $banner_image ?>');">
		<div class="banner-content">       
			<?php if ($banner_title != '') { ?>  <h1><?php echo $banner_title; ?> </h1>  <?php }  ?>			
			<?php if ($banner_sub_title != '') { ?>  <p><?php echo $banner_sub_title; ?></p>   <?php }  ?>
			<?php if ($banner_link != '') { ?> 
				<div class="primary-btn">
					<a class="btn-border btn-light" href="<?php echo $banner_link; ?>"><?php echo $button_text ?></a>
				</div>  
			<?php }  ?>
		</div>
	</div>
<?php }  ?>