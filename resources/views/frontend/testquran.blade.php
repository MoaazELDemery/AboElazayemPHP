@extends('layout.frontend.min')
@section('content')

<div class="language-tap">
    <a rel="alternate" href="{{route('swra_voice',$index) }}"> الأستماع للسورة </a>
</div>

<div class="container" style="padding-top :60px;">

    <div class="row reverse-col div-flex-flex">
        <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">
            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">
                <div class="filter">
                    <div id="Search-toggle" class="shikh-flex" style="background-color: #009468;">
                        <i class="fa fa-minus-square" aria-hidden="true"></i>
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        <h3 class="text-book">البحث في القرآن الكريم</h3>
                    </div>
                    <div id="search" class="bor-sold">
                        <form action="{{route('testquran',$index)}}" method="GET">
                            <input type="text" placeholder="البحث في القرآن الكريم" name="search" value="{{ request()->search }}">
                            <button type="submit">{{__('messages.bt_search')}}</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>



<div class="service-area-2">
    <div class="container">
        <div class="service-wrap " style="padding:0;">
            <div class="col-md-12 wow animate__backInRight " data-wow-duration="2s">

                <div class="row row-text">
                    <div class="col-md-4">
                        <div class="benat-text">
                            <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>عدد آيات سورة {{$aa->sura_name}} : {{$AboutQurans->nuber_aya}}</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benat-text">
                            <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i> عدد الكلمات في سورة {{$aa->sura_name}} : {{$AboutQurans->nuber_word}}</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benat-text">
                            <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>عدد الاحرف في سورة {{$aa->sura_name}} : {{$AboutQurans->nuber_letter}}</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benat-text">
                            <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>النزول : {{$AboutQurans->down}}</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benat-text">
                            <p><i style="padding-left: 10px;" class="fas fa-angle-left"></i>الأسم بالأنجليزي : {{$AboutQurans->name_en}}</p>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benat-text">
                            <p> <i style="padding-left: 10px;" class="fas fa-angle-left"></i>موضعها في القرآن : {{$AboutQurans->position}} </p>

                        </div>
                    </div>

                </div>

                <form action="{{route('testquran',$index)}}" method="GET">

                    <div class="row row-text-1">
                        @csrf
                        <div class="col-md-4 select-pading">
                            <div class="benat-text" style="width: 100%;">
                                <select name="from" id="">
                                    @foreach($drop_downs as $swra)
                                    <option style="font-size: 18px ;" value="{{$swra->VerseID}}"> من الاية : {{$swra->VerseID}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 select-pading">
                            <div class="benat-text">
                                <select name="to" id="">

                                    @foreach($drop_downs->sortBy('VerseID') as $swra)
                                    <option style="font-size: 18px ;" selected="selected" value="{{$swra->VerseID}}"> الي الاية : {{$swra->VerseID}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="benat-text" style="text-align: center;">
                                <button class="botton-form" type="submit"><span>عرض</span></button>

                            </div>
                        </div>




                    </div>
                </form>
                <div class="filter">
                    <div id="Search-toggle" class="shikh-flex background1" style="height: 100px; background: none;     justify-content: center !important;">

                        <div class="col-md-12 wow animate__backInRight" data-wow-duration="2s">

                            <h1 class="madie-text-h1" style="text-align: center;  "> ( سورة :{{$aa->sura_name}} ) </h1>
                        </div>
                    </div>

                    <div id="search" class=" background"  style="position:relative; background: none">
                    <div style="text-align: center;">
                    <img width="280px" src="https://equran.me/assets/-images/basmala.png" alt="﷽">
                    </div>

                        @foreach($swras as $swra)
                        <div class="row" style="border-bottom: 2px solid #149247;display: flex">
                            <div class="col-md-10">
                                <div class="one-quroun" style="padding: 20px 0px; position:relative">
                                    <div>
                                        <p class="p-size"><a style="color: #444;" href="{{ route('test_tafseer',[$swra->SuraID,$swra->VerseID]) }}">{{$swra->AyahText}}</a> <label class="labelstyle" style="float: none;">﴿{{$swra->VerseID}}﴾</label></a> </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <span class="span-size"><a href="{{ route('test_tafseer',[$swra->SuraID,$swra->VerseID]) }}" style="color: #fff; background: #009468;padding: 15px;"> تفسير الاية</a></span>
                            </div>
                        </div>

                        @endforeach




                    </div>

                </div>
            </div>

        </div>


    </div>
</div>


@endsection
