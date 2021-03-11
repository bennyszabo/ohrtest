<?php

namespace App\Http\Controllers;

use App\Models\Product;

class Task6Controller extends Controller {
	
	public function index() {
		$products = Product::orderBy('price')
				->get();
		
		return view('task.task6.index', ['products' => $products]);
	}

	public function submit() {
	}
}
