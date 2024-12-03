@extends('layout.dashboard.app')
@section('content')
<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="row">

    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-grey-salsa bold uppercase"> تلاميذ تفسير</span>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.student_tafser.index') }}" class="btn btn-circle btn-default">
                            <i class="fa fa-mail-reply"></i> الغاء </a>

                    </div>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.student_tafser.edit', $Student_tafsers->id) }}" class="btn btn-circle btn-default">
                            <i class="fa fa-pencil"></i> تعديل </a>

                    </div>
                </div>
            </div>
            <div class="portlet-body tabs-below">
                <div class="tab-content">

                    <div class="tab-pane active" id="tab_3_1">

                        <h3> {{$Student_tafsers->Student->name_ar}}</h3>
                        @if($Student_tafsers->Type == null)
                        <h1> لا يوجد</h1>

                        @else
                        <h3> {{$Student_tafsers->Type->name_ar}}</h3>

                        @endif
                        <h3> آيه {{$Student_tafsers->ayat->key_aya}} (سوره {{$Student_tafsers->ayat->sora_id}})</h3>
                        <p>{!! $Student_tafsers->description_ar !!}</p>
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
<!-- END SAMPLE TABLE PORTLET-->
@endsection