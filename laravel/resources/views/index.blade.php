@extends('master')

@section('styles')
	<link href="{{ asset('/include/countdown/jquery.countdown.css') }}" rel="stylesheet">
@stop

@section('scripts')
	<script src="{{ asset('/include/countdown/jquery.plugin.min.js') }}"></script>
	<script src="{{ asset('/include/countdown/jquery.countdown.min.js') }}"></script>
@stop

@section('title', trans('global.event', ['year' => '2015']))

@section('content')

	<div class="hero">
		<div class="countdown" data-date="{{ Config::get('igda.event_date') }}"></div>
	</div>

@stop