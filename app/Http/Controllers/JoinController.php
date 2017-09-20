<?php

namespace App\Http\Controllers;

class JoinController extends Controller
{

		public function index()
		{
				$api_key = env('API_KEY');
				return view('join');
		}

}
