@extends('layout.frontend.min')

@section('content')
    <section class="service-single-section section-padding">
        <div class="container">

            <!-- h1 -->
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
    

            <div class="row row-text">
               
                    @if ($poem->pname_ar != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>اسم القصيدة :
                                    {{ $poem->pname_ar }}</p>

                            </div>
                        </div>
                    @endif

                    @if ($poem->num_peom != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i> رقم القصيدة
                                    :{{ $poem->num_peom }} </p>

                            </div>
                        </div>
                    @endif
                    @if ($poem->num_verses != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>عدد
                                    الابيات:{{ $poem->num_verses }} </p>

                            </div>
                        </div>
                    @endif
                    @if ($poem->Place_ar != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>مكان القصيدة :
                                    {{ $poem->Place_ar }}</p>

                            </div>
                        </div>
                    @endif
                    @if ($poem->occasion_ar != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>مناسبة القصيدة
                                    :{{ $poem->occasion_ar }} </p>

                            </div>
                        </div>
                    @endif
                    @if ($poem->date_hijri != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p> <i style="padding-left: 10px;" class="fas fa-angle-left"></i>تاريخ هجري :
                                    {{ $poem->date_hijri }}</p>

                            </div>
                        </div>
                    @endif
                    @if ($poem->date_birth != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p> <i style="padding-left: 10px;" class="fas fa-angle-left"></i>تاريخ ميلادي :
                                    {{ $poem->date_birth }}</p>

                            </div>
                        </div>
                    @endif
                    @if ($poem->name_sea != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p> <i style="padding-left: 10px;" class="fas fa-angle-left"></i> بحرها :
                                    {{ $poem->name_sea }}</p>

                            </div>
                        </div>
                    @endif
                    @if ($poem->name_follow != null)
                        <div class="col-md-4">
                            <div class="benat-text">
                                <p> <i style="padding-left: 10px;" class="fas fa-angle-left"></i>تابعه الي
                                    :{{ $poem->name_follow }} </p>

                            </div>
                        </div>
                    @endif
               





            </div>


            @if ($poem->pname_ar == null)
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-breadcumb-wrap">
                            <h2>لا يوجد</h2>
                            <!-- <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><span>Blog</span></li>
                                                </ul> -->
                        </div>
                    </div>
                </div>
            @else
                <div class="row " style="display: flex; justify-content: center;">
                    <div class="col-md-10 col-sm-12 col-xs-12 wow pull-right animate__backInLeft z-i"
                        data-wow-duration="2s">
                        <div class="row" style="    padding: 25px 0px;">

                            <div class="col-md-11  wow animate__backInRight" data-wow-duration="2s">

                                <div class="row">
                                
                                @if(count($poem->Explained) > 0)
                                    <div class="col-md-6" style="text-align: center">
                                        <a style="  padding: 15px 40px;
                                            color: #fff;
                                            background: #009468;
                                            font-size: 18px;" href="{{ route('explained', $poem->id) }}">شرح القصيدة</a>

                                    </div>
                                @endif
                                
                                @if(count($poem->Listen) > 0)
                                    <div class="col-md-6" style="text-align: center">
                                        <a style="    padding: 15px 40px;
                                            color: #fff;
                                            background: #009468;
                                            font-size: 18px;" href="{{ route('listen', $poem->id) }}"> استمع للقصيده</a>
                                    </div>
                                    @endif
                                </div>

                            </div>

                        </div>


                        <div class="row  wrapper flex-column  poem-border">


                            <h2 class="poem-heading " style="text-align: center; margin: 30px;"> {{ $poem->pname_ar }}
                            </h2>
                            @foreach ($poem->poem_rawies as $poem_rawy)


                                <div style="font-family: hanimation ; color : #444 !important;text-align : center "
                                    class="test  testWrapper">
                                    <div style="color : #444 !important;" class="col-5 ay7aga bg-dark ">
                                        <p> {!! $poem_rawy->right_ar !!}</p>
                                    </div>
                                    <div class="col-2">
                                        <span>|</span>
                                    </div>
                                    <div style="color : #444 !important;" class="col-5 ay7aga bg-light ">
                                        <!-- <span style="word-spacing: normal;" ></span> -->
                                        <p> {!! $poem_rawy->left_ar !!}</p>

                                    </div>
                                </div>





                            @endforeach


                        </div>

                    </div>

                </div>
            @endif


        </div>


        </div>
        </div> <!-- end row -->
    </section> <!-- end container -->
@endsection
