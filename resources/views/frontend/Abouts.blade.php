@extends('layout.frontend.min')

@section('content')
    <!-- wpo-about-area start -->
    <div class="wpo-about-area-3 section-padding bg-about ">
        <div class="container bg-about" style="margin-top: 50px">
            <div class="wpo-about-wrap">
                <div class="row div-media">
                   

                        <div class="col-lg-6 col-md-6 colsm-12 wow animate__backInRight" data-wow-duration="2s">
                            <div class="wpo-about-text">
                                <div class="wpo-section-title">
                                    <span>الشهاده المعتمده</span>
                                    <h2> الشهاده المعتمده</h2>
                                </div>
                                <p>
                                    الشهاده المعتمده
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 wow animate__backInLeft" data-wow-duration="2s">
                            <div class="wpo-about-img-3">
                                <img src="{{ asset('../public/frontend/assets/img-front/abo-el-3azim.png') }}" alt="">
                            </div>
                        </div>

               

                </div>
            </div>

        </div>
    </div>
  

    <section class="service-single-section section-padding wow animate__backInRight" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                @foreach ($Abouts as $About)

                    @if ($About->description_ar != null)
                        <div class="col col-md-12">
                            <div class="service-single-content size-margin">
                                <div class="bg-madi">
                                    <h2> {{ $About->name_ar }}</h2>
                                    <p class="text-p">{!! $About->description_ar !!}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                @endforeach

                <div class="pagination-wrapper pagination-wrapper-left">
                    <ul class="pg-pagination" style="display: flex;  flex-direction: row;     justify-content: center; ">

                        {{ $Abouts->links() }}


                    </ul>
                </div>



            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
   

    <!-- wpo-about-area end -->
    <div class="service-area-2">
        <div class="container">
            <div>
                <div class="row wow animate__backInUp" data-wow-duration="2s">
                    @foreach ($Librarys as $Library)
                    @if ($Library->name_ar != null)
                            <div class="col-lg-12 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                                <div class="box-border service-single-item" style="height: 120px;">
                                    <div class="service-text bg-about">
                                        <h4 style="text-align: center;"><a href="{{ route('aboutgroup', $Library->id) }}"
                                                style="color: #444 !important; font-size:35px;">{{ $Library->name_ar }}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end service-single-section -->

@endsection
