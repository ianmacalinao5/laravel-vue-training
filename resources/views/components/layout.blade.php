<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel Eloquent</title>
	@vite('resources/css/app.css')
</head>

<body class="p-4">
	<nav class="max-w-7xl mx-auto bg-gray-100 rounded-lg py-2 px-5 flex gap-2">
		<a href="{{ route('home') }}" @class([
			'text-xl py-2 px-3 rounded-lg transition',
			'bg-gray-200 font-semibold' => request()->routeIs('home'),
			'hover:bg-gray-200' => !request()->routeIs('home'),
		])>
			Home
		</a>

		<a href="{{ route('users.index') }}" @class([
			'text-xl py-2 px-3 rounded-lg transition',
			'bg-gray-200 font-semibold' => request()->routeIs('users.*'),
			'hover:bg-gray-200' => !request()->routeIs('users.*'),
		])>
			Users
		</a>
	</nav>

	<main class="max-w-7xl mx-auto mt-10 px-5">
		{{ $slot }}
	</main>
</body>

</html>