@extends('layout.frontend.min')
@section('content')


<div class="row wow animate__backInUp" data-wow-duration="2s" style="margin-top: 110px;">

    <div class="col-md-12 ">
        @foreach ($Audios as $Audio)
        @if (app()->getLocale() == 'ar')

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



        @else
        @if($Audio->name_en==null)



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


        <div class="col-md-12 aut_no pull-right bg-about pull-div" style="margin-bottom: 40px; margin-top:40px;">

            <div class="service-single-content">

                <div style="padding: 0px 30px;">
                    <h2> {{ $Audio->name_en }}</h2>
                    <p class="text-p"> {!! $Audio->description_en!!}</p>
                </div>
            </div>

            <audio class="single-audio-inner  " controls="">

                <source src="{{asset('storage/AudioButton/'.$Audio->audio)}}" type="audio/ogg">
                <source src="{{asset('storage/AudioButton/'.$Audio->audio)}}" type="audio/ogg">

            </audio>

        </div>



        @endif
        @endif

        @endforeach

    </div>

</div>



@endsection