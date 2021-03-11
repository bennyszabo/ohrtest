@extends('base')

@section('title', 'Extend the functionality')
@section('content')
<p>
	Extend the existing <i>products</i> table in the database with a <i>code</i> field
	(it should be unique and varchar type)
	and add an update functionality. The test page already has a dropdown 
	with some products. On submitting the form the system should update the code
	of the selected product then display the old and the new value.
</p>
<p class="testlink"><a target="_blank" href="{{ action('Task4Controller@index') }}">Test it</a></p>
@endsection