<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
//	public function __construct()
//	{
//		$this->middleware('guest');
//	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome.index');
	}

	public function about()
	{
		return view('welcome.about');
	}

	public function service()
	{
//		return view('welcome.service');
		return view('welcome.prettying');

	}

	public function partner()
	{
		return view('welcome.partner');
	}

	public function contact()
	{
		return view('welcome.contact');
	}

	public function prettying()
	{
		return view('welcome.prettying');
	}

	public function consultancy()
	{
		return view('welcome.consultancy');
	}

	public function delivery()
	{
		return view('welcome.delivery');
	}

	public function pilotage()
	{
		return view('welcome.pilotage');
	}

	public function management()
	{
		return view('welcome.management');
	}
}
