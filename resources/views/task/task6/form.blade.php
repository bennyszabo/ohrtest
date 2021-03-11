<form action="{{ url()->current() }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="postcode" value="{{ request()->postcode ?? '' }}" placeholder="Postcode" />
	<br/>
	<br/>
	<select name='product'>
		@foreach ($products as $product)
		<option value='{{ $product->id }}' {{ (request()->product ?? 0) == $product->id ? 'selected' : '' }}>{{ $product->name }} (£{{ $product->price }})</option>
		@endforeach
	</select>
	<br/>
	<br/>
	<button type="submit">Submit</button>
</form>