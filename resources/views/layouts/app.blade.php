<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>@yield('page-title', 'Usuários') | Crud Simples Com Laravel 8</title>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Heidy Miguel" name="author">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
</head>
<body>
	<header>
		<h1>@yield('title')</h1>
	</header>
	<main>
		@section('main')
		@show
	</main>
	<footer>
		<p>Crud Simples Com Laravel 8</p>
	</footer>
</body>
</html>