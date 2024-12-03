@extends('layout.dashboard.app')
@section('content')
<!-- BEGIN SAMPLE TABLE PORTLET-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-grey-salsa bold uppercase"> مكتبةالامام  </span>
                </div>
               

                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.ButtonType.index') }}" class="btn btn-circle btn-default">
                            <i class="fa fa-mail-reply"></i> الغاء </a>

                    </div>

                </div>


                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.ButtonType.edit', $Types->id) }}" class="btn btn-circle btn-default">
                            <i class="fa fa-pencil"></i> تعديل </a>

                    </div>

                </div>
               
            </div>
            <div class="portlet-body tabs-below">
                <div class="tab-content">

                    <div class="tab-pane active" id="tab_3_1">
                        
                        {{ $Types->ImamDisciples->name_ar }}

                        <h1>{{ $Types->name_ar }}</h1>

                        <p>{!! $Types->description_ar !!}</p>

                    </div>
                    <div class="tab-pane fade" id="tab_3_2">
                        
                        {{ $Types->ImamDisciples->name_en }}

                        <h1>{{ $Types->name_en }}</h1>

                        <p> {!! $Types->description_en !!} </p>


                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_3_1" data-toggle="tab"> عربي </a>
                    </li>
                    <li>
                        <a href="#tab_3_2" data-toggle="tab"> English </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>
<!-- END SAMPLE TABLE PORTLET-->





@endsection