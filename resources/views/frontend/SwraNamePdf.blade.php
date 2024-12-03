@extends('layout.frontend.min')
@section('content')

<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        @if (app()->getLocale() == 'ar')
                        <h1 style="text-align: center; ">{{ $Books->name_ar }}</h1>
                        @else
                        @if($Book->name_en !=null)
                        <h1 style="text-align: center; ">{{ $Books->name_en }}</h1>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</div>




<section class="service-single-section ">
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                    <iframe src="{{asset('storage/TafsirBook/pdf/'.$Books->pdf)}}" width="100%" height="700"></iframe>

                </div>
            </div>
        </div>

    </div> <!-- end container -->
</section>

@endsection