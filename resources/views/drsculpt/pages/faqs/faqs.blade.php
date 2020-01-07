@extends('drsculpt.master')
<!-- Style.css-->
<link rel="stylesheet" href="/drsculpt/assets/css/faqs.css">

@section('content')

    <div class="wrapper">
        {{-- @include('drsculpt.pages.faqs.elements.sub-header') --}}
        @include('drsculpt.pages.faqs.elements.content')
    </div>

@endsection