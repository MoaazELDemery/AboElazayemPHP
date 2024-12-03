@extends('layout.frontend.min')
@section('content')

<div class="service-area-2">
    <div class="container">
        <div class="service-wrap ">
            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                <div class="filter">
                    <div id="Search-toggle" class="shikh-flex ">
                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <h3 class="text-book"> {{__('messages.Library_name')}}</h3>
                    </div>
                    <div id="search" class="bor-sold">
                        <form action="line" method="GET">
                            <input type="text" placeholder=" {{__('messages.Library_name')}}" name="search" value="{{ request()->search }}">
                            <button type="submit">{{__('messages.bt_search')}}</button>
                        </form>

                    </div>

                </div>
            </div>


            <div class="row " >
                <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


                    <div class="filter">
                        <div class="shikh-flex shikh-icon bg-about" style="margin-bottom: 50px;">

                            <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                                <h1 style="text-align: center;     padding: 10px;"> {{__('messages.library')}} </h1>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


            <div class="row wow animate__backInUp" data-wow-duration="2s">
                <?php
                $empty = 1;
                ?>

                @foreach ($Librarys as $Library)
                <?php
                $empty = 0;
                ?>

                @if (app()->getLocale() == 'ar')

                <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12 pull-right">
                    <div class="service-single-item bg-about" style="    border-bottom: 3px solid #009440;">
                        <a href="{{route('maktaby',$Library->id)}}">
                            <div class="service-single-img main-sections-img">

                                <img src="{{ asset('storage/library/' . $Library->photo) }}" alt="{{$Library->name_ar}}">

                            </div>
                        </a>

                        <div class="service-text">
                            <h2><a href="{{route('maktaby',$Library->id)}}"> {{$Library->name_ar}} </a></h2>
                        </div>


                    </div>
                </div>
                @else
                @if($Library->name_en != null)

                <div class="col-lg-4 col-md-4 col-sm-6 custom-grid col-12 pull-right">
                    <div class="service-single-item bg-about" style="border-bottom: 3px solid #009440;">
                        <a href="{{route('maktaby',$Library->id)}}">
                            <div class="service-single-img main-sections-img">

                                <img src="{{ asset('storage/library/' . $Library->photo) }}" alt="{{$Library->name_en}}">

                            </div>
                        </a>

                        <div class="service-text">
                            <h2><a href="{{route('maktaby',$Library->id)}}"> {{$Library->name_en}} </a></h2>
                        </div>


                    </div>
                </div>
                @endif
                @endif


                @endforeach














            </div>
            @if($empty)
            <h1 class="H-TEXT">{{__('messages.look')}}</h1>
            <div style="display: none">
                <a class="" href="{{ $Librarys->previousPageUrl()}}">{{__('messages.previous')}}</a>
                <a style="display: none" href="{{ $Librarys->nextPageUrl() }}">{{__('messages.next')}}</a>
            </div>

            @else


            <div lass="wpo-section-title" style=" margin-left: 10px;">
                <a class="nt_button smile-font  but-madi6 " href="{{ $Librarys->nextPageUrl() }}">{{__('messages.next')}}</a>
                <a class="nt_button smile-font  but-madi7" href="{{ $Librarys->previousPageUrl()}}">{{__('messages.previous')}}</a>
            </div>



            @endif


        </div>


    </div>
</div>







@endsection