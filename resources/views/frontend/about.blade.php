@extends('layout.frontend.min')

@section('content')

<div class="wpo-about-area-3 section-padding ">
    <div class="container bg-about" style="margin-top: 50px">
        <div class="wpo-about-wrap">
            <div class="row div-media">
                @foreach ($abouts as $about)
                @if (app()->getLocale() == 'ar')
                <div class="col-lg-6 col-md-6 colsm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span>{{ $about->name_ar }}</span>
                            <h2> {{ $about->title_ar }}</h2>
                        </div>
                        <p>
                            {{ $about->description_ar }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{ asset('storage/About/' . $about->photo) }}" alt="{{ $about->name_ar }}">
                    </div>
                </div>
                @else
                @if($about->name_en==null)
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
                <div class="col-lg-6 col-md-6 colsm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">

                            <span>{{ $about->name_en }}</span>
                            <h2> {{ $about->title_en }}</h2>
                        </div>
                        <p class="about-p">
                            {{ $about->description_en }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{ asset('storage/About/' . $about->photo) }}" alt="{{ $about->name_en }}">
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
<!-- courses-area start -->
<div class="courses-area">
    <div class="container">
        <div class="row">
            <div class="col-12 wow animate__backInUp" data-wow-duration="2s">
                @foreach ($about_twos as $about_two)
                @if (app()->getLocale() == 'ar')
                <div class="wpo-section-title">
                    <span >{{ $about_two->name_ar }}</span>
                    <h2> {{ $about_two->title_ar }}</h2>
                </div>
                @else
                @if($about_two->title_en !=null)
               
                <div class="wpo-section-title">
                    <span>{{ $about_two->name_en }}</span>
                    <h2> {{ $about_two->title_en }}</h2>
                </div>
                @endif

            </div>

            @endif
            @endforeach
        </div>
    </div>
    <div class="row">
        @foreach ($cards as $card)
        @if (app()->getLocale() == 'ar')
        <div class="col-md-4 col-sm-6 custom-grid pull-right col-12 wow animate__backInRight" data-wow-duration="2s">
            <div class="courses-item">
                <div class="course-icon">
                    <span><img src="{{ asset('storage/card/' . $card->photo) }} " alt="{{ $card->title_ar }}"></span>
                </div>
                <div class="course-text">
                    <h2>{{ $card->title_ar }} </h2>
                    <p>{!! $card->description_ar !!}</p>
                </div>
            </div>
        </div>
        @else
        @if($card->description_en !=null)


        <div class="col-md-4 col-sm-6 custom-grid col-12 wow animate__backInLeft" data-wow-duration="2s">
            <div class="courses-item">
                <div class="course-icon">
                    <span><img src="{{ asset('storage/card/' . $card->photo) }} " alt="{{ $card->title_en }}"></span>
                </div>
                <div class="course-text">
                    <h2>{{ $card->title_en }} </h2>
                    <p class="size-text">{!! $card->description_en !!}</p>
                </div>
            </div>
        </div>

        @endif


        @endif
        @endforeach

    </div>
</div>
</div>
<!-- courses-area start -->
<!-- wpo-about-area start -->
<div class="wpo-about-area-3 section-padding ">
    <div class="container bg-about">
        <div class="wpo-about-wrap media-about">
            <div class="row">
                @foreach ($about_threes as $about_three)
                @if (app()->getLocale() == 'ar')
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src=" {{ asset('storage/about_three/' . $about_three->photo) }} " alt="{{ $about_three->title }}">
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 colsm-12 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">

                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span>{{ $about_three->name_ar }}</span>
                            <h2> {{ $about_three->title_ar }}</h2>
                        </div>
                        <p>{!! $about_three->description_ar !!}</p>
                    </div>

                </div>
                @else
                @if($about_three->description_en !=null)
                

                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src=" {{ asset('storage/about_three/' . $about_three->photo) }} " alt="{{ $about_three->title }}">
                    </div>
                </div>



                <div class="col-lg-6 col-md-6 colsm-12 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">

                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span>{{ $about_three->name_en }}</span>
                            <h2> {{ $about_three->title_en }}</h2>
                        </div>
                        <p class="about-p">{!! $about_three->description_en !!}</p>
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
<!-- wpo-about-area start -->
<div class="wpo-about-area-3 section-padding">
    <div class="container  bg-about">
        <div class="wpo-about-wrap">
            <div class="row div-media media-about">
                @foreach ($about_fours as $about_four)
                @if (app()->getLocale() == 'ar')
                <div class="col-lg-6 col-md-6 colsm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $about_four->name_ar }}</span>
                            <h2>{{ $about_four->title_ar }}</h2>
                        </div>
                        <p>{!! $about_four->description_ar !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src=" {{asset('storage/about_four/'.$about_four->photo)}}" alt="{{ $about_four->title }}">
                    </div>
                </div>
                @else
                @if($about_four->description_en != null)


                <div class="col-lg-6 col-md-6 colsm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $about_four->name_en }}</span>
                            <h2>{{ $about_four->title_en }}</h2>
                        </div>
                        <p class="about-p">{!! $about_four->description_en !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src=" {{asset('storage/about_four/'.$about_four->photo)}}" alt="{{ $about_four->title }}">
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

@endsection