@extends('drsculpt.master')
<!-- Style.css-->
<link rel="stylesheet" href="/drsculpt/assets/css/prices.css">

@section('content')
    <div class="prices" id="prices">
        @include('drsculpt.pages.prices.elements.carousel')
    </div>
@endsection