@extends('base')

@section('title', 'SQL')
@section('content')

<p>
	A telecom company charges its customers for both incoming and outgoing
	calls by the number of call units.<br/>
	A call unit is an internal representation of the amount that the
	company should charge its customers.
	It maintains the records of all the calls made on its network in table,
	<i>call_record</i>, storing information such as incoming number,
	outgoing number, duration of the call and the date on which the
	call was made. 
</p>
<p>
	Write a query for calculating the billing of all the customers for
	the month of Jan 2020. The order of output does not matter and
	should only include customers who have made or received any calls
	in the given period.<br/>
	The result should be in the following format:
	name phone number call_units
</p>
<p>
	The company calculates charges as follows:
<ul>
	<li>
		For incoming calls, a standard charge of 1 call unit/second is levied.
		Example: For an incoming call of 2 minutes 30 seconds,
		150 call units will be charged
	</li>
	<li>
		For outgoing calls, a fixed charge of 500 call units is charged
		for the first 2 minutes of a call, then 2 call units/second is
		levied against the remainder.
		Example: For a call of 3 minutes, 620 call units will be
		charged (500 + 60*2)		
	</li>
</ul>
There are 2 tables in the database: <br/>
<i>customer_detail</i> 
<br/>
<br/>
<table>
	<tr>
		<th>Name</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>id</td>
		<td>INTEGER</td>
		<td>This is the customer's id. It is the primary key</td>
	</tr>
	<tr>
		<td>name</td>
		<td>STRING</td>
		<td>Customer's name</td>
	</tr>
	<tr>
		<td>phone_number</td>
		<td>STRING</td>
		<td>Customer's phone number</td>
	</tr> 
</table>
<br/>

<i>call_record</i>
<br/>
<br/>
<table>
	<tr>
		<th>Name</th>
		<th>Type</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>id</td>
		<td>INTEGER</td>
		<td>This the record id</td>
	</tr>
	<tr>
		<td>incoming_number</td>
		<td>STRING</td>
		<td>Incoming number or the call recipient's number</td>
	</tr>
	<tr>
		<td>outgoing_number</td>
		<td>STRING</td>
		<td>Outgoing number or the call dialer's number</td>
	</tr>
	<tr>
		<td>duration</td>
		<td>INTEGER</td>
		<td>Call duration in seconds</td>
	</tr> 
	<tr>
		<td>dialed_on</td>
		<td>DATE</td>
		<td>Call's date</td>
	</tr> 
	              
</table>
<br/>
Name the columns as <i>name</i>, <i>phone</i> and <i>unit</i>

</p>
<p>
	Task1Controller is prepared, you only have to write the SQL.
</p>
<p class="testlink"><a target="_blank" href="{{ action('Task1Controller@index') }}">Test it</a></p>
@endsection