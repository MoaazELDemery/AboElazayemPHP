
@extends('layout.frontend.min')

@section('content')


<div class="wpo-about-area-3 section-padding">
    <div class="container">
        <div class="wpo-about-wrap">
            <div class="row div-media bg-about">
                
                <div class="col-lg-6 col-md-6 colsm-12 wow animate__backInRight" data-wow-duration="2s">
                    <div class="wpo-about-text">
                        <div class="wpo-section-title">
                            <h2> القارئ </h2>
                            <h2> {{$name}} </h2>
                        </div>
                        <h2>
                        رواية : {{$rewaya}}
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                    <div class="wpo-about-img-3">
                        <img  src="{{asset('frontend/assets/images/service/holy-quran.png')}}" alt="quran_img">
                    </div>
                </div>
               

            </div>
        </div>

    </div>
</div>





<div class="row wow animate__backInUp" data-wow-duration="2s">
    <div class="col-md-12 ">
        @foreach($aa as $swar_name)
            <div class="col-md-6 aut_no bg-about">
        
                <h1><i class="fas fa-bookmark"></i> سورة : {{$swar_name->name}}</h1>
            
                {{$value = str_pad($swar_name->index, 3, "00", STR_PAD_LEFT)}}
                
                <audio class="single-audio-inner  " controls="">

                    <source src="{{$url}}/{{$value}}.mp3" type="audio/ogg">
                    <source src="{{$url}}/{{$value}}.mp3" type="audio/mpeg">

                </audio>
                
        

            </div>
        @endforeach

    </div>
</div>



@endsection