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
                        <img style="margin-right: 125px" src="{{asset('storage/Sheikh_one/'.$Sheikh_ones->photo)}}" alt="{{ $Sheikh_ones->title }}">
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
                        <img style="margin-left: 125px" src="{{asset('storage/Sheikh_one/'.$Sheikh_ones->photo)}}" alt="{{ $Sheikh_ones->title }}">
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
    <div class="col-md-6 pull-right">

        <button class="nt_button but-sar "><a class="a-text" href="{{route('visuals2',$vidue)}}">{{__('messages.visual')}}</a> </button>

    </div>
</div>





<div class="row wow animate__backInUp" data-wow-duration="2s">
    <div class="col-md-12 ">
        @if($Audios->count() > 0)
        @foreach ($Audios as $Audio)
        @if (app()->getLocale() == 'ar')
        <div class="col-md-6 aut_no pull-right bg-about pull-div">
            
            <h1 class="new-h1"><i class="fas fa-bookmark"></i> {{ $Audio->name_ar }}</h1>
           
            
            

            <audio class="single-audio-inner  " controls="">

                <source src="{{asset('storage/audio/'.$Audio->audio)}}" type="audio/ogg">
                <source src="{{asset('storage/audio/'.$Audio->audio)}}" type="audio/mpeg">

            </audio>

        </div>
        @else
        @if($Audio->name_en !=null)
        <div class="col-md-6 aut_no bg-about">
            
            <h1 class="new-h1"><i class="fas fa-bookmark"></i> {{ $Audio->name_en }}</h1>
           
            
            

            <audio class="single-audio-inner  " controls="">

                <source src="{{asset('storage/audio/'.$Audio->audio)}}" type="audio/ogg">
                <source src="{{asset('storage/audio/'.$Audio->audio)}}" type="audio/mpeg">

            </audio>

        </div>
        @endif
        @endif
        @endforeach

        @else
        <h1>لا يوجد صوتيات</h1>


        @endif

    </div>
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
    <div class="card col-md-3 student-card card_ping bg-about">
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
                    @if($Sheikh_text->description_en !=null)
                    <div class="bg-madi">
                        <h2> {{ $Sheikh_text->name_en }} </h2>
                        <p class="text-p">{!! $Sheikh_text->description_en !!}</p>
                    </div>
                    
                    @endif
                    @endif
                    @endforeach


                </div>
            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>



@endsection