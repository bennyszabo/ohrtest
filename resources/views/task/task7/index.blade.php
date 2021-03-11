@extends('base')

@section('title', 'Speed it up')
@section('content')
<div class='container-fluid'>
	<div class='row'>
		<div class='col-6'>
			<h3>Products</h3>
			<table>
				@foreach ($products as $product)
				<tr>
					<td>
						{{ $product->name }}
					</td>
					<td>
						<strong>Colours:</strong>
							@foreach ($product->colours()->get() as $colour)
								{{ $colour->name }},
							@endforeach
						</ul>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		<div class='col-6'>
			<h3>Log</h3>
			<table>
				@foreach ($log as $item)
				<tr>
					<td>{{ $item->message }}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection