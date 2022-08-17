<?php 

$banner_title = get_field('banner_title');
$banner_sub_title = get_field('banner_sub_title');
$banner_link = get_field('banner_link');
$banner_image = get_field('banner_background_image');
$video_url = get_field('banner_video_url');
$button_text = get_field('button_text');
$banner_type = get_field('banner_type');
?>



	<section class="video_wrapper">
		<div class="video_section">
			<div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"  preload="none" poster="<?php echo $banner_image ?>">
				<source src="<?php echo $video_url; ?>" type="video/mp4" >
			</video>       
		</div>
	</section>


	<style>
		.video_wrapper{
			position: relative;
		}
		.video_section{
			height: 70vh;
            width: 100%;
		}
		.video_section video{
			width: 100%;
    		height: 100%;
		}
		.video_section .overlay{
			position: absolute;
			background: rgba(0,0,0,0.2);
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
		}
	</style>