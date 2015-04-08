<html lang="{{ App::getLocale() }}">
	<head>
 	<meta charset="utf-8">
		<title>@yield('title') - @lang('global.igda_cr')</title>
  	<link href="{{ URL::asset('css/uikit.css') }}" rel="stylesheet">
		@section('head')
		@show
	</head>
	<body>
		@include('html.nav')
		@section('content-no-width')
		@show
		<div class="uk-container uk-container-center">
			@section('content')
			@show
		</div>
		@section('foot')
		@show
	</body>
</html>
