@extends('drsculpt.master')
<!-- Style.css-->
<link rel="stylesheet" href="/drsculpt/assets/css/cool-sculpting-tone.css">

@section('content')
    <div class="cool-sculpting-tone">
        <div id="cool-sculpting">
            @include('drsculpt.pages.cool-sculpting.elements.slider')
            @include('drsculpt.pages.cool-sculpting.elements.howitwork')
            @include('drsculpt.pages.cool-sculpting.elements.where-treat')
            @include('drsculpt.pages.cool-sculpting.elements.journey')
        </div>
    </div>

@endsection