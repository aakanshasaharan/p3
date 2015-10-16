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
@yield ('content')
</body>
</html>
