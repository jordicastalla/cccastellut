<div id="slider" class="nivoSlider" >

  <img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/27.jpg" />
  <img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/25.jpg" />
  <img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/22.jpg" />

</div>


<script type="text/javascript">

$(document).ready(function(){

$('#slider').nivoSlider({
    effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
    slices: 18, // For slice animations
    boxCols: 8, // For box animations
    boxRows: 4, // For box animations
    animSpeed: 1000, // Slide transition speed
    pauseTime: 3000, // How long each slide will show
    startSlide: 0, // Set starting Slide (0 index)
    directionNav: false, // Next & Prev navigation
    directionNavHide: true, // Only show on hover
    controlNav: false, // 1,2,3... navigation
    controlNavThumbs: true, // Use thumbnails for Control Nav
    controlNavThumbsFromRel: false, // Use image rel for thumbs
    keyboardNav: true, // Use left & right arrows
    pauseOnHover: false, // Stop animation while hovering
    manualAdvance: false, // Force manual transitions
    captionOpacity: 1.0, // Universal caption opacity

});

$('iframe').each(function() {
$(this).attr("src", $(this).attr("src") + '?wmode=transparent')
});


});





</script>

<div class="clearer">
</div>
