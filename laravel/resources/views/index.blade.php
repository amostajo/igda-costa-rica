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
			<div class="col-xs-6 col-xs-offset-3">
				<img src="{{ asset('img/GFCLogo_x555.png') }}" class="img-responsive" alt="@lang('global.igda_cr')">
			</div>
		</div>

		<div class="row holder-countdown">
			<div class="col-sm-8 col-sm-offset-2">
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
						<span class="event-location"><a href="https://www.google.co.cr/maps/place/Centro+Nacional+de+la+Cultura/@9.9358799,-84.0723647,18z/data=!4m7!1m4!3m3!1s0x8fa0e363abf205c7:0xb88620bc0cf731e3!2sCentro+Nacional+de+la+Cultura!3b1!3m1!1s0x8fa0e363abf205c7:0xb88620bc0cf731e3?hl=en">@lang('gamefest.location_value')</a></span> 
					</span>
				</span>

			</div>
		</div>

	</div>

@stop

@section('content-no-container2')

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1 class="transformed">@lang('gamefest.about')</h1>
					<p>@lang('gamefest.about_message')</p>
				</div>
			</div>
		</div>
	</div>

	<div class="program">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="transformed">@lang('global.program')</h1>
					@include('gamefest.program')
				</div>
			</div>
		</div>
	</div>

	<div class="games">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="transformed">@lang('global.games')</h2>
					@lang('gamefest.tba')
				</div>
			</div>
		</div>
	</div>

	<div class="sponsors">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="transformed">@lang('global.sponsors')</h2>
					@lang('gamefest.tba')
				</div>
			</div>
		</div>
	</div>

	<div class="last-event">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="transformed">@lang('gamefest.last_year')</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<p>@lang('gamefest.last_year_message')</p>
					<div class="video-container">
						<iframe src="https://www.youtube.com/embed/wVS0vvxPpuM" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-5">
					<p>
						<blockquote>
							<p>@lang('gamefest.press_quote_1')</p>
							<footer>
								<a href="http://www.ameliarueda.com/nota/14-videojuegos-hechos-por-ticos-se-expondran-este-sabado">@lang('gamefest.link')</a> 
								@lang('gamefest.in') <cite title="Source Title">@lang('gamefest.press_cite_1')</cite>
							</footer>
						</blockquote>
					</p>
					<p>
						<blockquote>
							<p>@lang('gamefest.press_quote_2')</p>
							<footer>
								<a href="http://www.nacion.com/tecnologia/videojuegos/videojuegos-Costa_Rica-TreeInteractive-Green_Lava_Studios_0_1446455538.html">@lang('gamefest.link')</a> 
								@lang('gamefest.in') <cite title="Source Title">@lang('gamefest.press_cite_2')</cite>
							</footer>
						</blockquote>
					</p>
					<p>
						<blockquote>
							<p>@lang('gamefest.press_quote_3')</p>
							<footer>
								<a href="https://www.larepublica.net/app/cms/www/index.php?pk_articulo=533321977">@lang('gamefest.link')</a> 
								@lang('gamefest.in') <cite title="Source Title">@lang('gamefest.press_cite_3')</cite>
							</footer>
						</blockquote>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="register">
		<div class="container">
			<div class="row-fluid">
				<h2 class="transformed">@lang('gamefest.register')</h2>
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-default">
					  <div class="panel-body">
					    @include('gamefest.forms.register')
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="igda">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img src="{{ asset('img/igda_cr_logo.png') }}" class="img-responsive" alt="@lang('global.igda_cr')">
				</div>
				<div class="col-sm-8">
					<h1 class="transformed">@lang('gamefest.igda')</h1>
					<p>@lang('gamefest.igda_message')</p>
				</div>
			</div>
		</div>
	</div>

@stop