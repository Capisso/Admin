@extends('layouts/sidebar')

@section('content')

<div class="error-container">
    <div class="well">
        <h1 class="grey lighter smaller">
            <span class="blue bigger-125">
                <i class="icon-random"></i>
                500
            </span>
            Something Went Wrong
        </h1>

        <hr>
        <h3 class="lighter smaller">
            But we are working
            <i class="icon-wrench icon-animated-wrench bigger-125"></i>
            on it!
        </h3>

        <div class="space"></div>

        <div>
            <h4 class="lighter smaller">Meanwhile, try one of the following:</h4>

            <ul class="list-unstyled spaced inline bigger-110 margin-15">
                <li>
                    <i class="icon-hand-right blue"></i>
                    Read the faq
                </li>

                <li>
                    <i class="icon-hand-right blue"></i>
                    Give us more info on how this specific error occurred!
                </li>
            </ul>
        </div>

        <hr>
        <div class="space"></div>

        <div class="center">
            <a href="#" class="btn btn-grey">
                <i class="icon-arrow-left"></i>
                Go Back
            </a>

            <a href="#" class="btn btn-primary">
                <i class="icon-dashboard"></i>
                Dashboard
            </a>
        </div>
    </div>
</div>

@stop