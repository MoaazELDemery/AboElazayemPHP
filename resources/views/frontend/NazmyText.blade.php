

@extends('layout.frontend.min')

@section('content')
<!-- wpo-Text-area start -->
<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        <h1 style="text-align: center; ">{{$Librarys->name_ar}}</h1>
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
            @foreach ($Texts as $Text)
            @if($Text->name_ar !=null)
            <div class="col col-md-12">
                <div class="service-single-content size-margin">

                    <div class="bg-madi">
                        <h2> {{ $Text->name_ar }}</h2>
                        <p class="text-p">{!! $Text->description_ar !!}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            <div class="pagination-wrapper pagination-wrapper-left">
                <ul class="pg-pagination" style="display: flex;  flex-direction: row;     justify-content: center; ">

                    {{ $Texts->links() }}


                </ul>
            </div>


        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

@endsection