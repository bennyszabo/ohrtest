<form action="{{ url()->current() }}" method="post">
	{{ csrf_field() }}
	<select name='product_id'>
		@foreach ($products as $product)
		<option value='{{ $product->id }}'>{{ $product->name }}</option>
		@endforeach
	</select>
	<br/>
	<br/>
	<button type="submit">Submit</button>
</form>