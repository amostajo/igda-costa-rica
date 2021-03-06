{{-- TEMPLATE PART - NAV --}}
<div class="container">
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">

		      <li><a href="#">@lang('global.program')</a></li>
		      <li><a href="#">@lang('global.games')</a></li>
		      <li><a href="#">@lang('global.presenters')</a></li>
		      <li><a href="#">@lang('global.sponsors')</a></li>
		      <li><a href="{{ route('register') }}">@lang('global.register')</a></li>
        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>