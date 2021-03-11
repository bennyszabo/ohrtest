@extends('base')

@section('title', 'OOP')
@section('content')
<p>
	The main goal of this task is to test your Object Oriented Programming skills
	designing the code for the following feature:
</p>
<p>
	The company has contracts with several courier companies and the system should
	decide which company to use for each order.
</p>
<p>
	Task6Controller has a test page implemented where a product and a postcode
	can be chosen then the system chooses the cheapest available courier and
	calculates the final delivery price.<br/>
</p>
<p>
	The base delivery price is £10 + the courier surcharge (if any).
</p>
<p>
	Each courier company has its own rules for availability and surcharges:
	<br/>
	<i>Royal Mail:</i>
	<ul>
		<li>Delivers everywhere in the UK without surcharge if the product is
			cheaper than £10.</li>
	</ul>
	<i>DHL:</i>
	<ul>
		<li>Delivers everywhere in the UK except Jersey (postcode starts with JE)
			without surcharge.</li>
	</ul>
	<i>Yodel:</i>
	<ul>
		<li>Delivers everywhere in the UK if the product price is less than £500.</li>
		<li>Charges £5 extra for each area.</li>
	</ul>
	<i>Palletways:</i>
	<ul>
		<li>Delivers everywhere in the UK.</li>
		<li>Charges £20 extra for Jersey</li>
	</ul>
</p>
<p>
	<i>Submit</i> function in Task6Controller handles the post request you, just
	need to add your code.
</p>
<p>
	Design your code using OOP and make it easily extendable. For example it
	should be easy to add a new courier company if necessary.
</p>
<p>
	Create your helper classes in App\Helpers\Delivery.
</p>
<p class="testlink"><a target="_blank" href="{{ action('Task6Controller@index') }}">Test it</a></p>

@endsection