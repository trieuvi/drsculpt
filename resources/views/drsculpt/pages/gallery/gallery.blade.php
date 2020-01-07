@extends('drsculpt.master')
<!-- Style.css-->
<link rel="stylesheet" href="/drsculpt/assets/css/gallery.css">

@section('content')

    <div class="gallery wrapper" id="gallery">
        @include('drsculpt.pages.gallery.elements.content')
    </div>

@endsection