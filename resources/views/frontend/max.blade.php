@extends('layout.frontend.min')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">

                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        <h1 style="text-align: center;  padding: 10px;">{{__('messages.audios')}}</h1>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>


<div class="service-area-2">
    <div class="container">
        <div class="service-wrap " style="padding-top: 50px !important;">
            <div class="row wow animate__backInUp" data-wow-duration="2s">
            @foreach ($Librarys as $Library)
           
                <div class="col-lg-6 col-md-6 col-sm-6 custom-grid col-12 pull-right">
                    <div class="service-single-item bg-about" style="border-bottom: 3px solid #009440;">
                        <a href="{{route('maximams',$Library->id)}}">
                            <div class="service-single-img main-sections-img">
                                <img src="{{ asset('storage/MediaLibrary/img/' . $Library->photo) }}" alt="{{ $Library->name_ar }}" >
                            </div>
                        </a>

                        <div class="service-text">
                            <h2><a href="{{route('maximams',$Library->id)}}"> {{ $Library->name_ar }} </a></h2>
                        </div>

                    </div>
                </div>

            @endforeach
              
            </div>


        </div>


    </div>
</div>

@endsection