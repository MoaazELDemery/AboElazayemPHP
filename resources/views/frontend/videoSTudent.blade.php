@extends('layout.frontend.min')
@section('content')




<div class="row">

    <div class="col-md-12 wow animate__backInUp" data-wow-duration="2s" style="margin-top: 100px;">

        @foreach ($Videos as $Video)
            @if (app()->getLocale() == 'ar')
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
            @else
        @if($Video->name_en==null)


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
        <div class="col-md-6 pull-right ">


            <div class="service-single-content">

                <div style="    padding: 0px 30px;">
                    <h2>{{ $Video->name_en }}</h2>
                    <p class="text-p">{!! $Video->description_en!!}</p>
                </div>
            </div>

            <div class="video-box bg-about">
                <div class="ift">{!! $Video->video !!}</div>



            </div>
        </div>

        @endif
        @endif



        @endforeach




    </div>
</div>







@endsection