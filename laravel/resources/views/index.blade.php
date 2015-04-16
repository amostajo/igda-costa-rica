@extends('master')

@section('styles')
	<link href="{{ asset('/include/countdown/jquery.countdown.css') }}" rel="stylesheet">
@stop

@section('scripts')
	<script src="{{ asset('/include/countdown/jquery.plugin.min.js') }}"></script>
	<script src="{{ asset('/include/countdown/jquery.countdown.min.js') }}"></script>
	@if (App::getLocale() == 'es')
		<script src="{{ asset('/include/countdown/jquery.countdown-es.js') }}"></script>
	@endif
@stop

@section('title', trans('global.event', ['year' => '2015']))

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<img src="{{ asset('img/GFCLogo_x555.png') }}" class="img-responsive" alt="@lang('global.igder_cr')">
		</div>
	</div>

	<div class="row text-center">
		<div class="col-md-8 col-md-offset-2">
			<div class="countdown" data-date="{{ Config::get('igda.event_date') }}"></div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<a class="btn btn-primary btn-lg btn-block" role="button">@lang('global.igda')</a>
		</div>
	</div>

@stop