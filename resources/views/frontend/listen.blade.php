@extends('layout.frontend.min')

@section('content')

@if (app()->getLocale() == 'ar')
@if(count($Listens) > 0)

<div class="row">
    <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


        <div class="filter listen-h1" >
            <div class="shikh-flex shikh-icon bg-about">

                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                    
                    <h1 style="text-align: center;"> استماع قصيدة : {{$poem->pname_ar}} </h1>

   
                </div>
            </div>

        </div>

    </div>

</div>

<div class="row " >
    <div class="col-md-12 ">
        @foreach($Listens as $Listen)


        <div class="col-md-12 aut_no pull-right bg-about listen-tesxt">
            <h1><i class="fas fa-bookmark"></i> {{ $Listen->name_ar }} </h1>



            <audio class="single-audio-inner  " controls="">

                <source src="{{asset('storage/listen/'.$Listen->audio)}}" type="audio/ogg">
                <source src="{{asset('storage/listen/'.$Listen->audio)}}" type="audio/mpeg">

            </audio>

        </div>








        @endforeach


    </div>

</div>
@else
<div class="wpo-breadcumb-area" style="margin: 100px 0 0 0;" >
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="wpo-breadcumb-wrap">
                                    <h2>لا يوجد بيانات الان</h2>
                                    <!-- <ul>
                                                <li><a href="index.html">Home</a></li>
                                                <li><span>Blog</span></li>
                                            </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endif

    @else
    @if(count($Listens) > 0)
   
    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

<h1 style="text-align: center; padding: 80px 0;"> استماع قصيدة {{$poem->pname_en}} </h1>

</div>

<div class="row wow animate__backInUp" data-wow-duration="2s">
<div class="col-md-12 ">
    @foreach($Listens as $Listen)


    <div class="col-md-6 aut_no pull-right bg-about">
        <h1><i class="fas fa-bookmark"></i> {{ $Listen->name_en }} </h1>



        <audio class="single-audio-inner  " controls="">

            <source src="{{asset('storage/listen/'.$Listen->audio)}}" type="audio/ogg">
            <source src="{{asset('storage/listen/'.$Listen->audio)}}" type="audio/mpeg">

        </audio>

    </div>








    @endforeach


</div>


</div>
    @else
    <div class="wpo-breadcumb-area" style="margin: 182px 0px;" >
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

    
  
    @endif
    @endif























    @endsection