@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')
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
