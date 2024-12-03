@extends('layout.frontend.min')

@section('content')
<div class="container-fluid">

    

        <div class="row">
            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
        
        
                <div class="filter">
                    <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
        
                        <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
        
                          
                            <h1 style="text-align: center;     padding: 10px;">{{__('messages.audios')}}</h1>
                            
                            
                         
                        </div>
                    </div>
        
                </div>
        
            </div>
        
        </div>
        

    <div class="row reverse-col div-flex-flex">
        <div class="col-md-9 wow animate__backInUp" data-wow-duration="2s">
            <?php
            $empty = 1;
            ?>
            @foreach ($sheikhs as $sheikh)
            <?php
            $empty = 0;
            ?>
            @if (app()->getLocale() == 'ar')
            <div class="card col-md-3 student-card pull-right one bg-about">
            <a href="{{route('audios_details',$sheikh->id)}}">
                <img  src=" {{ asset('storage/sheikh/' . $sheikh->photo) }}" alt="{{ $sheikh->title }}" class="card-img-top">
            </a>
               
                <div class="card-body">
                    <h3 class="card-title"> <a href="{{route('audios_details',$sheikh->id)}}"><i class="fas fa-bookmark"></i>{{ $sheikh->name_ar }} </a> </h3>
                </div>
            </div>
            @else
            @if($sheikh->name_en !=null)
            <div class="card col-md-3 student-card pull-right one bg-about">
                <a href="{{route('audios_details',$sheikh->id)}}">
                    <img  src=" {{ asset('storage/sheikh/' . $sheikh->photo) }}" alt="{{ $sheikh->title }}" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title"> <a class="menu-flex" href="{{route('audios_details',$sheikh->id)}}"><i class="fas fa-bookmark"></i>{{ $sheikh->name_en }} </a> </h3>
                </div>
            </div>
            @endif
            @endif
            @endforeach

            <!--Single card-->
        </div>


        <div class="col-md-3 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div id="Search-toggle" class="shikh-flex " >
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
        </div>



    </div>
    @if($empty)
    <h1 class="H-TEXT">{{__('messages.look')}}</h1>
    <div class="form-actions left" style="display: none;">
        <a href="{{ $sheikhs->nextPageUrl() }}" class="btn default">التالى</a>
        <a href="{{ $sheikhs->previousPageUrl()}}" class="btn default">السابق</a>
    </div>
    @else
    <div lass="wpo-section-title" style=" margin-left: 10px;">
        <a class="nt_button smile-font but-madi4 " href="{{ $sheikhs->nextPageUrl() }}">{{__('messages.next')}}</a>
        <a class="nt_button smile-font but-madi5 " href="{{ $sheikhs->previousPageUrl()}}">{{__('messages.previous')}}</a>
    </div>


    @endif
</div>

@endsection