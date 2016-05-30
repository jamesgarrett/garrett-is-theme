
<? 	$project_content = get_field('project_content');
	$embed_link = get_field('embed_link');
   	$color = get_field('color');
   	$thumb = get_field('thumbnail');

if( $embed_link ): ?>
	<a class="project-title" href="{{the_permalink()}}">{{the_title();}}</a>
		    <div class="grid--box" href="{{the_permalink()}}" style="width:inherit;">
		    	<div class="meta--inner">
					{{$embed_link;}}
				</div>
			</div>
<? endif; ?>
