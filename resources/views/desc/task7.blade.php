@extends('base')

@section('title', 'Speed it up')
@section('content')
<p>
	This test page loads a few random products from the database, writes them
into the log with its available colours and sizes. It also loads the last 50
records from the log table then displays everything.
</p>
<p>
	The page loads very slowly, find the reason(s) why then speed it up. The
	code can be found in Task7Controller
</p>
<p class="testlink"><a target="_blank" href="{{action('Task7Controller@index')}}">Test it</a></p>
@endsection