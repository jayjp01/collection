@extends('template')

@section('title')
    Wizard Dashboard
@stop

@section('ng-app')
    <html lang="en" ng-app="bindExample">
    @stop

    @section('content')
    @include('header')
           <div class="tmpl-watnad" ng-controller="ExampleController">
    <form name="wantadForm" novalidate>
        <!-- posting main content start here -->
        <div class="container">
            <!-- posting content start here -->
            <div class="margin-top-bottom-border">
                <div class="container-posting">
                    <h1>Post Your Requirements</h1>
                    <div class="row row-padding-none" ng-cloak>
                        <div class="col-sm-8 col-md-8 col-xs-12">
                            <div class="left-side-div">
                                <div class="property-location-div">
                                    @include('testproject.user')
                                    @include('testproject.topCategory')
                                    @include('testproject.adType')
                                    @include('testproject.propertyType')

                                </div>
                                <div class="posting-location-chosse margin-top">
                                    @include('testproject.city')
                                    @include('testproject.location')
                                    @include('testproject.project')
                                    @include('testproject.test')
                                    @include('configure')
                                <div class="border-shadow"><span>&nbsp;</span></div>

                             </div>
                        </div>
                    </div>
                </div>
            </div><!-- posting content end here -->
        </div><!-- posting main content end here -->
    </form>
</div>
        @stop

    @section('scripts')
        @parent
        <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
@stop