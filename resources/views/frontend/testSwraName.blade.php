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


            <div class="row reverse-col div-flex-flex">
                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">



                    <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                        <div class="filter">
                            <div id="Search-toggle" class="shikh-flex" style="background-color: #009468;">
                                <i class="fa fa-minus-square" aria-hidden="true"></i>
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                <h3 class="text-book">البحث في ارقام و الاسماء  سور القرآن الكريم</h3>
                            </div>
                            <div id="search" class="bor-sold">
                                <form action="{{route('swra_name')}}" method="GET">
                                    <input type="text" placeholder="اسم السوره" name="search" value="{{ request()->search }}">
                                    <button type="submit">{{__('messages.bt_search')}}</button>
                                </form>

                            </div>

                        </div>
                    </div>



                </div>

            </div>
           

            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                <h1 class="h1-box bg-about"> القرءان الكريم</h1>
            </div>
            <div class="row wow animate__backInUp" data-wow-duration="2s">

                @foreach($aa as $swar_name)
                    
                <div class="col-lg-3 col-md-3 col-sm-6 custom-grid col-12 pull-right">
                    <div class="box-border service-single-item">

                        <div class="service-text bg-about">
                            <h2><a href="{{route('testquran',$swar_name->index)}}">[{{$swar_name->index}}] {{$swar_name->name}}</a></h2>
                        </div>


                    </div>
                </div>

                @endforeach



            </div>


        </div>


    </div>
</div>







@endsection