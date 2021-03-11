@extends('base')

@section('title', 'Find the bugs')
@section('content')
<p>
	This task has an algorithm for creating price bands based on a product list.
	The working version can be found on our website, eg 
	<a href='https://www.plumbworld.co.uk/single-ended-baths-762-0000' target="_blank">https://www.plumbworld.co.uk/single-ended-baths-762-0000</a>
	where you can filter products by price.
	<br/>
</p>
<p>
<ul>
	<li>A helper class (App\Helpers\PriceBandCreator) takes a list of products and 
	based on their prices it creates price bands.</li>
	<li>Each band should have a minimum and maximum % of the products, in this case
	it's minimum 10% and maximum 20%.</li>
	<li>Prices have to be rounded to 10.</li>
</ul>
</p>
<p>
	Task2Controller has a test case prepared which should give the following result:
	<br/>
	<br/>
<table>
	<tbody><tr>
			<th>Price (from)</th>
			<th>Price (to)</th>
			<th>Products</th>
		</tr>
		<tr>
			<td>£80</td>
			<td>£110</td>
			<td>
				<ul>
					<li>Parallel Bush Tap Reseating Tools (Flat &amp; Bevelled) - £104.97</li>
					<li>Universal Tap Reseating Kit - £109.97</li>
					<li>Basin Wrench (327R) - £84.97</li>
					<li>Pop up waste tool (325L) - £94.97</li>
					<li>Tap Reseating Kit 460U - £99.97</li>
				</ul>
				Total: 5 products
			</td>
		</tr>
		<tr>
			<td>£110</td>
			<td>£120</td>
			<td>
				<ul>
					<li>Box Ring Immersion Heater Spanner with Tommy Bar 86mm (358J) - £119.97</li>
					<li>Flat Immersion Heater Spanner (360Q) - £119.97</li>
					<li>Cranked Immersion 86mm 3.3/8" Heater Spanner (359M) - £119.97</li>
				</ul>
				Total: 3 products
			</td>
		</tr>
		<tr>
			<td>£120</td>
			<td>£130</td>
			<td>
				<ul>
					<li>Lockshield three legged radiator valve key (2056D) - £124.97</li>
					<li>Multi Purpose Four Way Utility Meter Key (2059M) - £124.97</li>
					<li>Radiator Step Wrench - £124.97</li>
				</ul>
				Total: 3 products
			</td>
		</tr>
		<tr>
			<td>£130</td>
			<td>£190</td>
			<td>
				<ul>
					<li>3-22mm Copper Pipe Cutter (264Y) - £179.99</li>
					<li>12.7-44mm Copper Pipe Cutter (266E) - £189.97</li>
					<li>1 1/4" Diff By Pass Valve USVR M/F - £130</li>
					<li>1/2" 6 Bar M/F Pressure Relief Valve MSL - £134.97</li>
					<li>Malleable Iron - Tee Handle Manhole Keys (Pair) - £134.97</li>
					<li>Master Power Plunger - £134.97</li>
				</ul>
				Total: 6 products
			</td>
		</tr>
		<tr>
			<td>£190</td>
			<td>£600</td>
			<td>
				<ul>
					<li>Fernox F1 Super Concentrate Protector - All Boilers 290ml - 56700 - £449.99</li>
					<li>Fernox F4 Super Concentrate Internal Leak Sealer 290ml - 56703 - £590.66</li>
					<li>Drain Unblocker Steel Container - £199.97</li>
					<li>Plumbers 100 x 100mm Inspection Mirror. (798T) - £199.97</li>
					<li>Brass Float Valve Low Pressure PT1 - £199.97</li>
					<li>Crown Water Heater 10 Litre Oversink - £199.97</li>
					<li>Crown Water Heater 10 Litre Undersink - £199.97</li>
				</ul>
				Total: 7 products
			</td>
		</tr>
	</tbody>
</table>
<br/>
The helper class has a few bugs as it gives a wrong result:
<ul>
	<li>Prices are not rounded properly</li>
	<li>There are bands with 2 products which is less than the defined 10%</li>
	<li><i>1 1/4" Diff By Pass Valve USVR M/F</i> is in 2 different bands at the same time,
		it should be in £130-£140 only</li>
</ul>
</p>
<p>
	Please find the bugs in PriceBandCreator class and fix them.
</p>
<p class="testlink"><a target="_blank" href="{{ action('Task2Controller@index') }}">Test it</a></p>
@endsection