<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	protected $fillable = [
		'name',
		'price',
	];
	
	public function colours() {
		return $this->hasMany(ProductColour::class, 'product_id');
	}
}
