@extends('layout.frontend.min')

@section('content')
<div class="wpo-about-area-3 section-padding">
    <div class="container bg-about">
        <div class="wpo-about-wrap">

            @if (app()->getLocale() == 'ar')

            <div class="row  div-media">

                <div class="col-lg-6 col-md-6 colsm-12 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $Sheikh_ones->name_ar }} </span>
                            <h2> {{ $Sheikh_ones->title_ar }}</h2>
                        </div>

                        <p>{!! $Sheikh_ones->description_ar !!}</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{asset('storage/Sheikh_one/'.$Sheikh_ones->photo)}}" alt="{{ $Sheikh_ones->title }}">
                    </div>
                </div>

            </div>
            @else
            @if($Sheikh_ones->title_en ==null)
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

                <div class="col-lg-6 col-md-6 colsm-12 col-sm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <span> {{ $Sheikh_ones->name_en }} </span>
                            <h2> {{ $Sheikh_ones->title_en }}</h2>
                        </div>

                        <p>{!! $Sheikh_ones->description_en !!}</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img src="{{asset('storage/Sheikh_one/'.$Sheikh_ones->photo)}}" alt="{{ $Sheikh_ones->title }}">
                    </div>
                </div>

            </div>
            @endif
            @endif

        </div>

    </div>
</div>

<!-- end service-single-section -->
<div class="row">
    <div class="col-md-6 col-sm-12 pull-right ">

        <button class="nt_button but-sar "><a class="a-text" href="{{route('audios_details',$vidue)}}">{{__('messages.audios')}}</a> </button>

    </div>
</div>
<!-- end service-single-section -->
<div class="col-md-12 wow animate__backInUp" data-wow-duration="2s">



    <!--Video box-->
    @if($Visuals->count() > 0)
    @foreach ($Visuals as $Visual)
    <div class="col-md-6 pull-right ">
        @if (app()->getLocale() == 'ar')

        <div class="video-box bg-about">
            <div class="ift">{!! $Visual->visual !!}</div>


            <div class="text-box-video ">
                <h2>
                    {{ $Visual->name_ar }}
                </h2>
                <p>{!! $Visual->description_ar !!}</p>
            </div>





        </div>
        @else
        @if($Visual->name_en !=null)
        <div class="video-box bg-about">
            <div class="ift">{!! $Visual->visual !!}</div>

            <div class="text-box-video ">
                <h2>
                    {{ $Visual->name_en }}
                </h2>
                <p>{!! $Visual->description_en !!}</p>
            </div>





        </div>

        @endif
        @endif
    </div>
    @endforeach
    @else
    <h1>لا يوجد مرئيات</h1>

    @endif
    <!--Video box-->



</div>








<div class="col-md-12 wow animate__backInUp" data-wow-duration="2s" style="margin-top: 50px;
    margin-bottom: 50px;">

    <!--Single card-->
    @foreach ($Card_pupils as $Card_pupil)
    @if (app()->getLocale() == 'ar')
    <div class="card col-md-3 student-card card_ping pull-right bg-about">
        <img src="{{asset('storage/Card_pupil/'.$Card_pupil->photo)}} " alt="{{ $Card_pupil->title }}">
        <div class="card-body">

            <h2 class="card-title"> <a href="#"> {{ $Card_pupil->title_ar }}</a> </h2>
            <p class="card-text">{!! $Card_pupil->description_ar !!}</p>




        </div>
    </div>
    @else
    @if($Card_pupil->description_en !=null)
    <div class="card col-md-3 student-card card_ping pull-right bg-about">
        <img src="{{asset('storage/Card_pupil/'.$Card_pupil->photo)}} " alt="{{ $Card_pupil->title }}">
        <div class="card-body">

            <h2 class="card-title"> <a href="#"> {{ $Card_pupil->title_en }}</a> </h2>
            <p class="card-text">{!! $Card_pupil->description_en !!}</p>




        </div>
    </div>
    @endif
    @endif
    @endforeach
    <!--Single card-->





</div>
<section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row">

            <div class="col col-md-12">
                <div class="service-single-content">
                    @foreach ($Sheikh_texts as $Sheikh_text)
                   
                    @if (app()->getLocale() == 'ar')
                    <div class="bg-madi">
                        <h2> {{ $Sheikh_text->name_ar }} </h2>
                    <p class="text-p">{!! $Sheikh_text->description_ar !!}</p>
                    </div>
                    
                    @else
                    <div class="bg-madi">
                    <h2> {{ $Sheikh_text->name_en }} </h2>
                    <p class="text-p">{!! $Sheikh_text->description_en !!}</p>
                </div>
                    @endif
                    @endforeach


                </div>
            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>



@endsection