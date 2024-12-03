@extends('layout.frontend.min')

@section('content')
<div class="container">



    <div class="row">
        <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">


            <div class="filter">
                <div class="shikh-flex shikh-icon bg-about" style="margin-top: 80px; ">

                    <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">


                        <h1 style="text-align: center;     padding: 10px;">{{__('messages.prose')}}</h1>



                    </div>
                </div>

            </div>

        </div>

    </div>


    <div class="row reverse-col div-flex-flex">
        <div class="col-md-12 wow animate__backInUp" data-wow-duration="2s">

            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
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
                            <button type="submit">{{__('messages.bt_search')}}</button>
                        </form>

                    </div>

                </div>
            </div>



        </div>

    </div>

    @endsection