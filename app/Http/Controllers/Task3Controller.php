<?php

namespace App\Http\Controllers;

class Task3Controller extends Controller {
	
	protected $data = [
		['min' => 5, 'max' => 9],
		['min' => 15, 'max' => 51],
		['min' => 52, 'max' => 100],
	];
	
	public function index() {
		return view('task.task3.index');
	}

	public function submit() {
		return view('task.task3.result');
	}
}
