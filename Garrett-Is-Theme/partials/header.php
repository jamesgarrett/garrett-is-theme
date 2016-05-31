<? $cur = get_the_id(); 
   $category = get_the_category();  
   $noun = strtolower(get_the_title());  
   $single_post = is_single($cur); 
   ?>

<div class="menu">
<div class="navbar navbar-default">
      <a class="navbar-brand topnav" href="http://garrett.is/"><icon class="g">G</icon><span class="hidden-xs garrettis">arrett.is</span></a>
			@if(count($category)>=1)
			<a class="navbar-brand topnav" href="{{home_url()}}/{{ strtolower($category[0]->cat_name); }}">{{ strtolower($category[0]->cat_name); }}</a>
			@endif
			@if($single_post == 'true')
			<a class="navbar-brand topnav" href="{{home_url()}}/always/{{ strtolower($category[0]->cat_name); }}/{{$noun}}">{{$noun}}</a>
			@endif
		<button id="menu-toggle"><i class="fa fa-bars" id="bars"></i></button>
     <menu id="menu-main" class="d-n">
      	<ul>
			<li><span class="menu--item d-n"><a href="{{home_url()}}">Home</a></span></li>
			<li><span class="menu--item d-n"><a href="{{home_url()}}/about">Archive</a></span></li>
			<li><span class="menu--item d-n"><a href="#" id="button">Categories  <icon class="fa fa-caret-down"></icon></a></span></li>
			  <div class="d-n" id="dropdown">
			  	<li><span class="menu--item d-n"><a href="{{home_url()}}/Building">Building</a></span></li>
				<li><span class="menu--item d-n"><a href="{{home_url()}}/Designing">Designing</a></span></li>
				<li><span class="menu--item d-n"><a href="{{home_url()}}/Drawing">Drawing</a></span></li>
				<li><span class="menu--item d-n"><a href="{{home_url()}}/Making">Making</a></span></li>
				<li><span class="menu--item d-n"><a href="{{home_url()}}/Photographing">Photographing</a></span></li>
				<li><span class="menu--item d-n"><a href="{{home_url()}}/Printing">Printing</a></span></li>
			  </div>
			<li><span class="menu--item d-n"><a href="{{home_url()}}/contact">Contact</a></span></li>

		</ul>
	</menu>
</div>