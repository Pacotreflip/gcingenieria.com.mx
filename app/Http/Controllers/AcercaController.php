<?php

namespace App\Http\Controllers;

class AcercaController extends Controller
{

	/**
	 * Display ¿Quienes Somos?.
	 *
	 * @return Response
	 */
	public function acerca()
	{
		return view('front.acerca');
        }
}
