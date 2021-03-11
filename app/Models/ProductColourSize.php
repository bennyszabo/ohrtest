<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductColourSize extends Model {

	protected $table = 'product_colour_sizes';
	protected $fillable = [
		'name', 'colour_id'
	];
	
	public function colour() {
		return $this->belongsTo(ProductColour::class, 'colour_id');
	}
}
