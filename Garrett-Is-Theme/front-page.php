@layout('layouts.one-column')



@section('main')

	<div class="grid" style="height:100vh;padding-bottom: 50px;overflow-y:scroll;">
	<style>#app{overflow-x:hidden;}footer{display:none;}</style>
      <div class="row">
        <div class="col-sm-8 feature-image" style=""></div>
          <div class="col-sm-4 feature-description"><h2>Featured Project</h2><a href="/designing/infographics"><h2>DESIGNING INFOGRAPHICS</h2></a><p>Information design is a topic that greatly interests me. Through a combination of theory, pulling from the likes of Edward Tufte and Josef Albers, and practice through applications in silkscreen and web design. I have honed my  understanding of information design, which I apply to almost every project that I complete. I believe that excellent design not only has the power to present complex information in a manner that is aesthetically pleasing, but to elucidate the message, through intentional composition, emphasis, and tone.</p></div>
          <div class="item-texture-image hidden-sm hidden-xs"></div>
      </div>
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

<!-- 	

	<div class="row project-thumbs">
	     <h2>Tags</h2><hr>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-3 tag"><a href="#">Posters</a></div>
            <div class="col-md-2 tag"><a href="#">Recursive Functions</a></div>      
            <div class="col-md-2 tag"><a href="#">Paris</a></div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-2 tag"><a href="#">Vectors</a></div>
            <div class="col-md-2 tag"><a href="#">Landscapes</a></div>      
            <div class="col-md-2 tag"><a href="#">Infographics</a></div>
            <div class="col-md-2 tag"><a href="#">Pier 96</a></div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-3 tag"><a href="#">Union Square</a></div>
            <div class="col-md-2 tag"><a href="#">Semantics Servers</a></div>      
            <div class="col-md-2 tag"><a href="#">More...</a></div>
          </div>
	</div> -->

@endsection