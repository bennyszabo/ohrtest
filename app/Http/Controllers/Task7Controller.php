<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductLog;

class Task7Controller extends Controller {
	
	public function index() {
		$started = microtime(true) - LARAVEL_START;
		
		/* Logic starts here */
		
		$log = ProductLog::orderBy('created_at', 'DESC')
				->limit(50)
				->get();
		
		$ids = [];
		for($i = 1; $i <= 20; $i++) {
			$ids[] = rand(1, 200);
		}
		
		$products = Product::whereIn('id', $ids)
				->get();
		
		foreach ($products as $product) {
			$message = $product->name . ' has been viewied. Available colors and sizes: ';
			
			foreach ($product->colours()->get() as $colour) {
				$message .= $colour->name . ': ';
				
				foreach ($colour->sizes()->get() as $size) {
					$message .= $size->name . ', ';
				}
				
				$message .= ' | ';
			}
			
			ProductLog::create([
				'message' => $message
			]);
		}
		
		
		/* Logic finishes here */
		
		$finished = microtime(true) - LARAVEL_START;
		
		$html = view('task.task7.index', [
			'log' => $log,
			'products' => $products
		])->render();
		
		$time = ($finished - $started);
		var_dump('Time: ' . round($time, 2) . ' seconds');
		return $html;
	}
}
