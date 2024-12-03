@extends('layout.frontend.min')
@section('content')
    <div class="container">
        <div class="row reverse-col div-flex-flex" style="margin-top: 60px">
            <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                    <div class="filter">
                        <div id="Search-toggle" class="shikh-flex ">
                            <i class="fa fa-minus-square" aria-hidden="true"></i>
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            <h3 class="text-book">البحث في القصائد والمواجيد</h3>
                        </div>
                        <div id="search" class="bor-sold">
                            <form action="{{ route('poem3') }}" method="GET">
                                <input type="text" placeholder="البحث في القصائد والمواجيد" name="search"
                                    value="{{ request()->search }}">

                                <button type="submit">{{ __('messages.bt_search') }}</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <section class="service-single-section section-padding">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


                        <div class="filter" style="margin-bottom: 40px;">
                            <div class="shikh-flex shikh-icon bg-about">

                                <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                                    <h1 class="text-h1" style=" text-align: center ;     padding: 10px;">
                                        {{ __('messages.Poems') }} </h1>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


                <div class="row  div-flex">
                    <div class="col col-md-12 wow animate__backInLeft" data-wow-duration="2s">

                        @foreach ($poemss as $poems)

                            <div class="col-lg-4 col-md-6 col-sm-6 custom-grid col-12 pull-right pullmedia "
                                style="max-height : 107px ;overflow:auto ; margin-bottom : 20px ">

                                <div class="service-single-item item-spec bg-about "
                                    style="border-bottom: 4px solid #149247;">
                                    <div class="text-text hambozo">
                                        <a href="{{ route('show', $poems->id) }}"><span class="testing  "><i
                                                    class="fas fa-bookmark  "></i>
                                                <p>{{ __('messages.name') }}:{{ $poems->pname_ar }} </p></a>
                                        <a href="{{ route('show', $poems->id) }}"><span class="poms-flex"><i
                                                    class="fas fa-bookmark"></i>{{ __('messages.number') }}:{{ $poems->num_peom }}
                                        </a>
                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="pagination-wrapper pagination-wrapper-left">
                    <ul class="pg-pagination" style="display: flex;  flex-direction: row;     justify-content: center; ">

                        {{ $poemss->links() }}


                    </ul>
                </div>



            </div> <!-- end row -->
            <!-- end container -->
        </section>
    @endsection
