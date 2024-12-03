@extends('layout.frontend.min')

@section('content')
    <!-- start service-single-section -->
    <section class="service-single-section section-padding wow animate__backInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row">

                @foreach ($Texts as $Text)
                    <div class="col col-md-12">
                        <div class="service-single-content group">

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
    <!-- end service-single-section -->
    <div class="service-area-2">
        <div class="container">
            <div>
                <div class="row wow animate__backInUp" data-wow-duration="2s">
                    @foreach ($categories as $category)
                        <div class="col-lg-6 col-md-6 col-sm-6 custom-grid col-12 pull-right">
                            <div class="service-single-item bg-about" style="border-bottom: 3px solid #009440;">
                                <a href="{{ route('sharia', $category->id) }}">
                                    <div class="service-single-img main-sections-img">

                                        <img src=" {{ asset('storage/categorie/' . $category->photo) }}"
                                            alt="{{ $category->title }}">
                                    </div>
                                </a>
                                @if (app()->getLocale() == 'ar')
                                    <div class="service-text">
                                        <h2><a href="{{ route('sharia', $category->id) }}"> {{ $category->name_ar }} </a>
                                        </h2>
                                    </div>
                                @else
                                    <div class="service-text">
                                        <h2><a href="{{ route('sharia', $category->id) }}"> {{ $category->name_en }} </a>
                                        </h2>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>


        </div>
    </div>

@endsection
