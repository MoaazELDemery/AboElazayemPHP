@extends('layout.frontend.min')

@section('content')
<div class="container-fluid">
  
    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about filter-margin" >

                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                        @if (app()->getLocale() == 'ar')
                        <h1 style="text-align: center; ">{{$Librarys->name_ar}}</h1>
                        @else
                        @if( $Librarys->name_en != null )
                        <h1 style="text-align: center;     padding: 10px; ">{{$Librarys->name_en}}</h1>
                        @endif
                        @endif
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="row reverse-col div-flex div-flex-flex ">
        <div class="col-md-9 wow animate__backInLeft " data-wow-duration=" 2s">
            <div class="row">

                <!--Sound Clib-->
                <?php
                $empty = 1;
                ?>
                @foreach ($books as $book)
                <?php
                $empty = 0;
                ?>
                @if (app()->getLocale() == 'ar')
                <div class="col-md-4 pull-right ">
                    <div class="voice-clip bg-about">
                        <a href="{{route('book',$book->id)}}">
                            <img src=" {{ asset('storage/book/img/' . $book->photo) }}" alt="{{ $book->name_ar }}">
                            <h4> {{ $book->name_ar }}</h4>
                        </a>

                    </div>
                </div>
                @else
                @if( $book->name_en != null )

                <div class="col-md-4">
                    <div class="voice-clip bg-about">
                        <a href="{{route('book',$book->id)}}">
                            <img src=" {{ asset('storage/book/img/' . $book->photo) }}" alt="{{ $book->name_en }}">
                            <h4> {{ $book->name_en }}</h4>
                        </a>

                    </div>
                </div>
                @endif
                @endif


                @endforeach


            </div>
            @if($empty)
            <h1 class="H-TEXT">{{__('messages.look')}}</h1>
            <div style="display: none">
                <a class="" href="{{ $books->previousPageUrl()}}">{{__('messages.previous')}}</a>
                <a style="display: none" href="{{ $books->nextPageUrl() }}">{{__('messages.next')}}</a>
            </div>

            @else


            <div lass="wpo-section-title" style=" margin-left: 10px;">
                <a class="nt_button smile-font  but-madi6 " href="{{ $books->nextPageUrl() }}">{{__('messages.next')}}</a>
                <a class="nt_button smile-font  but-madi7" href="{{ $books->previousPageUrl()}}">{{__('messages.previous')}}</a>
            </div>



            @endif
            <!--Sound Clib-->



            {{-- {{ $books->links() }} --}}





        </div>

        <div class="col-md-3 wow animate__backInRight" data-wow-duration="2s">
            <div class="filter">
                <div id="Search-toggle">
                    <h2 class="text-book">{{__('messages.book')}}</h2>
                    <i class="fa fa-minus-square" aria-hidden="true"></i>
                    <i class="fa fa-plus-square" aria-hidden="true"></i>

                </div>

                <div id="search" class="bor-sold">
                    <form action="maktaby" method="GET">
                        <input type="text" placeholder="{{__('messages.book')}}" name="search" value="{{ request()->search }}">
                        <button type="submit">{{__('messages.bt_search')}}</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection