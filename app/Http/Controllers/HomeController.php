<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

	/**
	 * Display the Index page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('front.index');
        }
}
