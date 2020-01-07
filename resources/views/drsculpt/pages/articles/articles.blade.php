@extends('drsculpt.master')
<!-- Style.css-->
<link rel="stylesheet" href="/drsculpt/assets/css/articles.css">

@section('content')

    <div class="wrapper">
        @include('drsculpt.pages.articles.elements.sub-header')
        @include('drsculpt.pages.articles.elements.content')
    </div>

@endsection