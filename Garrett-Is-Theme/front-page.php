@layout('layouts.one-column')



@section('main')

	<div class="grid" style="height:100vh;padding-bottom: 50px;overflow-y:scroll;">
	<style>#app{overflow-x:hidden;}footer{display:none;}</style>
<!-- <div class="og-slider">
    	<ul>
    		<li class="slide"><img src="http://jamesgarrett.co/garrett/wp-content/uploads/2012/06/Magazine-Mockup.jpg" alt=""></li>
    		<li class="slide"><img src="http://garrett.is/wp-content/uploads/2014/10/Overcast-I-Spring-2012.jpg" alt=""></li>
    		<li class="slide"><img src="http://garrett.is/wp-content/uploads/2014/10/seed_pods.jpg" alt=""></li>
    	</ul>
    </div> -->
<!--     <div class="row d-n">
        <div class="col-sm-8 feature-image" style=""></div>
        <div class="col-sm-4 feature-description"><h2>Featured Project</h2><a href="/designing/infographics"><h2>DESIGNING INFOGRAPHICS</h2></a><p class="hidden-xs">Information design is a topic that greatly interests me. Through a combination of theory, pulling from the likes of Edward Tufte and Josef Albers, and practice through applications in silkscreen and web design. I have honed my  understanding of information design, which I apply to almost every project that I complete. I believe that excellent design not only has the power to present complex information in a manner that is aesthetically pleasing, but to elucidate the message, through intentional composition, emphasis, and tone.</p></div>
        <div class="item-texture-image hidden-sm hidden-xs"></div>
    </div>  -->
	<div class="og-slider">
	    <ul>
	    	<li style="height:100vh;background-size:cover;background-image:url('http://jamesgarrett.co/garrett/wp-content/uploads/2012/06/Magazine-Mockup.jpg');">
	    		<div class="col-sm-6 col-sm-offset-3 feature-description"><a href="/designing/infographics"><h2>DESIGNING / INFOGRAPHICS</h2></a><p>ILLUSTRATOR | PHOTOSHOP | GIS</p></div>
		    </li>
	    	<li style="height:100vh;background-size:cover;background-image:url('http://garrett.is/wp-content/uploads/2015/01/nightlandscape2.jpg');background-size: 200%;background-position: 5% 4.5%;">
	    		<div class="col-sm-6 col-sm-offset-3 feature-description"><a href="/drawing/landscapes"><h2>DRAWING / LANDSCAPES</h2></a><p>GRAPHITE POWDER | PAPERBOARD</p></div>
	    	</li>
	    	<li style="height:100vh;background-size:cover;background-image:url('http://garrett.is/wp-content/uploads/2014/10/seed_pods.jpg');">
		    	<div class="col-sm-6 col-sm-offset-3 feature-description"><a href="/photographing/seed_pods"><h2>PHOTOGRAPHING / FLORA</h2></a><p>F1.4 50MM DSLR | INKJET PRINT</p></div>
	    	</li>
	    </ul>
	</div>
	<style>
		nav.unslider-nav {
		    transform: translateY(-80px);
		}
		.og-slider{
			transform: translateY(-50px);
		}
		.unslider-nav ol li {
		    width: 1.5rem;
		    height: 1.5rem;
		}
		.feature-description {
		    height: auto;
		    margin-top: 50vh;
		    transform: translateY(-50%);
		    padding: 13px;
		    text-align: center;
		    font-family: 'geogrotesque';
		}
		.feature-description h2{
			margin:0;
		}
	</style>
      <div class="row project-thumbs">
      	<h2>Ongoing Projects</h2><hr>
      </div>
	  <div class="row project-thumbs text-center portfolio">
		
		@wpquery(array('project_type'=>'projects'))

		    <? 

			$project_type = get_field('project_type');

		    $thumb = get_field('thumbnail');

		    $description = get_field('description');

		    $category = get_the_category();

		    ?>

		    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-12">
		        <div class="panel panel-default">
		            <div class="panel-body" style="background-image:url({{ $thumb['url'] }});background-size:cover;background-position:center;height:250px;"></div>
		            <div class="meta--inner">
		                <a href="{{the_permalink()}}">{{ strtolower($category[0]->cat_name); }} {{the_title()}}</a><em style="font-variant: small-caps;text-transform: lowercase;">{{$description}}</em>
		            </div>  
		        </div> 
		    </div>
		    <div class="clear"></div> 
		

		    

		@wpempty

		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>

		@wpend

	  </div>

	  <div class="project-list">
		<?$menu = array(
			"title_li"    => "",
			// "exclude"     => get_option('page_on_front'),
			"link_before" => '<span class="menu--item">',
			"link_after"  => '</span>',
			"depth"       => '1',
		);?>
		<ul>
		{{ wp_list_categories( $menu ); }}
		</ul>
	</div>

@endsection