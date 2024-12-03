@extends('layout.frontend.min')

@section('content')

<!-- start service-single-section -->
<section class="service-single-section  section-padding wow animate__backInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            @foreach ($Texts as $Text)
            @if($Text->name_ar !=null)
            <div class="col col-md-12">
                <div class="group">

                    <div class="bg-madi">
                        <h2> {{ $Text->name_ar }}</h2>
                        <p class="text-p">{!! $Text->description_ar !!}</p>


                    </div>
                </div>
            </div>
            @endif
         
            @endforeach

        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->
<div class="service-area-2">
    <div class="container">
        <div>

            <div class="row wow animate__backInUp" data-wow-duration="2s">

                @foreach ($Categories as $Categorie)

                @if($Categorie->name_ar !=null)

                    <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                        <div class="box-border service-single-item" style="height: 120px;">

                            <div class="service-text bg-about">
                                <h4 style="text-align: center;"><a href="{{route('prosegroup',$Categorie->id)}}" style="color: #444 !important; font-size:20px;"> {{ $Categorie->name_ar }} </a></h4>
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