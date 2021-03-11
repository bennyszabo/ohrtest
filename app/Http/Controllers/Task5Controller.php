<?php

namespace App\Http\Controllers;

use Log;

class Task5Controller extends Controller {
	
	public function index() {
		Log::alert('Alert message');
	}

}
