@extends('layout.frontend.min')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">

                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        <h1 style="text-align: center;  padding: 10px;">تفسير القران</h1>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<div class="service-area-2">
    <div class="container">
        <div class="service-margin ">
            <div class="row wow animate__backInUp" data-wow-duration="2s">

                @foreach ($Librarys as $Library)
                @if (app()->getLocale() == 'ar')
                <div class="col-lg-6 col-md-6 col-sm-6 custom-grid col-12 pull-right">
                    <div class="service-single-item bg-about" style="border-bottom: 3px solid #009440;">
                        <a href="{{route('imamSwraName',$Library->id)}}">
                            <div class="service-single-img main-sections-img">
                                <img src="{{ asset('storage/TafsirLibrary/img/' . $Library->photo) }}" alt="{{ $Library->name_ar }}">
                            </div>
                        </a>


                        <div class="service-text">
                            <h2><a href="{{route('imamSwraName',$Library->id)}}"> {{ $Library->name_ar }} </a></h2>
                        </div>

                    </div>
                </div>
                @else
                @if($Library->name_en==null)
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
                <div class="col-lg-6 col-md-6 col-sm-6 custom-grid col-12 pull-right">
                    <div class="service-single-item bg-about" style="border-bottom: 3px solid #009440;">
                        <a href="{{route('imamSwraName',$Library->id)}}">
                            <div class="service-single-img main-sections-img">
                                <img src="{{ asset('storage/TafsirLibrary/img/' . $Library->photo) }}" alt="{{ $Library->name_en }}">
                            </div>
                        </a>


                        <div class="service-text">
                            <h2><a href="{{route('imamSwraName',$Library->id)}}"> {{ $Library->name_en }} </a></h2>
                        </div>

                    </div>
                </div>
                @endif
                @endif
                @endforeach


            </div>


        </div>


    </div>
</div>

@endsection