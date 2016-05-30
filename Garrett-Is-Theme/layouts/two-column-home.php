<!DOCTYPE html>
<html lang="en">
<!-- Two Columns Home PHP -->
<head>
	@include('partials.meta-head')
</head>
<body {{body_class()}}>
	 <header id="top" class="top--menu">
	    	@include('partials.header')
	</header>
	<div id="app">
		<div class="feature" class="app--col">
			@yield('main')
	    </div>
    	@include('partials.sidebar')
	    <main id="right" class="app--col">
	    	@include('partials.project-still')
	    </main>

    </div>
    <footer>
	@include('partials.footer')
	@include('partials.meta-foot')
	</footer>
</body>
</html>

