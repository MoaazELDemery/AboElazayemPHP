@extends('layout.dashboard.app')
@section('content')
<!-- BEGIN SAMPLE TABLE PORTLET-->

<div class="row">

    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-grey-salsa bold uppercase">مكتبة / صوتيات</span>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{route('dashboard.AudioLibrary.index',$id_button)}}" class="btn btn-circle btn-default">
                            <i class="fa fa-mail-reply"></i> الغاء </a>

                    </div>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.AudioLibrary.edit', [$Audios->id,$id_button]) }}" class="btn btn-circle btn-default">
                            <i class="fa fa-pencil"></i> تعديل </a>

                    </div>
                </div>
            </div>
            <div class="portlet-body tabs-below">
                <div class="tab-content">

                    <div class="tab-pane active" id="tab_3_1">
                        <div class="row">
                            <div class="col-12">
                                <div class="wpo-section-title wow animate__backInUp" data-wow-duration="2s">
                                    <h1>{{ $Audios->ButtonLibrary->name_ar }}</h1>

                                    <h2> {{ $Audios->name_ar }}</h2>
                                    
                                    <p> {!! $Audios->description_ar!!}</p>

                                    <audio class="single-audio-inner " controls="">
                                        <source src="{{asset('storage/AudioLibrary/'.$Audios->audio)}}" type="audio/ogg">
                                    </audio>


                                </div>
                            </div>
                        </div>



                    </div>
                 


                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_3_1" data-toggle="tab"> عربي </a>
                    </li>
                   

                </ul>
            </div>
        </div>
    </div>

</div>










@endsection