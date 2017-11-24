<html>
<head>
	@include('includes.head')
</head>
	<body style="margin-top: 80px">
		<div class="container">
			<header class="row">
				@include('includes.header')
			</header>
			<div id="main" class="row" style="margin-left: 60px;margin-right: 60px">
				@yield('content')
			</div>
			
			<footer>
				@include('includes.footer')
			</footer>
		</div>
	</body>
</html>