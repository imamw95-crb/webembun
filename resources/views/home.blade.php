@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('home.hero')
    @include('home.rooms')
    @include('home.restaurant')
    @include('home.food-banner')
    @include('home.facilities')
    @include('home.gallery')
    @include('home.testimonials')
    @include('home.location')
    @include('home.cta')
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Mobile: non-fixed background for performance */
    @media (max-width: 768px) {
        .bg-fixed {
            background-attachment: scroll !important;
        }
    }
</style>
@endpush