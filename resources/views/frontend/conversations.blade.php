@extends('layout.frontend.min')
@section('content')

<div class="service-area-2">
    <div class="container">
        <div class="service-wrap ">


            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                <h1 class="h1-box bg-about"> أحاديث</h1>
            </div>
            <div class="row wow animate__backInUp" data-wow-duration="2s">

                @foreach ($Books as $Book)
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                    <div class="box-border service-single-item">
                        <div class="service-text bg-about">
                            <h2><a href="{{route('conversationspdf',$Book->id)}}"> {{ $Book->name_ar }}</a></h2>
                        </div>
                    </div>
                </div>
            
                @endforeach



            </div>


        </div>


    </div>
</div>

@endsection