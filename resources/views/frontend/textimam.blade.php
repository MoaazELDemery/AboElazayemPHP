@extends('layout.frontend.min')
@section('content')

<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        @foreach ($Texts as $index=>$About)
                        @if($index == 0)
                        <h1 style="text-align: center; ">{{$About->ImamDisciples->name_ar}}</h1>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            @foreach ($Texts as $About)
            <div class="col col-md-12">
                <div class="service-single-content ">
                    <div class="bg-madi">
                        <h2>{{$About->name_ar}}</h2>
                        <p class="text-p">{!!$About->description_ar!!}</p>
                    </div>
                </div>
            </div>

            @endforeach
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->

<div class="service-area-2">
    <div class="container">
        <div>



            <div class="row wow animate__backInUp" data-wow-duration="2s">

                @foreach ($Types as $Type)



                @if($Type->type == 'audio')
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                    <div class="box-border service-single-item" style="height: 120px;">

                        <div class="service-text bg-about">

                            <h4 style="text-align: center;"><a href="{{route('audioSTudent',$Type->id)}}" style="color: #444 !important; font-size:20px;">{{$Type->name_ar}}</a></h4>
                        </div>


                    </div>
                </div>
                @endif

                @if($Type->type == 'video')
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                    <div class="box-border service-single-item" style="height: 120px;">

                        <div class="service-text bg-about">

                            <h4 style="text-align: center;"><a href="{{route('videoSTudent',$Type->id)}}" style="color: #444 !important; font-size:20px;">{{$Type->name_ar}}</a></h4>
                        </div>


                    </div>
                </div>
                @endif

                @if($Type->type == 'pdf')
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                    <div class="box-border service-single-item" style="height: 120px;">

                        <div class="service-text bg-about">

                            <h4 style="text-align: center;"><a href="{{route('bookSTudent',$Type->id)}}" style="color: #444 !important; font-size:20px;">{{$Type->name_ar}}</a></h4>
                        </div>


                    </div>
                </div>
                @endif




                @endforeach

            </div>


        </div>


    </div>
</div>


@endsection