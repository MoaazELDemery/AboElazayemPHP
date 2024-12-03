@extends('layout.frontend.min')
@section('content')
@if (app()->getLocale() == 'ar')
<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        <h1 style="text-align: center; ">{{ $Books->name_ar}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service-single-section ">
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                    <iframe src="{{asset('storage/EltasofBook/pdf/'.$Books->pdf)}}" width="100%" height="700"></iframe>

                </div>
            </div>
        </div>

    </div> <!-- end container -->
</section>

@else
@if($Books->name_en==null)
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Not Found</h2>
                    <!-- <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><span>Blog</span></li>
                                            </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        <h1 style="text-align: center; ">{{ $Books->name_en}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="service-single-section ">
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                    <iframe src="{{asset('storage/EltasofBook/pdf/'.$Books->pdf)}}" width="100%" height="700"></iframe>

                </div>
            </div>
        </div>

    </div> <!-- end container -->
</section>
@endif
@endif

@endsection