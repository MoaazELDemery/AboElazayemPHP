@extends('layout.frontend.min')
@section('content')
    <!-- start service-single-section -->
    <section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                @foreach ($Texts as $Text)
                    <div class="col col-md-12">
                        <div class="group service-single-content">

                            <div class="bg-madi">
                                <h2> {{ $Text->name_ar }}</h2>
                                <p class="text-p">{!! $Text->description_ar !!}</p>


                            </div>
                        </div>
                    </div>
                @endforeach



            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end service-single-section -->
    <div class="container-fluid">


        <div class="row reverse-col div-flex div-flex-flex ">
            <div class="col-md-9 wow animate__backInLeft " data-wow-duration=" 2s">
                <div class="row">
                    @foreach ($Books as $Book)

                        <div class="col-md-4 pull-right">
                            <div class="voice-clip bg-about">
                                <a href="{{ route('imampdf', $Book->id) }}">
                                    <img src="{{ asset('storage/ImamBook/img/' . $Book->photo) }}"
                                        alt="{{ $Book->name_ar }}">
                                    <h4> {{ $Book->name_ar }} </h4>
                                </a>

                            </div>
                        </div>

                    @endforeach
                </div>

                <div class="pagination-wrapper pagination-wrapper-left">
                    <ul class="pg-pagination" style="display: flex;  flex-direction: row;     justify-content: center; ">

                        {{ $Books->links() }}


                    </ul>
                </div>

            </div>

            <div class="col-md-3 wow animate__backInRight" data-wow-duration="2s">
                <div class="filter">
                    <div id="Search-toggle">
                        <h2 class="text-book">{{ __('messages.book') }}</h2>
                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>

                    </div>

                    <div id="search" class="bor-sold">
                        <form action="{{ route('imamgroup', $id) }}" method="GET">
                            <input type="text" placeholder="{{ __('messages.book') }}" name="search"
                                value="{{ request()->search }}">
                            <button type="submit">{{ __('messages.bt_search') }}</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>


    </div>
@endsection
