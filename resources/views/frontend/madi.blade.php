@extends('layout.frontend.min')
@section('content')
<!-- wpo-about-area start -->
<div class="wpo-about-area-3 section-padding bg-about" style="padding: 40px 0 0 0; margin-top: 140px; ">
    <div class="container">
        <div class="wpo-about-wrap">
            <div class="row  div-media">
                @foreach ($madis as $madi)
                @if (app()->getLocale() == 'ar')
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $madi->name_ar }}</span>
                            <h2> {{ $madi->title_ar }}</h2>
                        </div>
                        <p>{!! $madi->description_ar !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{asset('storage/madi/'.$madi->photo)}}" alt="{{ $madi->title }}">
                    </div>
                </div>
                @else
                @if($madi->description_en==null)
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
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $madi->name_en }}</span>
                            <h2> {{ $madi->title_en }}</h2>
                        </div>
                        <p>{!! $madi->description_en !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{asset('storage/madi/'.$madi->photo)}}" alt="{{ $madi->title }}">
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- wpo-about-area end -->
<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp " data-wow-duration="2s">
    <div class="container ">
        <div class="row">

            <div class="col col-md-12">
                <div class="service-single-content ">
                    @foreach ($madi_twos as $madi_two)

                        @if (app()->getLocale() == 'ar')
                            <div class="bg-madi">
                                <h2> {{ $madi_two->name_ar }} </h2>
                                <p class="text-p">{!! $madi_two->description_ar !!}</p>
                            </div>
                    
                        @else

                            @if($madi_two->description_en !=null)
                            
                                <div class="bg-madi">
                                    <h2> {{ $madi_two->name_en}} </h2>
                                    <p class="text-p">{!! $madi_two->description_en !!}</p>
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