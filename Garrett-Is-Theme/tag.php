@layout('layouts.master')
@section('main')
		<style>.grid{overflow-y:scroll;}</style>
		<div style="overflow:visible;position:relative;padding:15px;">

			{{jsl($tag)}}
		@wpquery(array('name'=>$tag->name))
				<? $title = get_the_title(); ?>
				<? $thumb = get_field('thumbnail');?>
				<? $posttags = get_the_tags(); ?>

					<div class="grid--box" style="display:inline-block;margin:20px 0;border-left:20px solid #efefef;width:97%;">
						<div style="display:block;">
							<a href="<? echo the_permalink() ?>" style="display:block;padding: 0;margin: 0;background-color: transparent;">
								<div class="category--thumb" style="background-image:url({{$thumb['url']}});background-position-y:0;background-position-x:center;background-size:cover;height:250px;"></div>
								<div class="category--description">
									<h4><a class="title-link" href="<? echo the_permalink() ?>">{{ $title }}</a></h4>
									<hr>
									<? echo get_the_date(); ?><br>
									<hr>
									<p>{{the_excerpt()}}</p>
									<? if ($posttags) 
										 echo get_the_tag_list('<span class="tags" style="display:inline-block;margin-top:2rem;"><strong>Tags:</strong> ',' ','</span>');
									?>
								</div>
							</a>
						</div>
					</div>
		@wpempty
		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>
		@wpend
		</div>
		</div>

@endsection