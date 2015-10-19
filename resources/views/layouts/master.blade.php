<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
	@section('title')
		Developer's Best Friend
	@show
	</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>
	<link href='/css/project.css' rel='stylesheet'>
	@yield('styles')
</head>

<body>
	<nav class ="navbar navbar-default">
		<div class ="container">
			<div class="navbar-header">
				<button type ="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/">Home</a></li>
					<li><a href="/loremipsum">Lorem Ipsum</a></li>
					<li><a href="/randomuser">Random User</a></li>

				</ul>
			</div>
		</div>
</nav>
@yield ('content')
</body>
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" </script>
</html>
