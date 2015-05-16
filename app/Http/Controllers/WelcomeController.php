<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Mail;
use Laracasts\Flash\Flash;

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

	public function email(Request $request)
	{
        $email = 'he-dq@foxmail.com';
//		$email = 'niu2yue@gmail.com';
		$name = '';
		$subject = 'You hava a new customer!';

		//content
		$customName = $request->input('name');
		$customEmail = $request->input('email');
		$customMsg = $request->input('message');

		$data = ['email' => $email, 'name' => $name, 'subject' => $subject,
			'customName' => $customName, 'customEmail' => $customEmail, 'customMsg' => $customMsg];
		Mail::send('emails.testmail', $data, function ($message) use ($data) {
			$message->to($data['email'])->subject($data['subject']);
		});
//		FLASH::success('Welcome aboard!');

		return 'Your email has been sent and we will serve you ASAP !';
	}

	public function prevtting()
	{
		return view('welcome.prevtting');
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

	public function copy()
	{
		return view('welcome.copy');
	}
}
