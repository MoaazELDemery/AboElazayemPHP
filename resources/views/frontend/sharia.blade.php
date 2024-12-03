@extends('layout.frontend.min')
@section('content')


<section class="service-single-section section-padding">
    <div class="container">


        @if (!is_null($posts))

        <div class="row">
            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


                <div class="filter" style="margin-top: 25px;">
                    <div class="shikh-flex shikh-icon bg-about">

                        <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                            <h1 class="font-h1"> {{ $posts->name_ar }} </h1>


                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="row reverse-col ">
            <div class="col col-md-4 wow animate__backInLeft" data-wow-duration="2s">
                <div class="service-sidebar">
                    <div class="widget service-list-widget">
                        <div class="wpo-blog-sidebar" style="    margin-bottom: 33px;">

                            <div class="widget search-widget">
                                <form>
                                    <div>
                                        <form action="sharia" method="GET">
                                            <input type="text" class="form-control text-input" name="search" value="{{ request()->search }}" placeholder="{{ __('messages.bt_search') }}">
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <h3>{{ __('messages.subsections') }} </h3>
                        <ul style="overflow-y: scroll;">
                            @foreach ($chiled_categories as $category)
                            <li class="current"><a href="{{ route('sharia', $category->id) }}">
                                    {{ $category->name_ar }} </a></li>
                            @endforeach

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col col-md-8 wow animate__backInRight" data-wow-duration="2s">
                <div class="service-single-content">

                    <div class="service-single-img">
                        <img src="{{ asset('storage/post/' . $posts->photo) }}" alt="{{ $posts->title_ar }}">
                    </div>

                    <h2>{{ $posts->title_ar }}</h2>
                    <p class="text-p">{!! $posts->description_ar !!}</p>


                </div>
            </div>
        </div> <!-- end row -->
        @else

        <div class="wpo-breadcumb-area" style="margin-top: 50px">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="wpo-breadcumb-wrap">
                            <h2>لا يوجد بيانات الان</h2>
                            <ul style="padding: 0px; ">
                               
                                <li style="margin-top: 30px"><a style="border: 1px solid; padding: 4px 10px; border-radius: 30px; font-size:20px;" href="{{ url()->previous() }}">الرجوع الي الصفحه</a></li>
                              

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        @endif


    </div> <!-- end container -->
</section>

@endsection