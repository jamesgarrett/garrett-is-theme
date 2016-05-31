@layout('layouts.master')
@section('main')
		<style>.grid{overflow-y:scroll;}</style>
		<div style="overflow:visible;position:relative;padding:0 15px;">
			<? $category = get_the_category(); ?>
			<? $tag = get_queried_object(); ?>
			<? $term_description = term_description(); ?>

			<div class="row cat--title">
				<div class="description cat--intro col-md-6 col-md-offset-3">
						<h2>TAG<br><strong><? $tag_name = single_tag_title(); ?></strong></h4>
				</div>
			</div>
			<hr style="margin-top:0;">

			@if(isset($term_description))
			<div class="row">	
				<div class="project-list col-md-3">
				<h4>TAG FILTERS</h4>
					<?php
					if(get_the_tag_list()) {
					    echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
					}
					?>
				</div>
				<div class="description cat--intro col-md-6">
					{{ $term_description }}
				</div>
			</div>
			@endif

			<div class="row project-thumbs">
			{{jsl($cat_desc)}}
		@wpquery(array('tag'=>$tag->tag_slug))
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
						<div class="clear"></div>

					
		@wpempty
		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>
		@wpend
			</div>
		</div>
		</div>

@endsection