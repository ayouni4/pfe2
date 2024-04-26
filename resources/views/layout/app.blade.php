
<!DOCTYPE HTML>
<html lang="fr">

<head>
	<title>@yield('title')-t1</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="/frontend/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('assets/app.css')}}">
	<!-- Style-CSS -->
	<link href="/frontend/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>


	<div class="main-bg">
		<!-- title -->
		<h1>@yield('title')</h1>
		<!-- //title -->
        @yield('content')
	
		
	</div>
</body>

</html>