@extends('layout.frontend.min')

@section('content')
    <section class="service-single-section section-padding">
        <div class="container">


            <div class="row">
                <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


                    <div class="filter" style="margin-bottom: 40px;">
                        <div class="shikh-flex shikh-icon bg-about">

                            <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                                <h1 class="text-h1" style=" text-align: center ;     padding: 10px;">
                                    {{ __('messages.prose') }} </h1>
                            </div>
                        </div>

                    </div>

                </div>

            </div>





            <div class="row  div-flex">
                <div class="col col-md-8 wow animate__backInLeft" data-wow-duration="2s">
                    <?php
                    $empty = 1;
                    ?>
                    @foreach ($Librarys as $Library)
                    <?php
                    $empty = 0;
                    ?>
                        @if (app()->getLocale() == 'ar')
                            <div class="col-lg-6 col-md-6 col-sm-6 custom-grid col-12 pull-right pullmedia "
                                style="max-height : 107px ;overflow:auto ; margin-bottom : 20px ">

                                <div class="service-single-item item-spec bg-about "
                                    style="border-bottom: 4px solid #149247;">
                                    <div class="text-text hambozo">
                                        <a href="{{ route('TextNacry', $Library->id) }}"><span class="testing  "><i class="fas fa-bookmark  "></i>
                                                {{ $Library->name_ar }}</a>
                                        <a href="{{ route('TextNacry', $Library->id) }}"><span class="poms-flex"><i class="fas fa-bookmark"></i>
                                                {{ $Library->title_ar }}
                                        </a>
                                    </div>


                                </div>

                            </div>
                        @else
                            @if ($Library->name_en == null)
                                <div class="wpo-breadcumb-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="wpo-breadcumb-wrap">
                                                    <h2>Not Found</h2>
                                                    <!-- <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><span>Blog</span></li>
                                                </ul> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-6 col-md-6 col-sm-6 custom-grid col-12 pull-right pullmedia "
                                    style="max-height : 107px ;overflow:auto ; margin-bottom : 20px ">

                                    <div class="service-single-item item-spec bg-about "
                                        style="border-bottom: 4px solid #149247;">
                                        <div class="text-text hambozo">
                                            <a href="{{ route('TextNacry', $Library->id) }}"><span class="testing  "><i class="fas fa-bookmark  "></i>
                                                    {{ $Library->name_en }}</a>
                                            <a href="{{ route('TextNacry', $Library->id) }}"><span class="poms-flex"><i class="fas fa-bookmark"></i>
                                                    {{ $Library->title_en }}
                                            </a>
                                        </div>


                                    </div>

                                </div>

                            @endif
                        @endif

                    @endforeach
                    @if(count($Librarys) >= 12)
                    @if ($empty)
                        <h1 class="H-TEXT">{{ __('messages.look') }}</h1>
                        <div style="display: none">
                            <a class="" href="{{ $Librarys->previousPageUrl() }}">السابق</a>
                            <a style="display: none" href="{{ $Librarys->nextPageUrl() }}">التالى</a>
                        </div>

                    @else


                        <div lass="wpo-section-title" style=" margin-left: 10px;">
                            <a class="nt_button smile-font but-madi2 "
                                href="{{ $Librarys->nextPageUrl() }}">{{ __('messages.next') }}</a>
                            <a class="nt_button smile-font but-madi3 "
                                href="{{ $Librarys->previousPageUrl() }}">{{ __('messages.previous') }}</a>
                        </div>
@endif
@endif

                </div>


                <div class="col-md-4  wow animate__backInRight" data-wow-duration="2s">
                    <div class="filter">
                        <div id="Search-toggle" class="shikh-flex ">
                            <i class="fa fa-minus-square" aria-hidden="true"></i>
                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                            <h3 class="text-book">الفهرس</h3>
                        </div>
                        <div id="search" class="bor-sold">
                            <form action="{{route('Nacry')}}" method="GET">
                                <input type="text" placeholder="اسم الموضوع" name="search" value="{{ request()->search }}">
                                <input type="text" placeholder="اسم الكتاب" name="search" value="{{ request()->search }}">
                                <button type="submit">{{ __('messages.bt_search') }}</button>
                            </form>

                        </div>

                    </div>

                </div>

            </div>


        </div> <!-- end row -->
        <!-- end container -->
    </section>
@endsection
