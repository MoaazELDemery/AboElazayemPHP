@extends('layout.frontend.min')

@section('content')
< <!-- start service-single-section -->
    <section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                @foreach ($Abouts as $About)
               
                <div class="col col-md-12">
                    <div class="service-single-content group">

                        <div class="bg-madi">
                            <h2> {{ $About->name_ar }}</h2>
                            <p class="text-p">{!! $About->description_ar !!}</p>
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

                    @foreach ($Librarys as $Library)
                  
                    <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                        <div class="box-border service-single-item" style="height: 120px;">

                            <div class="service-text bg-about">
                                <h4 style="text-align: center;"><a href="{{route('eltasofgroup',$Library->id)}}" style="color: #444 !important; font-size:20px;"> {{ $Library->name_ar }} </a></h4>
                            </div>


                        </div>
                    </div>

                  

                    @endforeach

                </div>


            </div>


        </div>
    </div>




    <!-- end service-single-section -->
    @endsection