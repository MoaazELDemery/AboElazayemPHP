@extends('layout.dashboard.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet green-sharp box">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>بيانات الرساله
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="blockui_sample_3_2_element">
                        <h3> الاسم الاول: {{$contacts->first}}</h3>
                        <h3>الاسم الثاني:{{$contacts->second}}</h3>
                        <h3> البريد الاكتروني:{{ $contacts->email}}</h3>
                        <h4>الرساله: {{ $contacts->messages }}</h4>
                        <h4> الوصف المحتوي:{{ $contacts->description }}</h4>
                    </div>
                </div>

                <div class="form-actions left">
                    <a href="{{ route('dashboard.contact.index')}}" class="btn default">الغاء</a>
                   
                </div>
            </div>
        </div>

    </div>


@endsection
