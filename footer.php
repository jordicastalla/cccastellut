
</div><!-- contenidorWeb-->
	</div> <!-- wrapper -->

	<footer>


		<img src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/images/Maigmo.png" alt="Maigmó" id="Serres" />


			<div class="footPeu">

						<nav id="menuFooter">
							<ul>
								<li><a href="index.php?page_id=132">Plànol Web</a></li>
								<li><a href="index.php?page_id=139">Avís Legal</a></li>
								<li><a href="index.php?page_id=152">Crèdits</a></li>
							</ul>

						</nav>

						<ul id="xarxesFooter">
							<li><a href="https://www.facebook.com/centre.cultural.castellut" target="_blank" ><img src="wp-content/themes/cccastellut/images/social/facebook.png" alt="facebook" /></a></li>
							<li><a href="https://twitter.com/#!/cccastellut" target="_blank" ><img src="wp-content/themes/cccastellut/images/social/twitter.png" alt="twitter" /></a></li>
							<li><a href="index.php?feed=rss2" target="_blank"><img src="wp-content/themes/cccastellut/images/social/rss.png" alt="rss" /></a></li>
							<li><a href="http://www.youtube.com/user/cccastellutTV" target="_blank" ><img src="wp-content/themes/cccastellut/images/social/youtube.png" alt="youtube" /></a></li>
							<li><a href="https://picasaweb.google.com/110321736028535091382" target="_blank" ><img src="wp-content/themes/cccastellut/images/social/picasa.png" alt="picasa" /></a></li>
						</ul>

							<span class="adreca">Centre Cultural Castellut -  C/ Dr. Fleming, 50 - 03420 - Castalla (l'Alcoià)</span>
							<span class='creative'><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Llicència de Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png" class='ccimg' /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Dataset" property="dct:title" rel="dct:type">Web CCC</span> de <a xmlns:cc="http://creativecommons.org/ns" href="http://www.centreculturalcastellut.com" property="cc:attributionName" rel="cc:attributionURL"> Centre Cultural Castellut</a> està subjecta a una llicència de <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Reconeixement-NoComercial-CompartirIgual 3.0 No adaptada de Creative Commons</a></span>

				</div>


</footer>



<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/js/btnAmunt.js"></script>
<script src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/js/tinynav.js"></script>
<script src="<?php bloginfo('url');?>/wp-content/themes/cccastellut/js/slick.min.js"></script>

	<script>

	$(document).ready(function(){
	  $('.slider-ccc').slick({
			autoplay:true,
			arrows:false,
			fade:true

	  });
	});


	jQuery( document ).ready( function( $ ) {
	    // Relocate Jetpack sharing buttons down into the comments form
	    jQuery( '#Comparteix' ).html( jQuery( '.sharedaddy' ).detach() );
	} );

	$(function () {
    $("#menuPrincipal").tinyNav({   
  header: 'Navega', // String: Specify text for "header" and show header instead of the active item
  indent: '- ', // String: Specify text for indenting sub-items
  label: '' // String: Sets the <label> text for the <select> (if not set, no label will be added)
});
  });

	</script>

</body>

</html>
