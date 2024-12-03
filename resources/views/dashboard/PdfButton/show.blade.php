@extends('layout.dashboard.app')
@section('content')
<!-- BEGIN SAMPLE TABLE PORTLET-->

<div class="row">

    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-grey-salsa bold uppercase"> الكتاب / أبناء إلامام و تلاميذه</span>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.PdfButton.index',$id_button) }}" class="btn btn-circle btn-default">
                        <i class="fa fa-mail-reply"></i> الغاء </a>

                    </div>
                </div>
                <div class="actions">
                    <div class="actions">
                        <a href="{{ route('dashboard.PdfButton.edit', [$Buttons->id,$id_button]) }}" class="btn btn-circle btn-default">
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
                                    <h1>{{ $Buttons->ButtonType->name_ar }}</h1>

                                    <h2> {{ $Buttons->name_ar }}</h2>
                                    
                                  
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12" >
                                <iframe src="{{asset('storage/PdfButton/pdf/'.$Buttons->pdf)}}" width="70%" height="700"></iframe>
                            </div>
                        </div>
                  
                    </div>
                    <div class="tab-pane fade" id="tab_3_2">
                        <div class="row">
                            <div class="col-12">
                                <div class="wpo-section-title wow animate__backInUp" data-wow-duration="2s">
                                   <h1>{{ $Buttons->ButtonType->name_ar }}</h1>
                                   
                                    <h2> {{ $Buttons->name_en }}</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12" >
                                <iframe src="{{asset('storage/PdfButton/pdf/'.$Buttons->pdf)}}" width="70%" height="700"></iframe>
                            </div>
                        </div>
                   

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


    
       
 





@endsection