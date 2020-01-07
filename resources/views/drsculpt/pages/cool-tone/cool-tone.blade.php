@extends('drsculpt.master')
<!-- Style.css-->
<link rel="stylesheet" href="/drsculpt/assets/css/cool-sculpting-tone.css">

@section('content')
    <div class="cool-sculpting-tone">
        <div id="cool-tone">
            @include('drsculpt.pages.cool-tone.elements.slider')
            @include('drsculpt.pages.cool-tone.elements.howitwork')
            @include('drsculpt.pages.cool-tone.elements.where-treat')
            {{-- @include('drsculpt.pages.cool-tone.elements.journey') --}}
        </div>
    </div>

@endsection