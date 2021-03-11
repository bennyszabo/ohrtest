<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductColour;
use App\Models\ProductColourSize;
use App\Models\ProductLog;

class DatabaseSeeder extends Seeder {

	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$products = Product::get();
		$productCount = count($products);
		echo "\n";
		
		foreach ($products as $index => $product) {
			$colNum = rand(1,10);
			$cols = ['Red', 'Blue', 'Green', 'White', 'Black', 'Yellow', 'Pink', 'Brown', 'Purple', 'Grey'];
			for ($i = 1; $i <= $colNum; $i++) {
				$colKey = array_rand($cols);
				$col = ProductColour::create([
					'product_id' => $product->id,
					'name' => $cols[$colKey]
				]);
				unset($cols[$colKey]);
				
				ProductColourSize::create([
					'colour_id' => $col->id,
					'name' => 'Small'
				]);
				
				ProductColourSize::create([
					'colour_id' => $col->id,
					'name' => 'Large'
				]);
				
				ProductColourSize::create([
					'colour_id' => $col->id,
					'name' => 'Extra Large'
				]);
			}
			
			echo ($index + 1) . " of " . $productCount . " products have been processed\n";
	
		}
		
		$sql = "
			INSERT INTO `customer_detail`
			(`id`, `name`, `phone_number`)
			VALUES
			(NULL, 'Doug the head', '07741268459'),
			(NULL, 'Bullet Tooth Tony', '07658915987'),
			(NULL, 'Gorgeous George', '07321942863'),
			(NULL, 'Franky Four-Fingers', '07459874936')
		";
		DB::update($sql);
		
		$sql = "
			INSERT INTO `call_record`
			(`id`, `incoming_number`, `outgoing_number`, `duration`, `dialed_on`)
			VALUES
			(NULL, '07741268459', '07658915987', '120', '2020-01-02'),
			(NULL, '07741268459', '07658915987', '65', '2020-01-03'),
			(NULL, '07321942863', '07459874936', '10', '2020-01-02'),
			(NULL, '07321942863', '07658915987', '180', '2020-01-15'),
			(NULL, '07321942863', '07459874936', '150', '2020-02-07'),
			(NULL, '07459874936', '07741268459', '150', '2020-01-02'),
			(NULL, '07459874936', '07658915987', '150', '2020-01-02')
		";
		DB::update($sql);
		
		$products = Product::limit(1000)
				->orderBy('id')
				->get()
				->keyBy('id')
				->toArray();
		
		for ($i = 0; $i < 10000000; $i++) {
			$id = rand(1,1000);
			ProductLog::create([
				'message' => 'Product ' . $products[$id]['name'] . ' has been viewed'
			]);
		}
	}

}
