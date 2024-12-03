@extends('layout.frontend.min')
@section('content')
@if (app()->getLocale() == 'ar')

@if(count($Explaineds) > 0)

<div class="row">
    <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


        <div class="filter listen-h1" >
            <div class="shikh-flex shikh-icon bg-about">

                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                    
                    <h1 style="text-align: center;"> شرح قصيدة :{{$poem->pname_ar}}</h1>

   
                </div>
            </div>

        </div>

    </div>

</div>

<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp" style="margin-top: 0 !important;" data-wow-duration="2s">
    <div class="container">
        <div class="row">

            <div class="col col-md-12">
                @foreach($Explaineds as $Explained)

                <div class="service-single-content bg-madi">



                    <h2> {{ $Explained->name_ar }}</h2>
                    <p class="text-p">
                    {{$Explained->description_ar}}
                                           
                    </p>


                </div>
                @endforeach


            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->
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
@if(count($Explaineds) > 0)


<div class="row">
    <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


        <div class="filter" style="margin: 100px 0;">
            <div class="shikh-flex shikh-icon bg-about">

                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                    
                    <h1 style="text-align: center;"> شرح قصيدة :{{$poem->pname_en}}</h1>

   
                </div>
            </div>

        </div>

    </div>

</div>

<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp" style="margin-top: 0 !important;" data-wow-duration="2s">
    <div class="container">
        <div class="row">

            <div class="col col-md-12">
                @foreach($Explaineds as $Explained)

                <div class="service-single-content bg-madi">



                    <h2> {{ $Explained->name_en }}</h2>
                    <p class="text-p">
                    {{$Explained->description_en}}
                                           
                    </p>


                </div>
                @endforeach


            </div>

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->
@else
<div class="wpo-breadcumb-area" style="margin: 100px 0 0 0;" >
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