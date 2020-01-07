{{-- {{dd($agent->isMobile())}} --}}
@extends('drsculpt.master')

@section('content')

    @if($agent->isMobile())
        @include('drsculpt.pages.home.elements.slider-m')
        @include('drsculpt.pages.home.elements.schedule-video-m')
    @else
        @include('drsculpt.pages.home.elements.slider')
        @include('drsculpt.pages.home.elements.schedule-video')
    @endif

    @include('drsculpt.pages.home.elements.cool-sculpt-tone')
    @include('drsculpt.pages.home.elements.why-drsculpt')
    @include('drsculpt.pages.home.elements.before-after')
    @include('drsculpt.pages.home.elements.medal')

    @if(!$agent->isMobile())
    @include('drsculpt.pages.home.elements.location')
    @endif
    

    {{-- <h1>HOME PAGE</h1> --}}
    {{-- <i class="material-icons">play_circle_outline</i> --}}
    <!--slider -->
    <!--End slider -->

@endsection