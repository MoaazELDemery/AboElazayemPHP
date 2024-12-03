@extends('layout.frontend.min')
@section('content')

<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        @foreach ($Audios as $index=>$Audio)
                        @if($index == 0)
                        <h1 style="text-align: center; ">{{$Audio->ButtonLibrary->name_ar}}</h1>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row wow animate__backInUp" data-wow-duration="2s" style="margin-top: 110px;">

    <div class="col-md-12 ">
        @foreach ($Audios as $Audio)
           
                <div class="col-md-12 aut_no pull-right bg-about pull-div" style="margin-bottom: 40px; margin-top:40px;">

                    <div class="service-single-content">

                        <div style="    padding: 0px 30px;">
                            <h2> {{ $Audio->name_ar }}</h2>
                            <p class="text-p"> {!! $Audio->description_ar!!}</p>
                        </div>
                    </div>

                    <audio class="single-audio-inner  " controls="">

                        <source src="{{asset('storage/AudioLibrary/'.$Audio->audio)}}" type="audio/ogg">
                        <source src="{{asset('storage/AudioLibrary/'.$Audio->audio)}}" type="audio/ogg">

                    </audio>

                </div>
          

        @endforeach

    </div>

</div>



@endsection