<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductColour extends Model {

	protected $table = 'product_colours';
	protected $fillable = [
		'name', 'product_id'
	];
	
	public function sizes() {
		return $this->hasMany(ProductColourSize::class, 'colour_id');
	}
	
	public function product() {
		return $this->belongsTo(Product::class, 'product_id');
	}
}
