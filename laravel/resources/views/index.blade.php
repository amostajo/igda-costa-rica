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

	<div class="hero">

		<div class="row holder-logo">
			<div class="col-md-6 col-md-offset-3">
				<img src="{{ asset('img/GFCLogo_x555.png') }}" class="img-responsive" alt="@lang('global.igder_cr')">
			</div>
		</div>

		<div class="row holder-countdown">
			<div class="col-md-8 col-md-offset-2">
				<div class="countdown" data-date="{{ Config::get('igda.event_date') }}"></div>
			</div>
		</div>

		<div class="row holder-info">
			<div class="info">

				<span class="item">
					<span class="title">
						<span class="glyphicon glyphicon-calendar"></span> @lang('gamefest.date')
					</span>
					<span class="value">
						<span class="event-date">{{ date('F j, Y', strtotime(Config::get('igda.event_date'))) }}</span> 
					</span>
				</span>

				<span class="item">
					<span class="title">
						<span class="glyphicon glyphicon-time"></span> @lang('gamefest.hours')
					</span>
					<span class="value">
						<span class="event-hours">@lang('gamefest.hours_value')</span> 
					</span>
				</span>

				<span class="item">
					<span class="title">
						<span class="glyphicon glyphicon-map-marker"></span> @lang('gamefest.location')
					</span>
					<span class="value">
						<span class="event-location">@lang('gamefest.location_value')</span> 
					</span>
				</span>

			</div>
		</div>

	</div>

@stop

@section('content-no-container2')

	<div class="program">

		<div class="container">
			<div class="row">
				<div class="col-md-8 ">
					<h1>@lang('gamefest.about')</h1>
					<p>@lang('gamefest.about_message')</p>
				</div>
			</div>
		</div>

	</div>

@stop