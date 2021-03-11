<?php

namespace App\Http\Controllers;

use App\Helpers\PriceBandCreator;
use App\Models\Product;

class Task2Controller extends Controller {
	
	public function index() {
		
		$products = Product::where('id', '<=', 24)
				->get();
		
		$helper = new PriceBandCreator($products);
		
		return view('task.task2.index', ['bands' => $helper->getBands()]);
	}

}
