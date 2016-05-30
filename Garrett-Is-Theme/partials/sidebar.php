<aside id="sidebar" class="app--col col-left">
	<? $cur = get_the_id(); ?> 
	<ul class="project-list">
		@wpquery(array('post_type'=>'projects'))
			<a href="{{the_permalink()}}" class="{{$cur==$post->ID?'current':''}}"><li> {{the_title()}}</li></a>
		@wpempty
			<li>{{ __('Sorry, no posts matched your criteria.') }}</li>
		@wpend
	</ul>
</aside>