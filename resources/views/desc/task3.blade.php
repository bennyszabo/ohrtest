@extends('base')

@section('title', 'Write the logic')
@section('content')
<p>
	The following small task is to prevent overlapping number ranges. <br/>
	<i>app/Http/Controllers/Task3Controller</i> has a few hardcoded ranges,
	when the user submits a new range, the system should validate if any of the ranges
	overlap and notify the user if they do so.
</p>
<p>Examples:</p>
<p>(the system allready has 9-15, 15-51, 52-100)</p>
<ul>
	<li>1-8, 16-20, 16-50, 101-200 are acceptable</li>
	<li>1-9, 1-12, 10-50, 1-200 are wrong</li>
</ul>
<p class="testlink"><a target="_blank" href="{{ action('Task3Controller@index') }}">Test it</a></p>
@endsection