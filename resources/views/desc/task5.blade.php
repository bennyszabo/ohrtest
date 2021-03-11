@extends('base')

@section('title', 'Extend Laravel')
@section('content')
<p>Extend laravel's default logging system, when
	<i>Log::alert('Any message')</i> is called it dumps an "Alert test" (var_dump("Alert test")) message to the output.</p>
<p>
<ul>
	<li>Don't worry about other functions, <i>debug</i>, <i>notice</i> etc</li>
	<li>Don't worry about specific log channels, eg <i>Log::channel('daily')->alert('...')</i> doesn't have to work this way</li>
</ul>
</p>
<p>
	Task5Controller already has Log::alert() call.
</p>
<p class="testlink"><a target="_blank" href="{{action('Task5Controller@index')}}">Test it</a></p>
@endsection