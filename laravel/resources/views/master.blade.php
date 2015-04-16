<html lang="{{ App::getLocale() }}">
	<head>
 		<meta charset="utf-8">
		<title>@yield('title') - @lang('global.igda_cr')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		@section('styles')
		@show
		<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
		@section('head')
		@show
	</head>
	<body>
		@include('html.nav')
		@section('content-no-container')
		@show
		<div class="container">
			@section('content')
			@show
		</div>
		@section('content-no-container2')
		@show
		@section('foot')
		@show
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		@section('scripts')
		@show
		<script src="{{ asset('js/jquery.base.js') }}"></script>
	</body>
</html>
