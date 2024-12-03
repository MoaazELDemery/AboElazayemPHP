@extends('layout.frontend.min')
@section('content')

<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        @foreach ($Videos as $index=>$Video)
                        @if($index == 0)
                        <h1 style="text-align: center; ">{{$Video->ButtonLibrary->name_ar}}</h1>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">

    <div class="col-md-12 wow animate__backInUp" data-wow-duration="2s" style="margin-top: 100px;">

        @foreach ($Videos as $Video)
      
        <div class="col-md-6 pull-right ">


            <div class="service-single-content">

                <div style="    padding: 0px 30px;">
                    <h2>{{ $Video->name_ar }}</h2>
                    <p class="text-p">{!! $Video->description_ar!!}</p>
                </div>
            </div>

            <div class="video-box bg-about">
                <div class="ift">{!! $Video->video !!}</div>



            </div>
        </div>
       
        @endforeach




    </div>
</div>







@endsection