<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', config('app.nick_name') . ' - 403')</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <script src="{{ asset('js/script.js') }}" defer=""></script>
    <link  rel="icon"   href="/img/logoc.png" type="image/png"/>
</head>
<body>
<br><br><br>
	<div class="container">
		<div class="row align-items-end">
			<div class="col">
				<h1 class="display-4 text-primary text-center font-weight-bold">403</h1>
				<h3 class=" text-primary text-center">Acceso denegado.</h3>
				<img class="mx-auto d-block" src="/img/page_403.svg" alt="Control de Visitas" width="60%">
				<a class="btn btn-link btn-block" href="/">Volver al inicio</a>
			</div>

		</div>
	</div>
</body>
</html>