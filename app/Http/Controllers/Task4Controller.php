<?php

namespace App\Http\Controllers;

use App\Models\Product;

class Task4Controller extends Controller {
	
	public function index() {
		$products = Product::orderBy('id')
				->limit(10)
				->get();
		
		return view('task.task4.index', [
			'products' => $products
		]);
	}

	public function submit() {
		return view('task.task4.result');
	}
}
