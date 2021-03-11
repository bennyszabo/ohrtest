@extends('base')

@section('title', 'Find the bugs')
@section('content')

<table>
	<tr>
		<th>Price (from)</th>
		<th>Price (to)</th>
		<th>Products</th>
	</tr>
	@foreach ($bands as $row)
	<tr>
		<td>£{{ $row['min'] }}</td>
		<td>£{{ $row['max'] }}</td>
		<td>
			<ul>
				@foreach ($row['products'] as $product)
				<li>{{ $product->name }} - £{{ $product->price}}</li>
				@endforeach
			</ul>
			Total: {{ count($row['products']) }} products
		</td>
	</tr>
	@endforeach
</table>
@endsection