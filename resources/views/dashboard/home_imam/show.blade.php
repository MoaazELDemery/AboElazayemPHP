@extends('layout.dashboard.app')
@section('content')
<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="row">

    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-grey-salsa bold uppercase"> الامام محمد ماضي ابو العزائم  المحتوي الاول</span>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.home_imam.index') }}" class="btn btn-circle btn-default">
                            <i class="fa fa-mail-reply"></i> الغاء </a>

                    </div>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.home_imam.edit', $Imams->id) }}" class="btn btn-circle btn-default">
                            <i class="fa fa-pencil"></i> تعديل </a>
                    </div>
                </div>
            </div>
            <div class="portlet-body tabs-below">
                <div class="tab-content">

                    <div class="tab-pane active" id="tab_3_1">

                        
                        <p>{{ $Imams->name_ar }}</p>
                        <p> {{ $Imams->title_ar }}</p>
                        <p>{!! $Imams->description_ar !!}</p>
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