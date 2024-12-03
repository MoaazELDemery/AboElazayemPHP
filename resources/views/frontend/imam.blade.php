@extends('layout.frontend.min')
@section('content')
<!-- wpo-about-area start -->
<div class="wpo-about-area-3 section-padding " style="padding: 120px 0 0 0;">
    <div class="container bg-about">
        <div class="wpo-about-wrap">
            @foreach ($Pupil_ones as $Pupil_one)
            @if (app()->getLocale() == 'ar')
            <div class="row div-media">
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $Pupil_one->name_ar }}</span>
                            <h2> {{ $Pupil_one->title_ar }}</h2>
                        </div>
                        <p>
                        <p>{!! $Pupil_one->description_ar !!}</p>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft " data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{ asset('storage/Pupil_one/' . $Pupil_one->photo) }}" alt="{{ $Pupil_one->title }}">
                    </div>
                </div>
            </div>
            @else
            @if($Pupil_one->description_en ==null)
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

            <div class="row div-media">
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $Pupil_one->name_en }}</span>
                            <h2> {{ $Pupil_one->title_en }}</h2>
                        </div>
                        <p>
                        <p>{!! $Pupil_one->description_en !!}</p>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{ asset('storage/Pupil_one/' . $Pupil_one->photo) }}" alt="{{ $Pupil_one->title }}">
                    </div>
                </div>
            </div>
            @endif
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- wpo-about-area end -->
<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row">

            <div class="col col-md-12">
                <div class="service-single-content">
                    @foreach ($Pupil_twos as $Pupil_two)
                        @if (app()->getLocale() == 'ar')
                       
                            <div class="bg-madi">
                                <h2 > {{ $Pupil_two->name_ar }} </h2>
                                <p class="text-p">{!! $Pupil_two->description_ar !!}</p>
                            </div>
                        @else
                    
                    
                            @if($Pupil_two->description_en !=null)
                                    <div class="bg-madi">
                                        <h2> {{ $Pupil_two->name_en }} </h2>
                                        <p class="text-p">{!! $Pupil_two->description_en !!}</p>
                                    </div>
                            @endif
                        @endif
                    @endforeach


                   

                </div>
            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->



<!-- end service-single-section -->
@endsection