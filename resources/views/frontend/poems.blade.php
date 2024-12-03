@extends('layout.frontend.min')
@section('content')
<section class="service-single-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">

                <a href="{{route('poem3')}}">
                    <div class="filter">
                        <div class="shikh-flex shikh-icon bg-about">

                            <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                                <h1 class="text-h1" style="text-align: center;     padding: 10px;"> {{__('messages.Poems')}} </h1>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        </div>

        <div class="row reverse-col div-flex-flex" style="margin-top: 60px">
            <div class="col-md-12 wow animate__backInUp" data-wow-duration="2s">

                <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                    <div class="filter">
                        <div id="Search-toggle" class="shikh-flex ">
                            <i class="fa fa-minus-square" aria-hidden="true"></i>
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            <h3 class="text-book">البحث في القصائد والمواجيد</h3>
                        </div>
                        <div id="search" class="bor-sold">
                            <form action="{{route('poem3')}}" method="GET">
                                <input type="text" placeholder="البحث في القصائد والمواجيد" name="search"
                                    value="{{ request()->search }}">

                                <button type="submit">{{ __('messages.bt_search') }}</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

       






    </div> <!-- end row -->
    <!-- end container -->
</section>
@endsection