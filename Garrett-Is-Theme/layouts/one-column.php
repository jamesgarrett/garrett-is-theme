<!DOCTYPE html>
<html lang="en">
<!-- One Column PHP -->
<head>
	@include('partials.meta-head')
</head>
<body {{body_class()}}>
	 <header id="top" class="top--menu">
	    	@include('partials.header')
	</header>
	<div id="app">
	    <main class="app--col">
	    	@yield('main')
	    	@include('partials.footer')
	    </main>
    </div>
    <footer>
	@include('partials.meta-foot')
	</footer>
</body>
</html>

