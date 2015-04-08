<?php namespace IGDA\Http\Controllers;

class IndexController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function localizator()
	{
		return redirect()->route('index');
	}

}
