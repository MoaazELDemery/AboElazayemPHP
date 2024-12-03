@extends('layout.frontend.min')

@section('content')



<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            @foreach ($Abouts as $About)
            @if($About->name_ar !=null)
            <div class="col col-md-12">
                <div class="service-single-content group">

                    <div class="bg-madi">
                        <h2> {{ $About->name_ar }}</h2>
                        <p class="text-p">{!! $About->description_ar !!}</p>
                    </div>
                </div>
            </div>
            @endif

            @endforeach

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
=

<!-- end service-single-section -->

<div class="service-area-2">
    <div class="container">
        <div>

            <div class="row wow animate__backInUp" data-wow-duration="2s">

                @foreach ($Librarys as $index=>$Library)
                @if($Library->name_ar !=null)
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                    <div class="box-border service-single-item" style="height: 120px;">


                        @if($Library->type == 'pdf')
                        <div class="service-text bg-about">

                            <h4 style="text-align: center;"><a href="{{route('NazmyCategorie',$Library->id)}}" style="color: #444 !important; font-size:20px;">{{ $Library->name_ar }}</a></h4>
                        </div>
                        @endif

                        @if($Library->type == 'text')
                        <div class="service-text bg-about">

                            <h4 style="text-align: center;"><a href="{{route('NazmyText',$Library->id)}}" style="color: #444 !important; font-size:20px;">{{ $Library->name_ar }}</a></h4>
                        </div>
                        @endif
                      


                    </div>
                </div>

                @endif


                @endforeach
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                    <div class="box-border service-single-item" style="height: 120px;">

                        <div class="service-text bg-about">

                            <h4 style="text-align: center;"><a href="{{route('poem1')}}" style="color: #444 !important; font-size:20px;">البحث في القصائد والمواجيد</a></h4>
                        </div>
                      
                      


                    </div>
                </div>



            </div>


        </div>


    </div>
</div>




<!-- end service-single-section -->
@endsection