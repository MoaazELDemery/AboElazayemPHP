@extends('layout.frontend.min')
@section('content')
<!-- start service-single-section -->
<section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row">

            @foreach ($Abouts as $About)
            <div class="col col-md-12">
                <div class="service-single-content group">

                    <div class="bg-madi">
                        <h2>{{$About->name_ar}}</h2>
                        <p class="text-p">{!!$About->description_ar!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end service-single-section -->

<div class="row reverse-col    div-flex-flex">
    <div class="col-md-9 wow animate__backInUp" data-wow-duration="2s">
<div class="row">
        @foreach ($Librarys as $Library)
        <div class="card col-md-3 student-card pull-right one bg-about">
            <a href="{{route('textimam',$Library->id)}}">
                <img src="{{ asset('storage/ImamDisciples/img/' . $Library->photo) }}" alt="{{$Library->name_ar}}" class="card-img-top">
            </a>

            <div class="card-body">
                <h3 class="card-title"> <a href="{{route('textimam',$Library->id)}}"><i class="fas fa-bookmark"></i> {{$Library->name_ar}}</a> </h3>
            </div>
        </div>
        @endforeach
        <!--Single card-->
        </div>

        <div class="pagination-wrapper pagination-wrapper-left">
            <ul class="pg-pagination" style="display: flex;  flex-direction: row;     justify-content: center; ">

                {{ $Librarys->links() }}


            </ul>
        </div>

      
    </div>
    


    <div class="col-md-3 wow animate__backInRight " data-wow-duration="2s">
        <div class="filter">
            <div id="Search-toggle" class="shikh-flex">
                <i class="fa fa-minus-square" aria-hidden="true"></i>
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                <h3 class="text-book">{{__('messages.search-sheikh')}}</h3>
            </div>
            <div id="search" class="bor-sold">
                <form action="{{route('pupliimam')}}" method="GET">
                    <input type="text" placeholder="{{__('messages.search-sheikh')}}" name="search" value="{{ request()->search }}">
                    <button type="submit">{{__('messages.bt_search')}}</button>
                </form>

            </div>

        </div>
    </div>



</div>

<!-- end service-single-section -->
@endsection