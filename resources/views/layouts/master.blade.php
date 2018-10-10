<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/master.css">
	<link rel="stylesheet" type="text/css" href="/css/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
	</style>
</head>
<body>
	<!-- container -->
	<div class="container">
		<div class="top-header">
			<ul>
			  <li><a class="active" href="/">Home</a></li>
			  <li><a href="/matkul">Matkul</a></li>
			  <li><a href="/tugas">Tugas</a></li>
			  <li><a href="/tugas">Mahasiswa</a></li>
			</ul>
		</div>

		<div class="conten">
		<br>

		@yield('content')
		
		</div>

		<footer class="footer">
			<hr>
			<p>
				&copy; Yuda Karnaen | STMIK Bumigora 2018
			</p>
		</footer>
	</div>
</body>
</html>