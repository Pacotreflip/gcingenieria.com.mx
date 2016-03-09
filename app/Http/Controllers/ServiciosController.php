<?php

namespace App\Http\Controllers;

class ServiciosController extends Controller
{

	/**
	 * Display ¿Quienes Somos?.
	 *
	 * @return Response
	 */
	public function servicios()
	{
		return view('front.servicios');
        }
}

