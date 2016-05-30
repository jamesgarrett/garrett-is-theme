<!DOCTYPE html>
<html lang="en">
<!-- Master PHP -->
<head>
	@include('partials.meta-head')
</head>
<body {{body_class()}}>
	 <header id="top" class="top--menu">
	    	@include('partials.header')
	</header>
    <main class="grid alt" >
    	<style type="text/css">.grid.alt{display:table-row;};</style>
    	@yield('main')
    </main>
    <footer>
    	@include('partials.footer')
		@include('partials.meta-foot')
	</footer>
</body>
</html>

