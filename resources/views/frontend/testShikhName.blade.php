

@extends('layout.frontend.min')
@section('content')

<div class="service-area-2">
    <div class="container">
        <div class="service-wrap ">
            <!-- <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                <div class="filter">
                    <div id="Search-toggle" class="shikh-flex ">
                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <h3 class="text-book">{{__('messages.search-sheikh')}}</h3>
                    </div>
                    <div id="search" class="bor-sold">
                        <form action="audios" method="GET">
                            <input type="text" placeholder="{{__('messages.search-sheikh')}}" name="search" value="{{ request()->search }}">
                            <button type="submit">{{__('messages.bt_search')}}</button>
                        </form>

                    </div>

                </div>
            </div> -->

            <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                <h1 class="h1-box bg-about"> أسم القارئ</h1>
            </div>
            <div class="row wow animate__backInUp" data-wow-duration="2s">
            @foreach($data as $index=>$aa)
                @if($aa->count == '114')
                
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right" >
                    <div class="box-border service-single-item" style="height: 120px;">
                        
                        <div class="service-text bg-about">
                            <h2><a href="{{route('testvoice',$index)}}">{{$aa->name}}</a></h2>
                            <h4 style="text-align: center;"><a href="#" style="color: #444 !important;">رواية: {{$aa->rewaya}}</a></h4>
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











