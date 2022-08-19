<?php
/**
 * Template Name: Class Schedule 
 */

get_header();

?>





<div class="container" style="margin-top: 3rem; margin-bottom:3rem;">
<script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>
<healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="7b18139ee71" data-widget-version="1" ></healcode-widget>
</div>



<?php

get_footer();

?>

<script>

$(document).ready(function(){
		//console.log("document length - mb");
		//console.log(document.getElementsByClassName('bw-header__filter-link').length);
		const myInterval = setInterval(()=>{
			if (document.getElementsByClassName('bw-header__filter-link').length > 1){
				console.log("in if and clicking")
				document.querySelector('.bw-header__filter-link').click();
  clearInterval(myInterval);	
			}
		}, 5000)
	});



</script>

