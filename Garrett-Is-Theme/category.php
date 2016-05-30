@layout('layouts.master')
@section('main')
		<style>.grid{overflow-y:scroll;}</style>
		<div style="overflow:visible;position:relative;padding:0 15px;">
			<? $category = get_the_category(); ?>
			<? $cat_desc = category_description($category[0]->cat_ID); ?>
			
			<div class="row cat--title">
				<div class="description cat--intro col-md-6 col-md-offset-3">
						<h2>CATEGORY<br><strong>{{ strtoupper($category[0]->cat_name); }}</strong></h4>
				</div>
			</div>
			<hr style="margin-top:0;">

			@if(isset($cat_desc))
			<div class="row">	
				<div class="project-list col-md-3">
				<h4>CATEGORY FILTERS</h4>
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
				<div class="description cat--intro col-md-6">
					{{ $cat_desc }}
				</div>
			</div>
			@endif

			<div class="row project-thumbs">
			{{jsl($cat_desc)}}
		@wpquery(array('cat'=>$category[0]->cat_ID))
				<? $title = get_the_title(); ?>
				<? $thumb = get_field('thumbnail');?>
				<? $posttags = get_the_tags(); ?>

						<div class="col-md-6 col-md-offset-3">
							<div class="cat--img">
								<a href="{{the_permalink()}}">
									<div class="read-more"><span>View Post</span></div>
									<div style="background-image:url({{$thumb['url']}});background-position:center;background-size:cover;height:250px;"></div>
								</a>
							</div>
							<div class="cat--upper">
								<a href="{{the_permalink()}}"><h2 style="padding-left:0;">{{ $title }}</h2></a>
								<h4><? echo get_the_date(); ?></h4>
							</div>
							<div class="cat--lower">
								<p>{{the_excerpt()}}</p>
								<? if ($posttags) 
									 echo get_the_tag_list('<span class="tags" style="display:inline-block;margin:2rem 0;">',' ','</span>');
								?>
							</div>
						</div> 
						<hr>
						<div class="clear"></div>

					
		@wpempty
		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>
		@wpend
			</div>
		</div>
		</div>

@endsection