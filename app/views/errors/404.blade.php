@extends('templates/sidebar')

@section('content')

<div class="error-container">
    <div class="well">
        <h1 class="grey lighter smaller">
            <span class="blue bigger-125">
                <i class="icon-sitemap"></i>
                404
            </span>
            Page Not Found
        </h1>

        <hr>
        <h3 class="lighter smaller">We looked everywhere but we couldn't find it!</h3>

        <hr>
        <div class="space"></div>

        <div class="center">
            <a href="{{ URL::previous() }}" class="btn btn-grey">
                <i class="icon-arrow-left"></i>
                Go Back
            </a>

            <a href="{{ route('home') }}" class="btn btn-primary">
                <i class="icon-dashboard"></i>
                Dashboard
            </a>
        </div>
    </div>
</div>

@stop