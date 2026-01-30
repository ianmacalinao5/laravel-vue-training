<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Practice Laravel Routing')</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="max-w-7xl mx-auto p-5">
	{{ $slot }}
</body>

</html>