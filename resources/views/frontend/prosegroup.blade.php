@extends('layout.frontend.min')
@section('content')

<div class=" container">
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">
                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
                       
                        <h1 style="text-align: center; ">{{$ProseCategorie->name_ar}}</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end service-single-section -->
<div class="container-fluid">


    <div class="row reverse-col div-flex div-flex-flex ">
        <div class="col-md-9 wow animate__backInLeft " data-wow-duration=" 2s">
            <div class="row">
              
                @foreach ($Books as $Book)
                @if($Book->name_ar !=null)
                <div class="col-md-4 pull-right ">
                    <div class="voice-clip bg-about">
                        <a href="{{route('prosepdf',$Book->id)}}">
                            <img src="{{ asset('storage/ProseBook/img/' . $Book->photo) }}" alt="{{ $Book->name_ar }}">
                            <h4> {{ $Book->name_ar }} </h4>
                        </a>

                    </div>
                </div>
                @endif
                @endforeach


                <div class="pagination-wrapper pagination-wrapper-left">
                    <ul class="pg-pagination" style="display: flex;  flex-direction: row;     justify-content: center; ">

                        {{ $Books->links() }}


                    </ul>
                </div>

            </div>





        </div>

        <div class="col-md-3 wow animate__backInRight" data-wow-duration="2s">
            <div class="filter">
                <div id="Search-toggle">
                    <h2 class="text-book">{{__('messages.book')}}</h2>
                    <i class="fa fa-minus-square" aria-hidden="true"></i>
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                </div>
                
                <div id="search" class="bor-sold">
                    <form action="{{ route('prosegroup',$id) }}" method="GET">
                        <input type="text" placeholder="{{__('messages.book')}}" name="search" value="{{ request()->search }}">
                        <button type="submit">{{__('messages.bt_search')}}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
 

</div>
@endsection