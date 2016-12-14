{{-- Load Header --}} 
@include('templates.partials.html.header')
<?php use App\Http\Request; ?> {{-- Main div --}}
<div class="ui container">
	<div class="ui grid">
		<div class="row">
			<div class="four wide column blue">MENU</div>
			<div class="twelve wide column">@yield('content')</div>
		</div>
		<div class="row red">
			<div class="sixteen wide column center">Footer</div>
		</div>
	</div>
</div>
{{-- Load Js --}} 
@include('templates.partials.html.js') 
{{-- Load Close Html --}} 
@include('templates.partials.html.closer')
