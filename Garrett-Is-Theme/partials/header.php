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
      	<ul id="accordion">
			<li><span class="menu--item d-n"><a href="{{home_url()}}">Home</a></span></li>
			<li><span class="menu--item d-n"><a href="{{home_url()}}/about">Archive</a></span></li>
			<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			    <li><a href="#">HTML</a></li>
			    <li><a href="#">CSS</a></li>
			    <li><a href="#">JavaScript</a></li>
			  </ul>
			</div>
			<li><span class="menu--item d-n"><a href="{{home_url()}}/contact">Contact</a></span></li>
		</ul>
	</menu>
</div>