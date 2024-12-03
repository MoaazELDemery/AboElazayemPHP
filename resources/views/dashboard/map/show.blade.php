@extends('layout.dashboard.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet green-sharp box">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>بيانات الرساله
                </div>
                <div class="actions">
                    <a href="{{ route('dashboard.map.edit', $maps->id) }}" class="btn btn-default btn-sm">
                        <i class="fa fa-pencil"></i> تعديل </a>
                    <a href="{{ route('dashboard.map.index') }}" class="btn btn-default btn-sm">
                    <i class="fa fa-mail-reply"></i>الغاء</a>
                   
                </div>
            </div>
            <div class="portlet-body">

                <div id="blockui_sample_3_2_element">
                    <div class=" col-lg-6 col-md-6 col-sm-12 col-12 wow animate__backInLeft" data-wow-duration="2s">
                        <div class="contact-map">
                            <iframe src="{{ $maps->map }}" allowfullscreen></iframe>
                        </div>
                    </div>
                    <h3> البريد الاكتروني:{{ $maps->email}}</h3>
                    <h3> رقم الموبايل:{{ $maps->mobile }}</h3>
                    <h3>العنوان بالعربي:{{ $maps->address_ar }}</h3>
                    <h3> العنوان بالانجليزي:{{ $maps->address_ar  }}</h3>
                </div>
              
            </div>
        </div>
    </div>

</div>
@endsection