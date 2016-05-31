<div id="scripts" class="vis-hidden">

	<script src="{{ get_stylesheet_directory_uri() }}/app.min.js"></script>
	<script src="{{ get_stylesheet_directory_uri() }}/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="{{ get_stylesheet_directory_uri() }}/lib/scripts/garrett-toggle.js"></script>
	<script src="{{ get_stylesheet_directory_uri() }}/lib/scripts/menu-toggle.js"></script>
	<script src="{{ get_stylesheet_directory_uri() }}/lib/scripts/slider.js"></script>
	<script src="{{ get_stylesheet_directory_uri() }}/lib/scripts/modules/drag-scroll.js"></script>
	<script src="{{ get_stylesheet_directory_uri() }}/bower_components/jquery/dist/jquery-ui.min.js"></script>
	<script src="{{ get_stylesheet_directory_uri() }}/bower_components/unslider-master/dist/js/unslider-min.js"></script> 
	<script>$(function() { $('.banner').unslider() })</script>
	  <script>
		  $(function() {
		    $( "#button" ).click(function() {
		      $( "#dropdown" ).toggleClass( "d-n", 10 );
		    });
		  });
		  </script>

	<script>

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



		  ga('create', 'UA-59255345-1', 'auto');

		  ga('send', 'pageview');

  	</script>

</div>

{{ wp_footer() }}