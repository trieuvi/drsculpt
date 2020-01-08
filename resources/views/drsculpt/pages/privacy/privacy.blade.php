@extends('drsculpt.master')
<!-- Style.css-->
<link rel="stylesheet" href="/drsculpt/assets/css/privacy.css">

@section('content')

    <div class="wrapper">
        {{-- @include('drsculpt.pages.privacy.elements.sub-header') --}}
        @include('drsculpt.pages.privacy.elements.content')
    </div>

@endsection