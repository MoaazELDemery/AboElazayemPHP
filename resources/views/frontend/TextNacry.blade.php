@extends('layout.frontend.min')

@section('content')

<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                        @if (app()->getLocale() == 'ar')
                        <h1 style="text-align: center; ">{{$Librarys->name_ar}}</h1>
                        @else
                        <h1 style="text-align: center; ">{{$Librarys->name_en}}</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- wpo-Text-area start -->
<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s" style="margin-top: 0px; ">
    <div class="container">
        <div class="row">
            <?php
            $empty = 1;
            ?>
            @foreach ($Texts as $Text)
            <?php
            $empty = 0;
            ?>
            @if (app()->getLocale() == 'ar')
            <div class="col col-md-12">
                <div class="service-single-content" >

                    <div class="bg-madi">
                        <h2> {{ $Text->name_ar }}</h2>
                        <p class="text-p">{!! $Text->description_ar !!}</p>
                    </div>
                </div>
            </div>
            @else

            @if($Text->description_en !=null)
            <div class="col col-md-12">
                <div class="service-single-content" >
                    <div class="bg-madi">
                        <h2> {{ $Text->name_en }}</h2>
                        <p class="text-p">{!! $Text->description_en !!}</p>
                    </div>
                </div>
            </div>
            @endif
            @endif

            @endforeach


        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->
<!-- end service-single-section -->
@if(count($Texts) >= 5)
@if($empty)
<h1 class="H-TEXT">{{__('messages.look')}}</h1>
<div style="display: none">
    <a class="" href="{{ $Texts->previousPageUrl()}}">{{__('messages.previous')}}</a>
    <a style="display: none" href="{{ $Texts->nextPageUrl() }}">{{__('messages.next')}}</a>
</div>

@else
<div lass="wpo-section-title" style=" margin-left: 10px; margin-bottom: 200px;">
    <a class="nt_button smile-font  but-imam-1 " href="{{ $Texts->nextPageUrl() }}">{{__('messages.next')}}</a>
    <a class="nt_button smile-font  but-imam-2" href="{{ $Texts->previousPageUrl()}}">{{__('messages.previous')}}</a>
</div>
@endif
@endif


@endsection