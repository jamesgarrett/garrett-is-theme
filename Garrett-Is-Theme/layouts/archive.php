<!DOCTYPE html>
<html lang="en">
<!-- ARCHIVE PHP -->
<head>
	@include('partials.meta-head')
</head>
<body {{body_class()}}>
	 <header id="top" class="top--menu">
	    	@include('partials.header')
	</header>
	<div id="app">
    	@include('partials.sidebar')
	    <main class="app--col col-right">
	    	@yield('main')
	    </main>
    </div>
    <footer>
    	@include('partials.footer')
		@include('partials.meta-foot')
	</footer>
</body>
</html>