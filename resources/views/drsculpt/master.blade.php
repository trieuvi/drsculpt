<!DOCTYPE html>
<html lang="en">
<head>
    @include('drsculpt.partials.headtag')
</head>
<body>
	@include('drsculpt.partials.header')
	
	<div id="content">
		<!-- container data -->
		@yield('content')
		<!-- #container data -->
	</div>
    @include('drsculpt.partials.footer')
	@include('drsculpt.partials.jsloader')
	@yield('javascript')	
</body>
</html>
