@php
    use App\Country;
@endphp
<div class="ui vertical fluid menu">
    <a class="item" href="{!! route('countries.index') !!}">
        Pays
        <div class="ui teal left pointing label">{{ Country::getCount() }}</div>
    </a>
</div>