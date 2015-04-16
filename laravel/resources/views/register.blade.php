@extends('master')
<?php
/**
 * Event (GAME FEST) register page.
 * @author Alejandro Mostajo
 * @version v.1.0.0
 */
?>
@section('title', trans('gamefest.register'))

@section('content')

	<div class="row-fluid">
		<h1>@lang('gamefest.register')</h1>
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

@stop