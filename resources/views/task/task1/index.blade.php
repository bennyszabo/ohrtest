@extends('base')

@section('title', 'SQL')
@section('content')

<table>
	<tr>
		<th>Customer's name</th>
		<th>Customers phone</th>
		<th>Unit charged</th>
	</tr>
	@foreach ($data as $row)
	<tr>
		<td>{{ $row->name }}</td>
		<td>{{ $row->phone }}</td>
		<td>{{ $row->unit }}</td>
	</tr>
	@endforeach
</table>
@endsection