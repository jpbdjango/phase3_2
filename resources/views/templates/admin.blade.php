
@use(App\Http\Request)

{{-- Load Header --}}
@include('templates.partials.html.header')

{{-- Main div --}}
<div class="ui container">
	<div class="ui grid">
		<div class="row">
			<div class="column">
				@yield('page-header')
			</div>
		</div>
		<div class="row">
			<div class="four wide column">@yield('menu')</div>
			<div class="twelve wide column">@yield('content')</div>
		</div>
	</div>
</div>

{{-- Load Js --}}
@include('templates.partials.html.js') 

{{-- Load Close Html --}}
@include('templates.partials.html.closer')
