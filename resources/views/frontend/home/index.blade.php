@extends('frontend.layouts.master')
@section('title', 'Aduca - Hệ thống học trực tuyến')

@section('content')
    <div class="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>
    @include('frontend.home.components.hero')
    @include('frontend.home.components.feature')
    @include('frontend.home.components.category')
    @include('frontend.home.components.new-course')
    @include('frontend.home.components.rating-course')
    @include('frontend.home.components.funfact')
    @include('frontend.home.components.cta')
    @include('frontend.home.components.testimonial')

    <div class="section-block"></div>

    @include('frontend.home.components.about')

    <div class="section-block"></div>

    @include('frontend.home.components.register')

    <div class="section-block"></div>

    @include('frontend.home.components.client')

    @include('frontend.home.components.blog')

    @include('frontend.home.components.get-started')

    @include('frontend.home.components.subscriber')
@endsection
