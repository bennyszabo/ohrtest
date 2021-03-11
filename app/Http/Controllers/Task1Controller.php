<?php

namespace App\Http\Controllers;

use DB;

class Task1Controller extends Controller {
	
	public function index() {
		
		/* Write your SQL here */
		
		$sql = "
			
		";
		
		$data = DB::select($sql);
		
		return view('task.task1.index', ['data' => $data]);
	}

}
