<?php
/**
 * Event (GAME FEST) register form.
 * @author Alejandro Mostajo
 * @version v.1.0.0
 */
?>
<form method="POST">

	<h2>@lang('gamefest.section_contact')</h2>

	<div class="form-group">
    <label for="companyName">@lang('gamefest.company_name')</label>
    <input type="text" class="form-control" id="companyName" name="companyName">
  </div>

	<div class="form-group">
    <label for="companyEmail">@lang('gamefest.company_email')</label>
    <input type="email" class="form-control" id="companyEmail" name="companyEmail">
  </div>

	<div class="form-group">
    <label for="companyPhone">@lang('gamefest.company_phone')</label>
    <input type="text" class="form-control" id="companyPhone" name="companyPhone">
  </div>

	<div class="form-group">
    <label for="contactName">@lang('gamefest.contact_name')</label>
    <input type="text" class="form-control" id="contactName" name="contactName">
  </div>

	<h2>@lang('gamefest.section_product')</h2>

	<div class="form-group">
    <label for="gameName">@lang('gamefest.game_name')</label>
    <input type="text" class="form-control" id="gameName" name="gameName">
  </div>

	<div class="form-group">
    <label for="website">@lang('gamefest.website')</label>
    <input type="text" class="form-control" id="website" name="website">
  </div>

  <div class="form-group">
    <label for="gameStatus">@lang('gamefest.game_status')</label>
    <select class="form-control" name="gameStatus">
      @foreach (Lang::get('gamestatus') as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="platforms">@lang('gamefest.platforms')</label>
  </div>
  <div class="row">
    @foreach (Lang::get('platforms') as $key => $value)
      <div class="col-sm-3">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="platforms[{{ $key }}]" value="{{ $key }}">
            {{ $value }}
          </label>
        </div>
      </div>
    @endforeach
  </div>

</form>