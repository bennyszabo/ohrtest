<form action="{{ url()->current() }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="from" value="" placeholder="From" />
	-
	<input type="text" name="to" value="" placeholder="To" />
	<br/>
	<br/>
	<button type="submit">Submit</button>
</form>