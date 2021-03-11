<?php

namespace App\Helpers;

class PriceBandCreator {

	const MAXPERCENTINBAND = 20;
	const MINPERCENTINBAND = 10;

	protected $bands = [];
	protected $minThreshold;
	protected $maxThreshold;
	protected $roundToTen;

	public function __construct($products) {
		
		$minPrice = $products->pluck('price')->min();
		$maxPrice = $products->pluck('price')->max();
		
		$this->bands = [
			[
				'min' => $minPrice,
				'max' => $maxPrice,
				'products' => $products
			]
		];
		$productCount = count($products);
		$this->minThreshold = (int) round($productCount * static::MINPERCENTINBAND / 100);
		$this->maxThreshold = (int) round($productCount * static::MAXPERCENTINBAND / 100);

		if ($maxPrice - $minPrice > 30) {
			$this->roundToTen = true;
		} else {
			$this->roundToTen = false;
		}

		$this->process();
	}

	public function getBands() {
		return $this->bands;
	}

	protected function process() {
		$this->splitLargeBands();
		$this->mergeSmallBands();
	}

	protected function mergeSmallBands() {
		$i = 0;

		while ($i < count($this->bands) && count($this->bands) > 2) {
			if (count($this->bands[$i]['products']) < $this->minThreshold) {
				$this->mergeBand($i);
				$i = 0;
			} else {
				$i++;
			}
		}
	}

	protected function mergeBand($index) {
		if ($index == 0) {
			$index2 = 1;
		} elseif ($index == count($this->bands) - 1) {
			$index2 = $index - 1;
		} else {
			$count1 = count($this->bands[$index - 1]['products']);
			$count2 = count($this->bands[$index + 1]['products']);

			if ($count1 <= $count2) {
				$index2 = $index - 1;
			} else {
				$index2 = $index + 1;
			}
		}

		$band = [
			'min' => min($this->bands[$index]['min'], $this->bands[$index2]['min']),
			'max' => max($this->bands[$index]['max'], $this->bands[$index2]['max']),
			'products' => array_merge($this->bands[$index]['products'], $this->bands[$index2]['products']),
		];

		unset($this->bands[$index]);
		unset($this->bands[$index2]);
		$this->bands[] = $band;
		usort($this->bands, array($this, 'sortBands'));
		$this->bands = array_combine(range(0, count($this->bands) - 1), array_values($this->bands));
	}

	protected function splitLargeBands() {
		$ok = false;

		$i = 0;
		while (!$ok && $i < 10) {
			$bands = $this->bands;
			$this->bands = [];
			foreach ($bands as $band) {
				if (count($band['products']) > $this->maxThreshold) {
					$this->splitBand($band);
				} else {
					$this->bands[] = $band;
				}
			}

			if (count($bands) == count($this->bands)) {
				$ok = true;
			}

			$i++;
		}
	}

	protected function splitBand($band) {
		$min1 = $band['min'];
		$max2 = $band['max'];
		if ($this->roundToTen) {
			$max1 = round($min1 + floor(($max2 - $min1) / 2), -1);
		} else {
			$max1 = $min1 + floor(($max2 - $min1) / 2);
		}

		if ($min1 == $max1 || $max1 == $max2) {
			$this->bands[] = $band;
			return;
		}

		$band1 = [
			'min' => $min1,
			'max' => $max1,
			'products' => [],
		];

		$band2 = [
			'min' => $max1,
			'max' => $max2,
			'products' => [],
		];

		foreach ($band['products'] as $product) {
			if ($product->price <= $max1) {
				$band1['products'][] = $product;
			}
			if ($product->price >= $max1) {
				$band2['products'][] = $product;
			}
		}

		$this->bands[] = $band1;
		$this->bands[] = $band2;
	}

	protected function sortBands($a, $b) {
		if ($a['min'] < $b['min']) {
			return -1;
		}

		if ($a['min'] > $b['min']) {
			return 1;
		}

		return 0;
	}

}
